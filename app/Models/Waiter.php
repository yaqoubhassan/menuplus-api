<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Waiter extends Model
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity;

    protected $table = 'waiters';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'restaurant_id',
        'fullname',
        'phone_number',
        'employment_type',
        'on_shift',
        'pin',
        'profile_pic',
    ];

    //Logging
    protected $logName = 'restaurant_users';
    protected static $logAttributes = [
        'restaurant_id',
        'fullname',
        'phone_number',
        'pin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['pin'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

    public function dinning_areas()
    {
        return $this->belongsToMany(
            DinningArea::class,
            'working_areas',
            'waiter_id',
            'dining_area_id'
        );
    }
}
