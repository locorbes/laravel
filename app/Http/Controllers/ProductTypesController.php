<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductTypesController extends Controller
{    
    public function get($id)
    {
        $type = ProductType::findOrFail($id);
        return response()->json(['data' => $type], 200);
    }
    public function all()
    {
        $type = ProductType::all();       
        return response()->json($type);
    }   
}
