<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfUploadMongo extends Controller
{
    //

      public function upload(Request $request)
      {
        $filename=$request->file->getClientOriginalName();
        //get filename without extension
        $filename = pathinfo($filename, PATHINFO_FILENAME);
        //get file extension
        $extension = $request->file->getClientOriginalExtension();
        //filename to store
        $email=Auth::user()->email;

        $filenametostore = $filename.'.'.$extension;
        //Upload File to external server
        Storage::disk('ftp')->put($filenametostore, fopen($request->file, 'r+'));

        /*
        $request->file->storeAs('public/pdf',$filename);
        $path=$request->file->storeAs('public/pdf',$filename);
        $email=Auth::user()->email;
        $path=str_replace('public','storage',$path);*/

        $path='http://gizemozgur.gq/pdf/'.$filenametostore;
        Pdf::create([
          'email'=>$email,
          'pdf_url'=>$path,
          'onay'=>"Beklemede",
          'tip'=>intval($request->tip)
        ]);

        return redirect('home')->with('success', "PDF Yükleme Başarılı");

      }

}
