<?php

namespace App\Http\Controllers\API\SuperAdmin;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Http\Controllers\Controller;
use App\Http\Resources\SubscriptionPlanResource;

class SubscriptionPlanController extends Controller
{
    public function subscribeRestaurant(Request $request, Restaurant $restaurant)
    {
        $rules = ['pricing_id' => 'required|string', 'status' => 'sometimes|boolean'];
        $messages = ['pricing_id.required' => 'The pricing id parameter is required', 'status.boolean' => 'The status field must be true or false'];
        $request->validate($rules, $messages);

        $pricing = $request->input('pricing_id');

        $subscription = new SubscriptionPlan;
        $subscription->status = !$request->input('status') ? false : $request->input('status');
        $subscription->productPricing()->associate($pricing);
        $restaurant->subscriptionPlan()->save($subscription);

        return new SubscriptionPlanResource($subscription);

    }
}
