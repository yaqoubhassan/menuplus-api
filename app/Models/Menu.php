<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory, LogsActivity;

    protected $primaryKey = 'id';
    protected $table = 'menus';

    protected $fillable = [
        'restaurant_id', 'name', 'description', 'image', 'enabled'
    ];

    //Logging
    protected $logName = 'menus';
    protected static $logAttributes = [
        'restaurant_id', 'name', 'description', 'image', 'enabled'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        return (auth()->user() ? auth()->user()->firstname : '') . " has {$eventName} menu";
    }
}
