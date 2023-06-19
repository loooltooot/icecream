<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;

class LandingController extends Controller
{
    function index()
    {
        return Inertia::render('Landing/Show', [
            'products' => Product::take(9)->get()
        ]);
    }
}
