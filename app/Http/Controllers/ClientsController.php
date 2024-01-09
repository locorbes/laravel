<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    public function get($id)
    {
        $client = Client::findOrFail($id);
        return response()->json(['data' => $client], 200);
    }
    public function all()
    {
        $clients = Client::all();
        return response()->json($clients);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'dni' => 'required|string',          
            'business_name' => 'required|string',
            'cuit' => 'required|string',            
            'email' => 'required|string|email|max:255|unique:clients',
            'occupation' => 'required|string',
            'currently_working' => 'required|boolean',
            'apply_for_motorbike' => 'required|boolean',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'neighborhood' => 'required|string',
            'between_streets' => 'nullable|string',
            'coordinates' => 'nullable|string',
            'previous_address' => 'nullable|string',
        ]);
        $client = Client::create($validatedData);
        return response()->json(['data' => $client, 'message' => 'Cliente agregado correctamente.'], 201);
    }    
    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json(['error' => 'Cliente no encontrado.'], 404);
        }

        $validatedData = $request->validate([
            'full_name' => 'sometimes|required|string',
            'dni' => 'sometimes|required|string',
            'business_name' => 'sometimes|required|string',
            'cuit' => 'sometimes|required|string',
            'email' => 'required|string|email|max:255|unique:clients,email,' . $client->id,
            'occupation' => 'sometimes|required|string',
            'currently_working' => 'sometimes|required|boolean',
            'apply_for_motorbike' => 'sometimes|required|boolean',
            'address' => 'sometimes|required|string',
            'city' => 'sometimes|required|string',
            'postal_code' => 'sometimes|required|string',
            'neighborhood' => 'sometimes|required|string',
            'between_streets' => 'nullable|string',
            'coordinates' => 'nullable|string',
            'previous_address' => 'nullable|string',
        ]);

        $client->update($validatedData);

        return response()->json(['data' => $client, 'message' => 'Cliente modificado correctamente.'], 200);
    }
    public function delete($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['error' => 'Cliente no encontrado.'], 404);
        }
        $client->delete();
        return response()->json(['message' => 'Cliente eliminado con éxito.'], 200);
    }
}
