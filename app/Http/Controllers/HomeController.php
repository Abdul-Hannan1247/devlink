<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){

    // Product::find(1)->delete();
    // Product::withTrashed()->find(1)->restore();    // Restoring the soft deleted data.
    $products= Product::withTrashed()->find(2);
    $products->forceDelete();
    dd($products);


        return view('welcome');
    }

    function showAboutPage(){
        return view('about');
    }


}
