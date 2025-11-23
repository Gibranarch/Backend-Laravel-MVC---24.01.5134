<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $totalProducts = Product::count();

        $totalStock = Product::sum('stock');

        $totalAssetValue = Product::all()->sum(function($product) {
            return $product->price * $product->stock;
        });

        $recentProducts = Product::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalProducts',
            'totalStock',
            'totalAssetValue',
            'recentProducts'
        ));
    }
}