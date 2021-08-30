<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\Dinner;
use App\Models\Restaurant;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DinerResource;
use App\Http\Resources\DinerCollection;
use App\Http\Requests\StoreDinerRequest;

class DinerController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rules = ['restaurant_id' => 'required|integer'];
        $messages = ['restaurant_id.required' => 'The restaurant id parameter is required'];
        $request->validate($rules, $messages);

        $restaurant = Restaurant::where('id', $request->input('restaurant_id'))->first();
        $diners = $restaurant->diners()->paginate();
        return new DinerCollection($diners);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDinerRequest $request)
    {
        $diner = new Dinner;
        $diner->firstname = $request->input('firstname');
        $diner->lastname = $request->input('lastname');
        $diner->phoneNumber = $request->input('phoneNumber');
        $diner->email = $request->input('email');
        $diner->temp_restaurant_id = $request->input('temp_restaurant_id');

        if($request->hasFile('profile_pic')) {
            $image = request()->file('profile_pic');
            $name = $diner->id . '_' . $diner->email . '_profile_pic' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/diner/profile';
            $filePath = $this->uploadOne($image, $folder, $name);
            $diner->profile_pic = $filePath;
            $diner->save();
        }
        $diner->save();

        return new DinerResource($diner);
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
        //
    }
}
