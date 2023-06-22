<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProductController extends Controller
{
    function index()
    {
        $currentUser = Auth::user();

        return Inertia::render('Product/Show', [
            'products' => Product::all(),
            'allowDelete' => $currentUser->role_id === 1
        ]);
    }

    function create(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $ccal = $request->input('ccal');
        $file = $request->file('img');
        $img = pathinfo($file->store('images/products/', ['disk' => 'public']))['basename'];

        $product = new Product();
        $product->title = $title;
        $product->description = $description;
        $product->price = $price;
        $product->ccal = $ccal;
        $product->img = $img;
        $product->save();

        return redirect('/admin/products');
    }

    function destroy(Product $product)
    {
        $product->delete();
        if (is_file(public_path() . '/images/products/' . $product->img)) {
            unlink(public_path() . '/images/products/' . $product->img);
        }
    }

    function show(Product $product)
    {
        return Inertia::render('Product/Update', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->ccal = $request->input('ccal');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            if (is_file(public_path() . '/images/products/' . $product->img)) {
                unlink(public_path() . '/images/products/' . $product->img);
            }
            $product->img = pathinfo($file->store('images/products/', ['disk' => 'public']))['basename'];
        }

        $product->save();

        return redirect('/admin/products');
    }
}
