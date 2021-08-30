<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    use UploadTrait;

    public function index()
    {
        $users = User::paginate();
        return new UserCollection($users);
    }
    
    public function store(StoreUserRequest $request)
    {
        $user = new User;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->number = $request->input('number');
        $user->verification_code = $request->input('verification_code');
        $user->activated = $request->input('activated') ? $request->input('activated') : true;
        $user->access_rights = $request->input('access_rights');
        $user->password = Hash::make($request->password);

        if($request->hasFile('profile_pic')) {
            $image = request()->file('profile_pic');
            $name = $user->id . '_' . $user->email . '_profile_pic' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/superAdmin/profile';
            $filePath = $this->uploadOne($image, $folder, $name);
            $user->profile_pic = $filePath;
            $user->save();
        }

        $user->save();

        return new UserResource($user);
    }

    /**
     * Update a user
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return UserResource
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $input = $request->only(['firstname', 'lastname', 'email', 'number', 'activated', 'access_rights', 'verification_code']);

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        if($request->hasFile('profile_pic')) {
            $image = request()->file('profile_pic');
            $name = $user->id . '_' . $user->email . '_profile_pic' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/superAdmin/profile';
            $filePath = $this->uploadOne($image, $folder, $name);
            $user->profile_pic = $filePath;
            $user->save();
        }

        $user->update($input);
        return new UserResource($user);
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return response()->json([
            'data' => [
                'message' => 'User deleted successfully'
            ]
        ]);

    }

    public function deleteMultiple(Request $request)
    {
        $rules = ['users' => 'required|array'];
        $messages = ['users.required' => 'The users parameter is required'];
        $request->validate($rules, $messages);

        $users = $request->input('users');

        foreach ($users as $user) {
            $u = User::where('id', $user)->first();
            if (!$u) {
                return response()->json([
                    'message' => 'Resource not Found'
                ], 404);
            }
        }

        User::whereIn('id', $users)->forceDelete();
        return response()->json([
            'data' => [
                'message' => 'User(s) deleted successfully'
            ]
        ]);
    }
}
