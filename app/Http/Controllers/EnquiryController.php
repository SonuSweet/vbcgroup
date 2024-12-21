<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Models\Tracking;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'max:255',
            'mobile' => 'required|string|max:15',
        ]);

        Enquiry::create($validatedData);


        return redirect()->to('/thank-you');

        return redirect()->back()->with('success', 'Thank you! Your enquiry has been submitted.');
    }

    public function track($secrete)
    {
        if($secrete!=='dfghjkjhgf') return response(['message'=>'why are you disturbing']);
        $data=null;
        try {
            $ip = request()->ip();

            // if (!Tracking::where('ip', $ip)->exists()) 
            {
                $location = $this->getLocationFromIp($ip);

                $trackingData = [
                    'ip' => $ip,
                    'apiUrl'=>$location['apiUrl'],
                    'location'=> ( $location['city'] ?? null).' , '. ( $location['region'] ?? null).' , '. ( $location['country'] ?? null).' , '. ( $location['postal'] ?? null).' , ',
                    'city' => $location['city'] ?? null,
                    'region' => $location['region'] ?? null,
                    'country' => $location['country'] ?? null,
                    'latitude' => $location['latitude'] ?? null,
                    'longitude' => $location['longitude'] ?? null,
                    'user_id' => Auth::id(),
                ];

                $data=  Tracking::create($trackingData);

                $data=  $trackingData;
            }
        } catch (\Exception $e) {
            Log::error('Error tracking IP: ' . $e->getMessage());
        }
        return response(['message'=>'Welcome','data'=>$data,'ip'=>$ip]);
    }

    function getLocationFromIp($ip)
    {
        $token=env('IP_INFO_TOKEN');
        $client = new Client();
        $apiUrl = "ipinfo.io/{$ip}?token={$token}";
        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);

            return [
                'city' => $data['city'] ?? 'Unknown',
                'region' => $data['region'] ?? 'Unknown',
                'country' => $data['country_name'] ?? 'Unknown',
                'latitude' => $data['latitude'] ?? null,
                'longitude' => $data['longitude'] ?? null,
                'apiUrl'=>$apiUrl,
                'data'=>$data
            ];
        } catch (\Exception $e) {
            // Handle error
            return ['error' => 'Unable to fetch location'];
        }
    }
}
