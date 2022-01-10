<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Kullanıcı bilgilerini almak için kullanacağız.
use Illuminate\Support\Facades\Auth;

//Pdf Oluşturmak için gerekli olan kısım.
use PDF;
use DateTime;
use App\Models\Ders;

class PdfGenerate extends Controller
{


    public function cap_create(Request $request)
    {
      $user=Auth::user();

        $data=[
          'name'=> $user->name,
          'ogrenci_no'=>$user->ogrenci_no,
          'tc'=>$user->tc,
          'sinif'=>$user->sinif,
          'email'=>$user->email,
          'ogrenci_bolum'=>$user->ogrenci_bolum,
          'ogrenci_fakulte'=>$user->ogrenci_fakulte,
          'telefon_no'=>$user->telefon_no,
          'dogum'=>$user->dogum,
          'cap_bolum'=>$request->bolum,
          'adres'=>$request->adres,

        ];
        $pdf = PDF::loadView('pdf.cap_create', $data);
        return $pdf->download($this->file_name_creat());
    }


    public function dgs_create(Request $request)
    {
      $user=Auth::user();

      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
        'anne'=>$request->anne,
        'baba'=>$request->baba,
        'dogumyeri'=>$request->dogumyeri,
        'nufus_il'=>$request->nufus_il,
        'nufus_ilce'=>$request->nufus_ilce,
        'adres'=>$request->adres,
        'cinsiyet'=>$request->cinsiyet,
        'adres_il'=>$request->adres_il,
        'adres_ilce'=>$request->adres_ilce,
        'meslek_adi'=>$request->meslek_adi,
        'onlisans'=>$request->onlisans,
        'sinav'=>$request->sinav,
        'mezun_date'=>$request->mezun_date,
        'not'=>$request->not,
      ];
        $pdf = PDF::loadView('pdf.dgs_create', $data);
        return $pdf->download($this->file_name_creat());
    }


    public function yaz_create(Request $request)
    {

      $user=Auth::user();
      $ders=Ders::where('bolum',$user->ogrenci_bolum)->get();

      $yazders= [];
      $i=0;
      foreach ($request->yazders as $yaz) {
          $yazd=Ders::where('ders',$yaz)->get();
          if($yazd!=NULL)
          {
            $yazders[$i]=$yazd[0];
            $i++;
          }

      };

      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
        'adres'=>$request->adres,
        'danisman'=>$request->danisman,
        'baskan'=>$request->baskan,
        'date_start'=>$request->date_start,
        'date_end'=>$request->date_end,
        'yazders'=>$yazders,
        'uni'=>$request->uni,
        'ders'=>$ders,
      ];
        $pdf = PDF::loadView('pdf.yaz_create', $data);
        return $pdf->download($this->file_name_creat());
    }
    public function yatay_gecis_create(Request $request)
    {
      $user=Auth::user();

      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
        'basvuruturu'=>$request->basvuruturu,
        'adres'=>$request->adres,
        'uni'=>$request->uni,
        'ogrenim_turu'=>$request->ogrenim_turu,
        'yerlesme_yil'=>$request->yerlesme_yil,
        'gortalama'=>$request->gortalama,
        'puan'=>$request->puan,
        'puan_turu'=>$request->puan_turu,
        'basvuru_bolum'=>$request->basvuru_bolum,
        'basvuru_turleri'=>[
          'KURUMİÇİ YATAY GEÇİŞ BAŞVURUSU',
          'MER. YER. PUANIYLA YATAY GEÇİŞ BAŞVURUSU',
          'KURUMLARARASI YATAY GEÇİŞ BAŞVURUSU',
          'YURT DIŞI YATAY GEÇİŞ BAŞVURUSU'
        ]

      ];
        $pdf = PDF::loadView('pdf.yatay_gecis_create', $data);
        return $pdf->download($this->file_name_creat());
    }

    public function ders_intibaki_create(Request $request)
    {
      $user=Auth::user();
      $ders=Ders::where('bolum',$user->ogrenci_bolum)->get();

      $yazders= [];
      $i=0;
      foreach ($request->yazders as $yaz) {
          $yazd=Ders::where('ders',$yaz)->get();
          if($yazd!=NULL)
          {
            $yazders[$i]=$yazd[0];
            $i++;
          }

      };
      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
        'adres'=>$request->adres,
        'eski_uni'=>$request->eski_uni,
        'eski_bolum'=>$request->eski_bolum,
        'eski_fakulte'=>$request->eski_fakulte,
        'yazders'=>$yazders,
        'ders'=>$ders,

      ];
        $pdf = PDF::loadView('pdf.ders_intibaki_create', $data);



        return $pdf->download($this->file_name_creat());
    }

    public function file_name_creat()
    {
      date_default_timezone_set('Europe/Istanbul');
      $now = new DateTime();
      $user=Auth::user();
      $turkish = array("ı", "ğ", "ü", "ş", "ö", "ç",'Ö','Ç',' ','Ş','Ğ','İ');//turkish letters
      $english   = array("i", "g", "u", "s", "o", "c",'o','c','_','s','g','i');//english cooridinators letters
      $user_name_change = str_replace($turkish, $english, strtolower($user->name));//replace php function
      $filename=$user->ogrenci_no.'_'.$user_name_change .'_'.$now->format("ymdhms").'.pdf';
      return $filename;
    }

    public function __construct()
    {
    }




}
