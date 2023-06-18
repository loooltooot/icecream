<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    function index()
    {
        return Inertia::render('Product/Show', [
            'products' => Product::all()
        ]);
    }
}
