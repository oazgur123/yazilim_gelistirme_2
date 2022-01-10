<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use App\Models\User;
use App\Models\BasvurTipi;

use Illuminate\Support\Facades\Auth;

class ListPDF extends Controller
{

    public function authList()
    {
        $userEmail=Auth::user()->email;
        $data=Pdf::where('email',$userEmail)->where('onay','Beklemede')->get();

        foreach ($data as $item) {
           $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;

        }

        return view('user.pdflistele')->with('pdfler',$data);
    }

    public function onayList()
    {
        $userEmail=Auth::user()->email;
        $data=Pdf::where('email',$userEmail)->where('onay','Onaylandı')->get();
        foreach ($data as $item) {
            $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
        }
        return view('user.pdfonay')->with('pdfler',$data);
    }

    public function redList()
    {
        $userEmail=Auth::user()->email;
        $data=Pdf::where('email',$userEmail)->where('onay','Red')->get();
        foreach ($data as $item) {
            $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
        }
        return view('user.pdfred')->with('pdfler',$data);
    }

    public function adminListBekleme($tip)
    {
        $tip=intval($tip);
        $data=Pdf::where('tip',$tip)->where('onay','Beklemede')->get();

        foreach ($data as $item) {
           $item->tipName=BasvurTipi::where('basvuru_id',$tip)->first()->tip;
           $item->username=User::where('email',$item->email)->first()->name;
        }
        $data->tip=$tip;
        $data->onay="Beklemedi ki";
        $data->routes=[
          'onay',
          'red'
        ];

      //  dd($data);
        return view('admin.basvuru.bekleme')->with('basvurular',$data);

    }

    public function adminListRed($tip)
    {
      $tip=intval($tip);
      $data=Pdf::where('tip',$tip)->where('onay','Red')->get();

      foreach ($data as $item) {
         $item->tipName=BasvurTipi::where('basvuru_id',$tip)->first()->tip;
         $item->username=User::where('email',$item->email)->first()->name;
      }
      $data->tip=$tip;
      $data->onay="Reddedilen";
      $data->routes=[
        'beklemede',
        'onay'
      ];

    //  dd($data);
      return view('admin.basvuru.bekleme')->with('basvurular',$data);

    }

    public function adminListOnay($tip)
    {
      $tip=intval($tip);
      $data=Pdf::where('tip',$tip)->where('onay','Onaylandı')->get();

      foreach ($data as $item) {
         $item->tipName=BasvurTipi::where('basvuru_id',$tip)->first()->tip;
         $item->username=User::where('email',$item->email)->first()->name;
      }
      $data->tip=$tip;
      $data->onay="Onaylanan";
      $data->routes=[
        'beklemede',
        'red'
      ];

    //  dd($data);
      return view('admin.basvuru.bekleme')->with('basvurular',$data);

    }

    public function adminListTumu()
    {
      $data=Pdf::get();

      foreach ($data as $item) {
         $item->tipName=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
         $item->username=User::where('email',$item->email)->first()->name;
      }
    //  dd($data);
      return view('admin.basvuru.tumu')->with('basvurular',$data);

    }





}
