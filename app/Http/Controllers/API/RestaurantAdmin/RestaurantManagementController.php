<?php

namespace App\Http\Controllers\API\RestaurantAdmin;

use App\Http\Controllers\Controller;
use App\Http\Resources\RestaurantResource;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Resources\RestaurantUserResource;
use App\Http\Requests\UpdateRestaurantDetailsRequest;
use App\Http\Requests\UpdateRestaurantAdminDetailsRequest;

class RestaurantManagementController extends Controller
{
    public function updateRestaurant(UpdateRestaurantDetailsRequest $request)
    { 
        $user = auth()->user();
        $restaurant = $user->restaurant;
        
        $input = $request->only(['name', 'business_type', 'phone_number', 'email', 'capacity', 'state', 'city', 'suburb', 'post_code', 'address']);

        $restaurant->update($input);
        return new RestaurantResource($restaurant);
    }

    public function updateRestaurantAdmin(UpdateRestaurantAdminDetailsRequest $request)
    {
        $user = auth()->user();

        $input = $request->only(['fullname', 'email', 'phone_number']);
        
        $user->update($input);
        return new RestaurantUserResource($user);
    }

    public function generateForStaff()
    {
        $user = auth()->user();

        $restaurant = $user->restaurant;
        $currentTimeinSeconds = time();
        $key_string = 'res_' . $restaurant->id . date('Y-m-d:H', $currentTimeinSeconds);
        $restaurant->staff_qr_key = $key_string;
        $restaurant->save();

        $qr_key = urlencode($key_string);

        $staff_url = 'waiterdev.menuplus.com.au/qr/' . $qr_key;
        $image = QrCode::format('png')->merge('image/MenuPlus_logo_QR.png', 0.3, true)
            ->size(500)->errorCorrection('H')
            ->generate($staff_url);

        return response($image)->header('Content-Type', 'image/png');
    }
    
    public function generateForCustomer()
    {
        $user = auth()->user();

        $restaurant = $user->restaurant;
        if ($restaurant->customer_qr_key == null) {
            $currentTimeinSeconds = time();
            $key_string = 'res_' . $restaurant->id . date('Y-m-d:H', $currentTimeinSeconds);
            $restaurant->customer_qr_key = $key_string;
            $restaurant->save();
        }

        if($restaurant->logo == null){
            $image = QrCode::format('png')
                ->size(500)->errorCorrection('H')
                ->generate('dinnerdev.menuplus.com.au/qr/' . urlencode($restaurant->customer_qr_key));
        }else{
            $image = QrCode::format('png')->merge($restaurant->logo, 0.3, true)
                ->size(500)->errorCorrection('H')
                ->generate('dinnerdev.menuplus.com.au/qr/' . urlencode($restaurant->customer_qr_key));
        }

        return response($image)->header('Content-Type', 'image/png');
    }
}
