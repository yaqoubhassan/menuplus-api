<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\RestaurantUser;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory, LogsActivity;
    protected $primaryKey = 'id';
    protected $table = 'restaurants';

    //Logging
    protected $logName = 'restaurants';
    protected static $logAttributes = [
        'name', 'state', 'city', 'suburb', 'post_code', 'business_type', 'address', 'phone_number', 'email', 'status', 'capacity',
        'description', 'logo',
    ];

    protected $fillable = [
        'name', 'state', 'city', 'suburb', 'post_code', 'business_type', 'address', 'phone_number', 'email', 'status', 'capacity',
        'description', 'logo',
    ];

    public function user()
    {
        return $this->hasOne(RestaurantUser::class, 'restaurant_id');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'restaurant_id');
    }

    public function waiters()
    {
        return $this->hasMany(Waiter::class);
    }

    public function diners()
    {
        return $this->hasMany(Dinner::class, 'temp_restaurant_id');
    }

    public function subscriptionPlan()
    {
        return $this->hasMany(SubscriptionPlan::class);
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        return ((auth()->user() ? auth()->user()->firstname : '') . ' ' .  (auth()->user() ? auth()->user()->lastname : '')) . " has {$eventName} restaurant";
    }

    public static function citiesAndTerritories()
    {
        $businessType = Restaurant::pluck('business_type')->toArray();
        $values = array_count_values($businessType);

        $active = 0;
        $inActive = 0;

        $businessTypes = '';
        $results = [];

        foreach ($values as $key => $value) {
            $active = Restaurant::where([['business_type', $key], ['status', true]])->count();
            $inActive = Restaurant::where([['business_type', $key], ['status', false]])->count();
            $businessTypes = $key;

            $newResults = ['business_type' => $businessTypes,
            'active' => $active,
            'inactive' => $inActive];

            array_push($results, $newResults);
        }

        $data['data'] = $results;
        return $data;
    }
}
