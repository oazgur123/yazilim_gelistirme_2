<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pdf;
class PdfUploadMongo extends Controller
{
    //
    public function upload(Request $request)
    {
      $filename=$request->file->getClientOriginalName();
      $request->file->storeAs('public/pdf',$filename);
      $path=$request->file->storeAs('public/pdf',$filename);
      $email=Auth::user()->email;
      $path=str_replace('public','storage',$path);
      Pdf::create([
        'email'=>$email,
        'pdf_url'=>$path,
        'onay'=>"Beklemede",
        'tip'=>intval($request->tip)
      ]);

      return view('home');

    }

}
