<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        // Get total sales for today
        $todaySales = DB::table('transactions')
            ->whereDate('created_at', now()->toDateString())
            ->sum('total_price');

        // Get total sales for yesterday
        $yesterdaySales = DB::table('transactions')
            ->whereDate('created_at', now()->subDay()->toDateString())
            ->sum('total_price');

        // Get total sales for this month
        $thisMonthSales = DB::table('transactions')
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->sum('total_price');

        // Get total sales for last month
        $lastMonthSales = DB::table('transactions')
            ->whereYear('created_at', now()->subMonth()->year)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->sum('total_price');

        return view('dashboard', compact('todaySales',
                                        'yesterdaySales', 
                                        'thisMonthSales', 
                                        'lastMonthSales'));
    }

}
