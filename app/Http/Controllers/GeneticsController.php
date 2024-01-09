<?php

namespace App\Http\Controllers;

use App\Models\Genetic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GeneticsController extends Controller
{
    
    public function get($id)
    {
        $genetic = Genetic::findOrFail($id);
        return response()->json(['data' => $genetic], 200);
    }
    public function all()
    {
        $genetic = Genetic::all();
        return response()->json($genetic);
    }
}
