<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DepositsController extends Controller
{
    public function get($id)
    {
        $deposit = Deposit::findOrFail($id);
        return response()->json(['data' => $deposit], 200);
    }
    public function all()
    {
        $deposit = Deposit::all();
        return response()->json($deposit);
    }    
    public function create(Request $request)
    {
        $data = $request->validate([
            'description' => 'required|string|max:255',
        ]);
        $deposit = Deposit::create($data);
        return response()->json(['data' => $deposit, 'message' => 'Depósito agregado correctamente.'], 201);
    }    
    public function update(Request $request, $id)
    {
        $deposit = Deposit::find($id);

        if (!$deposit) {
            return response()->json(['error' => 'Depósito no encontrado.'], 404);
        }

        $validatedData = $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $deposit->update($validatedData);

        return response()->json(['data' => $deposit, 'message' => 'Depósito actualizado correctamente.'], 200);
    }
    public function delete($id)
    {
        $deposit = Deposit::find($id);
        if (!$deposit) {
            return response()->json(['error' => 'Depósito no encontrado.'], 404);
        }
        $deposit->delete();
        return response()->json(['message' => 'Depósito eliminado con éxito.'], 200);
    }
}
