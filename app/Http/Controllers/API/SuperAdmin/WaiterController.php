<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\Waiter;
use App\Models\Restaurant;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WaiterResource;
use App\Http\Resources\WaiterCollection;
use App\Http\Requests\StoreWaiterRequest;

class WaiterController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rules = ['id' => 'required|integer'];
        $messages = ['id.required' => 'The id parameter is required'];
        $request->validate($rules, $messages);

        $restaurant = Restaurant::where('id', $request->input('id'))->first();
        $waiters = $restaurant->waiters()->paginate();
        return new WaiterCollection($waiters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWaiterRequest $request)
    {
        $waiter = new Waiter;
        $waiter->restaurant_id = $request->input('restaurant_id');
        $waiter->fullname = $request->input('fullname');
        $waiter->phone_number = $request->input('phone_number');
        $waiter->pin = $request->input('pin');
        $waiter->employment_type = $request->input('employment_type');
        $waiter->on_shift = $request->input('on_shift');

        if($request->hasFile('profile_pic')) {
            $image = request()->file('profile_pic');
            $name = $waiter->id . '_' . $waiter->phone_number . '_profile_pic' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/waiter/profile';
            $filePath = $this->uploadOne($image, $folder, $name);
            $waiter->profile_pic = $filePath;
            $waiter->save();
        }
        $waiter->save();

        return new WaiterResource($waiter);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Waiter::find($id)) {
            return response()->json([
                'message' => 'Resource not Found'
            ], 404);
                
        }
        Waiter::find($id)->delete();
        return response()->json([
            'data' => [
                'message' => 'Waiter successfully deleted'
            ]
        ]);
    }
}
