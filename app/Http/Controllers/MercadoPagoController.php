<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Common\RequestOptions;
use Illuminate\Support\Str;

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
                "items" => $request->items,
                "payer" => $request->payer,
            ]);
            return response()->json([
                'id' => $preference->id,
                'items' => $preference->items,
                'payer' => $preference->payer,
            ]);
        }catch (MPApiException $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }    
    }

    // MODIFICAME ESTA
    public function processPayment(Request $request){
        $key = Str::random(32);
        $client = new PaymentClient();
        $request_options = new RequestOptions();
        $request_options->setCustomHeaders(["X-Idempotency-Key: $key"]);

        $createRequest = [
            "token" => $request->input("token"),
            "issuer_id" => $request->input("issuer_id"),
            "payment_method_id" => $request->input("payment_method_id"),
            "transaction_amount" => $request->input("transaction_amount"),
            "installments" => $request->input("installments"),
            "payer" => $request->input("payer"),
        ];

        try{
            $client->create($createRequest, $request_options);
            return response()->json($client);
        }catch(MPApiException $e){
            return response()->json(['error' => $e->getMessage()], 500);   
        }

        
    }
}
