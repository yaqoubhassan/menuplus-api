<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\Menu;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Http\Requests\StoreMenuRequest;

class MenuController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = new Menu;
        $menu->restaurant_id = $request->restaurant_id;
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->enabled = $request->enabled;

        if($request->hasFile('image')) {
            $image = request()->file('image');
            $name = $menu->id . '_' . $menu->name . '_image' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/menu/image';
            $filePath = $this->uploadOne($image, $folder, $name);
            $menu->image = $filePath;
            $menu->save();
        }
        $menu->save();

        return new MenuResource($menu);
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
