<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function products()
    {
        // $products = Product::paginate(5);
        $products = DB::table("products")->get();

        return view('pages.products', [
            'products' => $products
        ]);
    }

    function create()
    {
        return view('pages.productCreate');
    }

    function store(Request $request)
    {

        DB::table('products')->insert([
            'product_name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price')
        ]);


        return redirect()->route('pages.products');
    }

    function edit($id)
    {
        $products = DB::table('products')->find($id);
        return view('pages.productEdit', ['products' => $products]);
    }

    function update(Request $request, $id)
    {
        DB::table('products')->where('id', $id)->update([
            'product_name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price')
        ]);
        return redirect()->route('pages.products');
    }

    function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('pages.products');
    }


    function sale()
    {
        $products = DB::table("products")->get();

        return view('pages.productSale', [
            'products' => $products
        ]);
    }
    function saleStore(Request $request)
    {

        // DB::table('sales')->insert([
        //     'product_name' => $request->input('product'),
        //     'quantity' => $request->input('quantity')          
        // ]);
        // return redirect()->route('pages.sale');



        // Get product information from the products table
        $product = DB::table('products')->where('id', $request->input('product_id'))->first();

        // Check if the product exists
        if ($product) {
            // Calculate total price
            $totalPrice = $product->price * $request->input('quantity');

            // Insert data into the transactions table
            DB::table('transactions')->insert([
                //'product_id' => $product->id,
                'product_name' => $product->product_name,
                'quantity' => $request->input('quantity'),
                'unit_price' => $product->price,
                'total_price' => $totalPrice,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Update product quantity
            DB::table('products')
                ->where('id', $product->id)
                ->update([
                    'quantity' => $product->quantity - $request->input('quantity'),
                    'updated_at' => now(),
                ]);

            // Redirect or return a response
            return redirect()->route('pages.sale');
        } else {
            // Handle the case where the product is not found
            return redirect()->route('pages.sale');
        }
    }


    function transections()
    {

        //return view('pages.transections', compact('transactions'));
        $transactions = DB::table("transactions")->get();

        return view('pages.transections', [
            'transactions' => $transactions
        ]);
    }
}
