<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestaurantManagement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if ($user->restaurant) {
            if ($user->restaurant->status) {
                return $next($request);
            }
            return response()->json([
                'message' => 'Deactivated restaurant account'
            ], 403);
        }
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
        
    }
}
