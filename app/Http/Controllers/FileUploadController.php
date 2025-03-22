<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Str;
use Illuminate\Support\Facades\File as HandleFile;

class FileUploadController extends Controller
{
    function index(){
        // $file= File::find(11);
        // HandleFile::delete(public_path($file->file_path));
        // $file->delete();

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
        // return  redirect()->back();
        return  redirect()->route('home');

    }

    function download(){
       
        return Storage::disk('local')->download('yzxi9zVxn9cRggrFNzSRvL5wPJc29p5I3Q52WFzn.jpg');
    }
}
