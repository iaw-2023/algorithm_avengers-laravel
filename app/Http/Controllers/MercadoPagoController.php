<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller{

    public function __construct()
    {
        MercadoPagoConfig::setAccessToken(config('services.mercadopago.access_token'));
        MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);
    }

    public function initializePayment(Request $request){
        $frontendUrl = env('FRONTEND_URL');
        $client = new PreferenceClient();
        
        try{
            $preference = $client->create([
                "items" => [
                    [
                        "title" => "Test",
                        "quantity" => 1,
                        "unit_price" => 100.00,
                    ]
                ],
                /* "back_urls" => [
                    'success' => "${frontendUrl}/success",
                    'failure' => "{$frontendUrl}/failure",
                    'pending' => "{$frontendUrl}/pending"
                ],
                "auto_return" => "approved", */
            ]);
            return response()->json(['id' => $preference->id]);
        }catch (MPApiException $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }    
    }
}
