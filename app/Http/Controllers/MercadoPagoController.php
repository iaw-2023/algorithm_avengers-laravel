<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago;

class MercadoPagoController extends Controller
{
    public function __construct()
    {
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.access_token'));
    }

    public function createPreference(Request $request)
    {
        // Create a preference object
        $preference = new MercadoPago\Preference();
        
        // Create an item in the preference
        $item = new MercadoPago\Item();
        $item->title = $request->title;
        $item->quantity = $request->quantity;
        $item->unit_price = $request->price;
        $preference->items = [$item];
        
        // Set back URLs (optional)
        $preference->back_urls = [
            'success' => route('payment.success'),
            'failure' => route('payment.failure'),
            'pending' => route('payment.pending')
        ];
        $preference->auto_return = 'approved';
        
        $preference->save();
        
        return response()->json(['id' => $preference->id]);
    }
}
