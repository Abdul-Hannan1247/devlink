<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        // ########## Creating/inserting a data ##########
        // DB::table('users')->insert(
        //     [
        //     'name' => 'Huma',
        //     'email' => 'Huma@gmail.com',
        //     'password' => '123456',
        //     ]);
        // ########## Retrieving the data  ############
        // $user= DB::table('users')->where('id',4)->first();
        // return $user;
        // ########## Updating the Data############
        // DB::table('users')->where('id',4)->update([
        //     'name' => 'test'
        // ]);
        //########## Delete a row  ##########
        // DB::table('users')->where('id',4)->delete();
        // DB::table('users')->where('id','>',3)->delete();

        //########## Retrieving a list of coloumn values ##########
        // $blog=DB::table('blogs')->select('title')->get();
        // dd($blog);

        //  #### Agregates ####
        // $products = DB::table('products')->min('price');
        // dd($products);


        return view('welcome');
    }

    function showAboutPage(){
        return view('about');
    }


}
