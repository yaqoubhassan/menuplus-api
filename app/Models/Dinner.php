<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dinner extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'dinners';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'email', 'phoneNumber', 'profile_pic', 'temp_restaurant_id'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
