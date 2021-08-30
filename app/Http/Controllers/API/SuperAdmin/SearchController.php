<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\RestaurantCollection;
use App\Http\Resources\SearchRestaurantUserCollection;

class SearchController extends Controller
{
    //Search for Restaurants using name, email, state, city, suburb, post code or address
    public function searchRestaurants(Request $request)
    {
        $keyword = $request->input('keyword');
        $restaurants = Restaurant::where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('email', 'LIKE', "%{$keyword}%")
                ->orWhere('state', 'LIKE', "%{$keyword}%")
                ->orWhere('city', 'LIKE', "%{$keyword}%")
                ->orWhere('suburb', 'LIKE', "%{$keyword}%")
                ->orWhere('post_code', 'LIKE', "%{$keyword}%")
                ->orWhere('address', 'LIKE', "%{$keyword}%")
                ->paginate();
        
        return new RestaurantCollection($restaurants);
    }

    //Search for Admin Users using firstname, lastname, email, number
    public function searchAdminUsers(Request $request)
    {
        $keyword = $request->input('keyword');
        $users = User::where('firstname', 'LIKE', "%{$keyword}%")
                ->orWhere('lastname', 'LIKE', "%{$keyword}%")
                ->orWhere('email', 'LIKE', "%{$keyword}%")
                ->orWhere('number', 'LIKE', "%{$keyword}%")
                ->paginate();

        return new UserCollection($users);
    }

    //Search for Restaurant Users by full name, phone number, email or restaurant name.
    public function searchRestaurantUsers(Request $request)
    {
        $keyword = $request->input('keyword');
        $restaurantUsers = Restaurant::join('restaurant_users', 'restaurants.id', '=', 'restaurant_users.restaurant_id')
                    ->where('restaurants.name', 'LIKE', "%{$keyword}%")
                    ->orWhere('restaurant_users.fullname', 'LIKE', "%{$keyword}%")
                    ->orWhere('restaurant_users.phone_number', 'LIKE', "%{$keyword}%")
                    ->orWhere('restaurant_users.email', 'LIKE', "%{$keyword}%")
                    ->paginate();
                    
        return new SearchRestaurantUserCollection($restaurantUsers);
    }
}