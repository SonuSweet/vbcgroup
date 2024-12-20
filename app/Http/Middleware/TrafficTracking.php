<?php

namespace App\Http\Middleware;

use App\Models\Tracking;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TrafficTracking
{
    public function handle(Request $request, Closure $next)
    {
        $trackingData = [
            'ip' => $request->ip(),
            'location' => 'Location', // You can use a service like MaxMind GeoIP2 to get location from IP
            'user_id' => Auth::id() // Will be null if user is not authenticated
        ];

        Tracking::create($trackingData);

        return $next($request);
    }
}
