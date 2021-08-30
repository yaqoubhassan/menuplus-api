<?php

use App\Http\Controllers\API\RestaurantAdmin\RestaurantManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SuperAdmin\MenuController;
use App\Http\Controllers\API\SuperAdmin\UserController;
use App\Http\Controllers\API\SuperAdmin\DinerController;
use App\Http\Controllers\API\SuperAdmin\SearchController;
use App\Http\Controllers\API\SuperAdmin\WaiterController;
use App\Http\Controllers\API\SuperAdmin\ProductController;
use App\Http\Controllers\API\SuperAdmin\RestaurantController;
use App\Http\Controllers\API\SuperAdmin\ProductPricingController;
use App\Http\Controllers\API\SuperAdmin\RestaurantUserController;
use App\Http\Controllers\API\SuperAdmin\SubscriptionPlanController;
use App\Http\Controllers\Auth\API\LoginController as APIAuthLoginController;
use App\Http\Controllers\Auth\API\LogoutController as APIAuthLogoutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('/login', [APIAuthLoginController::class, 'login'])->name('auth.login');
    Route::get('/logout', [APIAuthLogoutController::class, 'logout']);
});

Route::group(['prefix' => 'super-admin', 'middleware' => 'auth:api'], function() {
    Route::post('users', [UserController::class, 'store']);
    Route::get('users', [UserController::class, 'index']);
    Route::patch('users/{user}', [UserController::class, 'update']);
    Route::delete('users/{user}', [UserController::class, 'destroy']);
    Route::delete('users/delete-multiple', [UserController::class, 'deleteMultiple']);
    Route::post('restaurants/{restaurant}/subscribe', [SubscriptionPlanController::class, 'subscribeRestaurant']);
    Route::get('restaurants/cities', [RestaurantController::class, 'cities']);
    Route::apiResource('restaurants', RestaurantController::class);
    Route::apiResource('restaurant-users', RestaurantUserController::class);
    Route::apiResource('waiters', WaiterController::class);
    Route::apiResource('diners', DinerController::class);
    Route::apiResource('menus', MenuController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('product-pricings', ProductPricingController::class);
    Route::prefix('search')->group(function () {
        Route::get('restaurants', [SearchController::class, 'searchRestaurants']);
        Route::get('admin-users', [SearchController::class, 'searchAdminUsers']);
        Route::get('restaurant-users', [SearchController::class, 'searchRestaurantUsers']);
    });       
});

Route::group(['prefix' => 'restaurant-admin', 'middleware' => ['auth:sanctum', 'restaurant.active']], function () {
    Route::patch('update-restaurant', [RestaurantManagementController::class, 'updateRestaurant']);
    Route::patch('update-restaurantAdmin', [RestaurantManagementController::class, 'updateRestaurantAdmin']);
    Route::get('generate-for-staff', [RestaurantManagementController::class, 'generateForStaff']);
    Route::get('generate-for-customer', [RestaurantManagementController::class, 'generateForCustomer']);
});