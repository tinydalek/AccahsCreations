<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{
    
    public function index() 
    {
        $posts = Product::latest()->get();

        return view('products.index', compact('posts'));
    }
    
    public function dashboard() 
    {
        $posts = Product::latest()->get();
        
        return view('products.dashboard', compact('posts'));
    }

    public function newproduct() 
    {
        return view('products.newproduct');
    }

    public function viewproduct($id) 
    {        
        $post = Product::find($id);
        
        return view('products.viewproduct', compact('post'));
    } 

    public function store() 
    {
    
        // dd(request()->all());

        // Create a new product using the request data

        $post = new Product;

        $post->product_name = request('product_name');

        $post->category_id = request('category_id');

        $post->colour_id = request('colour_id');

        $post->product_desc = request('product_desc');

        $post->product_price = request('product_price');

        $post->product_inventory = request('product_inventory');

        // Save it to the database

        $post->save();

        // And the redirect to the dashboard

        return redirect('/dashboard')->with('success', 'Product Listing Created');

    } 

    public function edit(Product $post) 
    {   
        return view('products.editproduct', compact('post'));
    }
    
    public function update(Request $request, Product $post)
    {
        $post->update($request->all());

        // And the redirect to the dashboard

         return redirect('/dashboard');

    }

    public function destroy(Product $post)
    {
        $post->delete();
        return redirect('/dashboard');
    }
    

}
