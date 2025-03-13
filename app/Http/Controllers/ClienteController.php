<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ClienteController extends Controller
{
    public function index(){
        $datos['clientes'] = Cliente::select('id','email', 'nombre', 'telefono','domicilio')
            ->where('activo', true)
            ->orderBy('nombre', 'ASC')
            ->paginate(15);
        $datos['cant_compras'] = array();

        return view('clientes.index', $datos);
    }

    public function destroy($id){
        $elemento = Cliente::where('id', $id)->first();
        $elemento->activo = false;
        $elemento->save();
    }

    public function storeAPI(Request $request){
        $cliente = Cliente::create([
            'email' => $request->input('email'),
            'contrasena' => $request->input('contrasena'),
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'domicilio' => $request->input('domicilio')
        ]);
        return Cliente::select('id', 'email', 'nombre', 'telefono', 'domicilio')
            ->where('id', $cliente['id'])
            ->first();
    }

    public function updateAPI(Request $request, $id){
        Cliente::where('id', $id)
            ->where('activo', true)
            ->update([
                'email' => $request->input('email'),
                'contrasena' => $request->input('contrasena'),
                'nombre' => $request->input('nombre'),
                'telefono' => $request->input('telefono'),
                'domicilio' => $request->input('domicilio')
            ]);

        return Cliente::select('id', 'email', 'nombre', 'telefono', 'domicilio')
            ->where('id', $id)
            ->first();
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|string|email|unique:clientes',
            'contrasena' => 'required|string|min:8',
            'nombre' => 'required|string',
            'telefono' => 'required|string',
            'domicilio' => 'required|string'
        ]);

        $cliente = Cliente::create([
            'email' => $request->email,
            'contrasena' => Hash::make($request->contrasena),
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'domicilio' => $request->domicilio
        ]);

        return response()->json(['message' => 'Client registered successfully'], 201);
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'contrasena' => 'required|string'
        ]);

        $cliente = Cliente::where('email', $request->email)->first();
        
        if(!$cliente || !Hash::check($request->contrasena, $cliente->contrasena)){
            return response()->json(['message' => 'Credenciales inválidas'], 401);
        }

        $token = $cliente->createToken('auth-token')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }
}
