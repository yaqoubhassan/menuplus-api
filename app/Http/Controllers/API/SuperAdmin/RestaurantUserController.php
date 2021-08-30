<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Traits\UploadTrait;
use App\Models\RestaurantUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\RestaurantUserResource;
use App\Http\Resources\RestaurantUserCollection;
use App\Http\Requests\StoreRestaurantUserRequest;
use App\Http\Requests\UpdateRestaurantUserRequest;

class RestaurantUserController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantUsers = RestaurantUser::paginate();
        return new RestaurantUserCollection($restaurantUsers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantUserRequest $request)
    {
        $user = new RestaurantUser;
        $user->fullname = $request->input('fullname');
        $user->restaurant_id = $request->input('restaurant_id');
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
        $user->access_rights = $request->input('access_rights');

        if($request->hasFile('profile_pic')) {
            $image = request()->file('profile_pic');
            $name = $user->id . '_' . $user->email . '_profile_pic' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/restaurant-user/profile_pic';
            $filePath = $this->uploadOne($image, $folder, $name);
            $user->profile_pic = $filePath;
            $user->save();
        }
        $user->save();

        return response()->json([
            'data' => [
                'message' => 'Restaurant user successfully created'
            ]
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantUserRequest $request, RestaurantUser $restaurantUser)
    {
        $input = $request->only(['fullname', 'phone_number', 'email', 'access_rights', ]);

        if ($request->has('password')) {
            $restaurantUser->password = Hash::make($request->input('password'));
            $restaurantUser->save();
        }

        if($request->hasFile('profile_pic')) {
            $image = request()->file('profile_pic');
            $name = $restaurantUser->id . '_' . $restaurantUser->email . '_profile_pic' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/restaurant-user/profile_pic';
            $filePath = $this->uploadOne($image, $folder, $name);
            $restaurantUser->profile_pic = $filePath;
            $restaurantUser->save();
        }
        $restaurantUser->update($input);

        return new RestaurantUserResource($restaurantUser);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
