<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\Restaurant;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Models\RestaurantUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\RestaurantResource;
use App\Http\Resources\RestaurantCollection;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;

class RestaurantController extends Controller
{
    use UploadTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $restaurants = Restaurant::paginate();
        return new RestaurantCollection($restaurants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        $restaurant = new Restaurant;
        $restaurant->name = $request->input('name');
        $restaurant->state = $request->input('state');
        $restaurant->city = $request->input('city');
        $restaurant->suburb = $request->input('suburb');
        $restaurant->post_code = $request->input('post_code');
        $restaurant->business_type = $request->input('business_type');
        $restaurant->address = $request->input('address');
        $restaurant->phone_number  = $request->input('phone_number');
        $restaurant->email = $request->input('email');
        $restaurant->status = $request->input('status');
        $restaurant->capacity = $request->input('capacity');
        $restaurant->description = $request->input('description');
        
        if($request->hasFile('logo')) {
            $image = request()->file('logo');
            $name = $restaurant->id . '_' . $restaurant->email . '_logo' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/restaurant/logo';
            $filePath = $this->uploadOne($image, $folder, $name);
            $restaurant->logo = $filePath;
            $restaurant->save();
        }
        $restaurant->save();

        $user = new RestaurantUser;
        $user->fullname = $request->input('fullname');
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');

        $restaurant->user()->save($user);

        return new RestaurantResource($restaurant);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Restaurant $restaurant)
    {
        return new RestaurantResource($restaurant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $restaurantUser = $restaurant->user;
        $input = $request->only(['phone_number', 'email', 'name', 'address', 'state', 'city', 'suburb', 'business_type', 'capacity', 'description', 'status'] );

        $restaurantUserInputs = ['fullname', 'phone_number', 'email'];

        if ($request->has('password')) {
            $restaurantUser->password = Hash::make($request->password);
            $restaurantUser->save();
        }

        if($request->hasFile('logo')) {
            $image = request()->file('logo');
            $name = $restaurant->id . '_' . $restaurant->email . '_logo' . '.' . $image->getClientOriginalExtension();
            $folder = '/uploads/restaurant/logo';
            $filePath = $this->uploadOne($image, $folder, $name);
            $restaurant->logo = $filePath;
            $restaurant->save();
        }

        if ($request->hasAny('fullname', 'phone_number', 'email')) {
            foreach ($restaurantUserInputs as $restaurantUserInput) {
                if ($restaurantUser) {
                    if ($request->filled($restaurantUserInput)) {
                        $restaurantUser[$restaurantUserInput] = $request[$restaurantUserInput];
                        $restaurantUser->save();
                    }
                    
                }
            }
        }
        $restaurant->update($input);
        return new RestaurantResource($restaurant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Restaurant::find($id)) {
            return response()->json([
                'message' => 'Resource not Found'
            ], 404);
                
        }
        Restaurant::find($id)->delete();
        return response()->json([
            'data' => [
                'message' => 'Restaurant successfully deleted'
            ]
        ]);
    }


    public function cities()
    {
        return Restaurant::citiesAndTerritories();
    }
}
