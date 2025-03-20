<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Str;

class FileUploadController extends Controller
{
    function index(){
        $files = File::all();
        return view('file-upload', ['files'=>$files]);

    }

    function store(Request $request){
        // dd($request->all());
        // $file= Storage::disk('local')->put('/',$request->file('file'));
        // $file= $request->file('file')->store('/','');

        $file = $request->file('file');
        $customName = 'laravel_'. Str::uuid();
        $ext =$file->getClientOriginalExtension();
        $fileName=$customName.'.'.$ext;
        $path = $file->storeAs('/',$fileName,'dir_public');

        // $file= $request->file('file')->store('/','dir_public');
        
        $fileStore = new File();
        $fileStore->file_path = '/uploads/'.$path;
        $fileStore->save();
        dd('stored');
    }

    function download(){
       
        return Storage::disk('local')->download('yzxi9zVxn9cRggrFNzSRvL5wPJc29p5I3Q52WFzn.jpg');
    }
}
