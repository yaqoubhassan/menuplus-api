<?php

namespace App\Http\Controllers\Auth\API;

use App\Models\User;
use App\Models\Dinner;
use App\Models\Waiter;
use Illuminate\Http\Request;
use App\Models\RestaurantUser;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\DinerResource;
use App\Http\Resources\WaiterResource;
use App\Http\Resources\RestaurantUserResource;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $phoneNumber = $request->input('phoneNumber');
        $password = $request->input('password');

        $fullName = $request->input('fullName');
        $pin = $request->input('pin');

        //Diner login
        if ($email && $phoneNumber) {
            $dinner = Dinner::where([['email', $email], ['phoneNumber', $phoneNumber]])->first();
            if($dinner) {
                return $this->createToken($dinner, $email, $phoneNumber);                
            }
            else {
                return $this->invalidCredentials();
            }
        } 

        //Waiter login
        elseif ($fullName && $pin && $phoneNumber) {
            $waiter = Waiter::where([['phone_number', $phoneNumber], ['pin', $pin]])->first();
            if($waiter) {
                return $this->createToken($waiter, null, null, $pin);                         
            } 
            else {
                return $this->invalidCredentials();
            }
        }

        elseif($email && $password) {
            $restaurantUser = RestaurantUser::where('email', $email)->first();
            $superAdmin = User::where('email', $email)->first();
            //Super Admin login
            if($superAdmin) {
                if (Hash::check($password, $superAdmin->password)) {
                    return $this->createToken($superAdmin, $email, null, null, true); 
                } else {
                    return $this->invalidCredentials();
                }
            }
            //Restaurant User login
            elseif ($restaurantUser) {
                if (Hash::check($password, $restaurantUser->password)) {
                    return $this->createToken($restaurantUser, $email, null, null); 
                } else {
                    return $this->invalidCredentials();
                }
            }
        }

        else {
            return $this->invalidCredentials();
        }

    }

    private function createToken($user, $email = null, $phoneNumber = null, $pin = null, $admin = null)
    {
        $tokenObj = $user->createToken('menuplus_api');
        $token = $tokenObj->plainTextToken;

        $resource = [];

        if($email && $phoneNumber) {
            $resource = new DinerResource($user);
        } elseif($pin) {
            $resource = new WaiterResource($user);
        } elseif($email && $admin) {
            $resource = new UserResource($user);
        } elseif($email) {
            $resource = new RestaurantUserResource($user);
        }

        return response()->json([
            'data' => [
                'access_token' => $token,
                'token_type'   => 'Bearer',
                'user' => $resource
            ]
        ], 200);
    }

    private function invalidCredentials()
    {
        return response()->json([
            'message' => 'Invalid login credentials'
        ], 401);
    }
}
