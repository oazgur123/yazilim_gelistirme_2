<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use App\Models\User;
use App\Models\BasvurTipi;

class PdfGuncelle extends Controller
{
    public function guncelle(Request $request)
    {
      $durum=$request->durum;
      foreach ($request->pdf_id as $pdf) {
        Pdf::where('_id',$pdf)->update([
          'onay'=>$durum,
        ]);
      }

      return redirect()->back();

    }
}
