<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
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

// ############# Eloquent ORM ##########
          //Create data in DB
    //    $user  = new User();
    //    $user->name = 'ali1';
    //    $user->email = 'ali1@gmail.com';
    //    $user->password = '123456';
    //    $user->save();
    // Read data from DB
        //    $users  = User::all();
        //    dd($users);
        // foreach ($users as $user) {
        //     echo$user->name . '---' . $user->email;
        //     echo "<br>";
        // }
        // $users = User::where('id',5)->first();
        // $users = User::find(1);  // works onbly with ID
        // dd($users);
    //Update Data
    // $users = User::where('id',1)->first();
    // $users->email = 'override@gmail.com';
    // $users->save();

     //Deleting a user
    // $user = User::findorfail(1);
    // $user->delete();

//######## Fillable and Mass Assignment  #########
// User::create([
//     // 'name' => 'yusuf',
//     // 'email' => 'yusuf@gmail.com',
//     // 'password' => '123456',
//    // 'email_verified_at' => 'Hello world'   // this valuse will not be added as it is not mentioned in fillable (for mass assignment)
// ]);

// User::insert([
//         [
//             'name' => 'yusuf1',
//             'email' => 'yusu1f@gmail.com',
//             'password' => '123456',

//         ],
//         [
//             'name' => 'yusuf2',
//             'email' => 'yusu2f@gmail.com',
//             'password' => '123456',

//         ]

//     ]);

$blogs =Blog::Active()->get();  // no need to write scope before Active.
dd($blogs);



        return view('welcome');
    }

    function showAboutPage(){
        return view('about');
    }


}
