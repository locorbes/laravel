<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductsController extends Controller
{
    public function get($id)
    {
        $product = Product::findOrFail($id);
        return response()->json(['data' => $product], 200);
    }
    public function all()
    {
        $product = Product::all();       
        $product = Product::with(['breeder:id,name', 'deposit:id,description', 'genetic:id,description', 'productType:id,type'])->get();
        return response()->json($product);
    }    
    public function create(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|string|max:255',
            'lot' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'breeder_id' => 'required|exists:breeders,id',
            'deposit_id' => 'required|exists:deposits,id',
            'genetic_id' => 'required|exists:genetics,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'product_type_id' => 'required|exists:product_types,id',
        ]);

        $product = Product::create($data);
        return response()->json(['data' => $product, 'message' => 'Producto agregado correctamente.'], 201);
    }      
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado.'], 404);
        }

        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
            'lot' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'breeder_id' => 'required|exists:breeders,id',
            'deposit_id' => 'required|exists:deposits,id',
            'genetic_id' => 'required|exists:genetics,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'product_type_id' => 'required|exists:product_types,id',
        ]);

        $product->update($validatedData);

        return response()->json(['data' => $product, 'message' => 'Producto modificado correctamente.'], 200);
    }
    public function delete($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado.'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Producto eliminado con éxito.'], 200);
    }
}
