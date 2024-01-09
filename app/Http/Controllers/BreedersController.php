<?php

namespace App\Http\Controllers;

use App\Models\Breeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BreedersController extends Controller
{    
    public function get($id)
    {
        $breeders = Breeder::findOrFail($id);
        return response()->json(['data' => $breeders], 200);
    }
    public function all()
    {
        $breeders = Breeder::all();
        return response()->json($breeders);
    }    
}
