<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPricing extends Model
{
    use HasFactory;

    protected $table = 'product_pricing';
    protected $primaryKey = 'id';

    protected $fillable = ['product_id', 'name', 'duration', 'pricing'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function subscriptionPlan()
    {
        return $this->hasMany(SubscriptionPlan::class);
    }
}
