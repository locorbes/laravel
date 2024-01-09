<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function all()
    {
        $users = User::all();
        return response()->json($users);
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return response()->json(['data' => $user, 'message' => 'Usuario agregado correctamente.'], 201);
    }
    public function update(Request $request, User $user, $id)
    {
        if(!isset($id)){
            if (isset($request['password'])) {
                $data = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                    'password' => 'required|string|min:8',
                ]);
                $data['password'] = bcrypt($data['password']);
            }else{
                $data = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users,email,' . $user->id
                ]);
            }
    
            $user->update($data);
            return response()->json(['data' => $user, 'message' => 'Usuario modificado correctamente.'], 200);
        }else{
            $user = User::find($id);

            if (!$user) {
                return response()->json(['error' => 'Cliente no encontrado.'], 404);
            }

            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id
            ]);

            $user->update($validatedData);

            return response()->json(['data' => $user, 'message' => 'Usuario modificado correctamente.'], 200);
        }
    }
    public function delete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado.'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'Usuario eliminado con éxito.'], 200);
    }
}
