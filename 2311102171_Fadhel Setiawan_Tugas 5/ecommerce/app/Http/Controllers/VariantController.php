<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use App\Models\Product;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function create()
    {
        $products = Product::all();

        return view('variants.form', [
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'processor' => 'required',
            'memory' => 'required',
            'storage' => 'required',
            'product_id' => 'required'
        ]);

        Variant::create($validated);

        return redirect('/products')
            ->with('success', 'Variant berhasil ditambahkan');
    }
}