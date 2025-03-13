<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|unique:clientes',
            'contrasena' => 'required|string|min:8',
            'nombre' => 'required|string',
            'telefono' => 'numeric',
            'domicilio' => 'string'
        ]);

        $cliente = Cliente::create([
            'email' => $validated['email'],
            'contrasena' => Hash::make($validated['contrasena']),
            'nombre' => $validated['nombre'],
            'telefono' => $validated['telefono'],
            'domicilio' => $validated['domicilio']
        ]);

        dd($cliente);

        $token = $cliente->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'contrasena' => 'required|string',
        ]);

        $cliente = Cliente::where('email', $request->email)->first();

        if (!$cliente || !Hash::check($request->contrasena, $cliente->contrasena)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $cliente->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out']);
    }
}