<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    //
    function index()
    {
        $products = DB::table("products")->get();

        return view('pages.productSale', [
            'products' => $products
        ]);
    }
    function saleStore(Request $request)
    {

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

            return redirect()->route('pages.sale');
        } else {
            return redirect()->route('pages.sale');
        }
    }

}
