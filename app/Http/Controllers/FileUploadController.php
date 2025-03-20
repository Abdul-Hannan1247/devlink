<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class FileUploadController extends Controller
{
    function index(){
        return view('file-upload');
    }
    function store(Request $request){
        // dd($request->all());
        // $file= Storage::disk('local')->put('/',$request->file('file'));
        // $file= $request->file('file')->store('/','');
        $file= $request->file('file')->store('/','public');

        dd($file);
    }
}
