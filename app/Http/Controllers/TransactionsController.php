<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TransactionsController extends Controller
{
    function showData()
    {
        // Specify the number of records per page
        $perPage = 10;

        // Fetch paginated data from the 'transactions' table
        $transactions = DB::table('transactions')
                        ->orderByDesc('created_at')
                        ->paginate($perPage);

        return view('pages.transections', compact('transactions'));
        
    }
}
