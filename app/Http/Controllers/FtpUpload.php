<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FtpUpload extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {

            //get filename with extension
            $filenamewithextension = $request->file('profile_image')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;

            //Upload File to external server
            Storage::disk('ftp')->put($filenametostore, fopen($request->file('profile_image'), 'r+'));

            //Store $filenametostore in the database

        return redirect('upload')->with('success', "Image uploaded successfully.");
    }
}
