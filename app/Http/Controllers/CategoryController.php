<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function getProteins()
    {
        $products = DB::table('products')->where('category', '=', 1)->get();
        return view('pages.category', compact('products'));
    }

    public function getMassGainers()
    {
        $products = DB::table('products')->where('category', '=', 2)->get();
        return view('pages.category', compact('products'));
    }

    public function getCreatine()
    {
        $products = DB::table('products')->where('category', '=', 3)->get();
        return view('pages.category', compact('products'));
    }

    public function getVitamins()
    {
        $products = DB::table('products')->where('category', '=', 4)->get();
        return view('pages.category', compact('products'));
    }

    public function getAmino()
    {
        $products = DB::table('products')->where('category', '=', 5)->get();
        return view('pages.category', compact('products'));
    }
}
