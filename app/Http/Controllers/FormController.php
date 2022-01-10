<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ders;
use App\Models\BasvurTipi;


class FormController extends Controller
{

    public $uni;

    public function cap(){
      $basvuruName=BasvurTipi::where('basvuru_id',1)->first()->tip;

      $form=[
        'basvuru_name'=>$basvuruName,
        'tip_id'=>1,
        'action'=>'cap',
        'enctype'=>'false',
        'inputs'=>[
          [
            'type'=>'input',
            'name'=>'bolum',
            'label'=>'ÇAP Yapılacak Bölüm',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'adres',
            'label'=>'Açık Adresiniz',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'submit',
            'name'=>'submit',
            'label'=>'0',
            'value'=>'PDF Oluştur',
            'classList'=>'btn btn-primary',
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
          ],

        ],
      ];

      //dd($form);
      return view('forms.form')->with('form',$form);



    }
    public function yaz(){

      $basvuruName=BasvurTipi::where('basvuru_id',3)->first()->tip;
      $universite=$this->uni;
      $user=Auth::user();
      $ders=Ders::where('bolum',$user->ogrenci_bolum)->get();

      $form=[
        'basvuru_name'=>$basvuruName,
        'tip_id'=>3,
        'action'=>'yazders',
        'enctype'=>'false',
        'submmit'=>'Başvuru Oluştur',
        'inputs'=>[
          [
            'type'=>'input',
            'name'=>'adres',
            'label'=>'Açık Adresiniz',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'danisman',
            'label'=>'Öğrenci Danışmanı Adı Soyadı',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'baskan',
            'label'=>'Bölüm Başkanı Adı Soyadı',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'select',
            'name'=>'uni',
            'label'=>'Yaz Okulu için başvurulan üniversite',
            'value'=>'',
            'classList'=>'select',
            'ops'=>$universite ,
            'required'=>'true',
            'value_key'=>'name',
            'max'=>'0',
            'min'=>'0',
          ],

          [
            'type'=>'date',
            'name'=>'date_start',
            'label'=>'Yaz okulun başlama tarihi',
            'value'=>'2021',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
          ],

          [
            'type'=>'date',
            'name'=>'date_end',
            'label'=>'Yaz okulun bitiş tarihi',
            'value'=>'2021',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
          ],
          //sorumlu
          [
            'type'=>'checkbox',
            'name'=>'yazders',
            'label'=>'Yaz Okulundan Görmek İstediğiniz Dersleri Seçiniz',
            'check'=>$ders,
            'classList'=>'form-check-input',
            'value_key'=>'ders'

          ],
          [
            'type'=>'submit',
            'name'=>'submit',
            'label'=>'0',
            'value'=>'PDF Oluştur',
            'classList'=>'btn btn-primary',
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
          ]


        ],
      ];

      //dd($form);
      return view('forms.form')->with('form',$form);



    }

    public function ders(){

      $universite=$this->uni;
      $user=Auth::user();
      $ders=Ders::where('bolum',$user->ogrenci_bolum)->get();
      $basvuruName=BasvurTipi::where('basvuru_id',4)->first()->tip;

      $form=[
        'basvuru_name'=>$basvuruName,
        'tip_id'=>4,
        'action'=>'dersinitabak',
        'enctype'=>'false',
        'submmit'=>'Başvuru Oluştur',
        'inputs'=>[
          [
            'type'=>'input',
            'name'=>'adres',
            'label'=>'Açık Adresiniz',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'eski_uni',
            'label'=>'Bir Önceki Okulunuzun İsmi',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'eski_fakulte',
            'label'=>'Bir Önceki Fakülteniz İsmi',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'eski_bolum',
            'label'=>'Bir Önceki Bölümünüz',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          //sorumlu
          [
            'type'=>'checkbox',
            'name'=>'yazders',
            'label'=>'Önceki eğitiminizde aldığınız dersleri seçin',
            'check'=>$ders,
            'classList'=>'form-check-input',
            'value_key'=>'ders'

          ],
          [
            'type'=>'submit',
            'name'=>'submit',
            'label'=>'0',
            'value'=>'PDF Oluştur',
            'classList'=>'btn btn-primary',
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
          ]


        ],
      ];

      return view('forms.form')->with('form',$form);



    }

    public function dgs(){
      $basvuruName=BasvurTipi::where('basvuru_id',5)->first()->tip;
      $form=[
        'basvuru_name'=>$basvuruName,
        'tip_id'=>5,
        'action'=>'dgs',
        'enctype'=>'false',
        'submmit'=>'Başvuru Oluştur',
        'inputs'=>[

          [
            'type'=>'input',
            'name'=>'anne',
            'label'=>'Annenizin Adı',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'baba',
            'label'=>'Babanızın Adı',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'radio',
            'name'=>'cinsiyet',
            'label'=>'Cinsiyetiniz',
            'radio'=>[
              'Erkek',
              'Kız'
            ],
            'classList'=>'form-check-input',
          ],

          [
            'type'=>'input',
            'name'=>'dogumyeri',
            'label'=>'Doğum Yeriniz',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'nufus_il',
            'label'=>'NUFUSA KAYIT OLDUĞU İL',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'nufus_ilce',
            'label'=>'NUFUSA KAYIT OLDUĞU İLÇE',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'adres',
            'label'=>'Açık Adresiniz',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'input',
            'name'=>'adres_il',
            'label'=>'Açık Adresinizin İli',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'input',
            'name'=>'adres_ilce',
            'label'=>'Açık Adresinizin İlçesi',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'input',
            'name'=>'meslek_adi',
            'label'=>'MESLEK YÜKSEK OKULU ADI',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'input',
            'name'=>'onlisans',
            'label'=>'ÖN LİSANS PROGRAMI',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'date',
            'name'=>'mezun_date',
            'label'=>'MEZUNİYET TARİHİ',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          //sorumlu

          [
            'type'=>'number',
            'name'=>'not',
            'label'=>'Genel Not Ortalaması',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'100',
            'min'=>'0',
          ],
          [
            'type'=>'input',
            'name'=>'sinav',
            'label'=>'SINAV MERKEZ TERCİHİ',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'submit',
            'name'=>'submit',
            'label'=>'0',
            'value'=>'PDF Oluştur',
            'classList'=>'btn btn-primary',
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
          ]

        ],
      ];

      //dd($form);
      return view('forms.form')->with('form',$form);
    }

    public function yatay(){

      $universite=$this->uni;
      $user=Auth::user();
      $ders=Ders::where('bolum',$user->ogrenci_bolum)->get();
      $basvuruName=BasvurTipi::where('basvuru_id',2)->first()->tip;
      date_default_timezone_set('Europe/Istanbul');
      $date=date('Y');
      $form=[
        'basvuru_name'=>$basvuruName,
        'tip_id'=>2,
        'action'=>'yataygecis',
        'enctype'=>'false',
        'submmit'=>'Başvuru Oluştur',
        'inputs'=>[
          [
            'type'=>'radio',
            'name'=>'basvuruturu',
            'label'=>'Başvuru Türü',
            'radio'=>[
              'KURUMİÇİ YATAY GEÇİŞ BAŞVURUSU',
              'MER. YER. PUANIYLA YATAY GEÇİŞ BAŞVURUSU',
              'KURUMLARARASI YATAY GEÇİŞ BAŞVURUSU',
              'YURT DIŞI YATAY GEÇİŞ BAŞVURUSU'
            ],
            'classList'=>'form-check-input',
          ],
          [
            'type'=>'input',
            'name'=>'adres',
            'label'=>'Açık Adresiniz',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],
          [
            'type'=>'select',
            'name'=>'uni',
            'label'=>'Kayıt Olduğun Üniversite',
            'value'=>'',
            'classList'=>'select',
            'ops'=>$universite ,
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
            'value_key'=>'name'
          ],

          [
            'type'=>'radio',
            'name'=>'ogrenim_turu',
            'label'=>'Öğrenim Türü',
            'radio'=>[
              '1',
              '2'
            ],
            'classList'=>'form-check-input',
          ],

          [
            'type'=>'number',
            'name'=>'yerlesme_yil',
            'label'=>'HALEN KAYITLI OLDUĞU YÜKSEKÖĞRETİM KURUMUNA YERLEŞTİRİLDİĞİ YIL',
            'value'=>'1990',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>$date,
            'min'=>'0',
          ],
          [
            'type'=>'number',
            'name'=>'gortalama',
            'label'=>'GENEL AKADEMİK BAŞARI NOT ORTALAMASI:',
            'value'=>'0',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'4',
            'min'=>'0',
          ],
          [
            'type'=>'number',
            'name'=>'puan',
            'label'=>'HALEN KAYITLI OLUNAN PROGRAMA YERLEŞTİRMEDE KULLANILAN PUANI',
            'value'=>'180',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'500',
            'min'=>'180',
          ],
          [
            'type'=>'select',
            'name'=>'puan_turu',
            'label'=>'HALEN KAYITLI OLUNAN PROGRAMA YERLEŞTİRMEDE KULLANILAN PUAN TÜRÜ',
            'ops'=>[
              'SAYISAL',
              'EŞİT',
              'SÖZEL',
              'DİL'
              ] ,
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
            'classList'=>'select',
            'value_key'=>0
          ],
          [
            'type'=>'input',
            'name'=>'basvuru_bolum',
            'label'=>'BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMI',
            'value'=>'',
            'classList'=>'form-control',
            'required'=>'true',
            'max'=>'255',
            'min'=>'0',
          ],

          [
            'type'=>'submit',
            'name'=>'submit',
            'label'=>'0',
            'value'=>'PDF Oluştur',
            'classList'=>'btn btn-primary',
            'required'=>'true',
            'max'=>'0',
            'min'=>'0',
          ]


        ],
      ];

      //dd($form);
      return view('forms.form')->with('form',$form);



    }



    public function __construct()
    {
      $this->uni= [
         [
          "name"=> "Abant İzzet Baysal Üniversitesi",
          "value"=> "Abant İzzet Baysal Üniversitesi",
          "selected"=> "true"
         ],
         [
          "name"=> "Abdullah Gül Üniversitesi",
          "value"=> "Abdullah Gül Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Acıbadem Mehmet Ali Aydınlar Üniversitesi",
          "value"=> "Acıbadem Mehmet Ali Aydınlar Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Adana Bilim Ve Teknoloji Üniversitesi",
          "value"=> "Adana Bilim Ve Teknoloji Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Adıyaman Üniversitesi",
          "value"=> "Adıyaman Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Adnan Menderes Üniversitesi",
          "value"=> "Adnan Menderes Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Afyon Kocatepe Üniversitesi",
          "value"=> "Afyon Kocatepe Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ağrı İbrahim Çeçen Üniversitesi",
          "value"=> "Ağrı İbrahim Çeçen Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ahi Evran Üniversitesi",
          "value"=> "Ahi Evran Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Akdeniz Üniversitesi",
          "value"=> "Akdeniz Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Aksaray Üniversitesi",
          "value"=> "Aksaray Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Alanya Alaaddin Keykubat Üniversitesi",
          "value"=> "Alanya Alaaddin Keykubat Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Alanya Hamdullah Emin Paşa Üniversitesi",
          "value"=> "Alanya Hamdullah Emin Paşa Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Altınbaş Üniversitesi",
          "value"=> "Altınbaş Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Amasya Üniversitesi",
          "value"=> "Amasya Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Anadolu Üniversitesi",
          "value"=> "Anadolu Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ankara Sosyal Bilimler Üniversitesi",
          "value"=> "Ankara Sosyal Bilimler Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ankara Üniversitesi",
          "value"=> "Ankara Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ankara Yıldırım Beyazıt Üniversitesi",
          "value"=> "Ankara Yıldırım Beyazıt Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Antalya Akev Üniversitesi",
          "value"=> "Antalya Akev Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Antalya Bilim Üniversitesi",
          "value"=> "Antalya Bilim Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ardahan Üniversitesi",
          "value"=> "Ardahan Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Artvin Çoruh Üniversitesi",
          "value"=> "Artvin Çoruh Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ataşehir Adıgüzel Meslek Yüksekokulu",
          "value"=> "Ataşehir Adıgüzel Meslek Yüksekokulu",
          "selected"=> "false"
         ],
         [
          "name"=> "Atatürk Üniversitesi",
          "value"=> "Atatürk Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Atılım Üniversitesi",
          "value"=> "Atılım Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Avrasya Üniversitesi",
          "value"=> "Avrasya Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Avrupa Meslek Yüksekokulu",
          "value"=> "Avrupa Meslek Yüksekokulu",
          "selected"=> "false"
         ],
         [
          "name"=> "Bahçeşehir Üniversitesi",
          "value"=> "Bahçeşehir Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Balıkesir Üniversitesi",
          "value"=> "Balıkesir Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bandırma Onyedi Eylül Üniversitesi",
          "value"=> "Bandırma Onyedi Eylül Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bartın Üniversitesi",
          "value"=> "Bartın Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Başkent Üniversitesi",
          "value"=> "Başkent Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Batman Üniversitesi",
          "value"=> "Batman Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bayburt Üniversitesi",
          "value"=> "Bayburt Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Beykent Üniversitesi",
          "value"=> "Beykent Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Beykoz Üniversitesi",
          "value"=> "Beykoz Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bezm-İ Âlem Vakıf Üniversitesi",
          "value"=> "Bezm-İ Âlem Vakıf Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bilecik Şeyh Edebali Üniversitesi",
          "value"=> "Bilecik Şeyh Edebali Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bingöl Üniversitesi",
          "value"=> "Bingöl Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Biruni Üniversitesi",
          "value"=> "Biruni Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bitlis Eren Üniversitesi",
          "value"=> "Bitlis Eren Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Boğaziçi Üniversitesi",
          "value"=> "Boğaziçi Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bozok Üniversitesi",
          "value"=> "Bozok Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bursa Teknik Üniversitesi",
          "value"=> "Bursa Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Bülent Ecevit Üniversitesi",
          "value"=> "Bülent Ecevit Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Canik Başarı Üniversitesi",
          "value"=> "Canik Başarı Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Cumhuriyet Üniversitesi",
          "value"=> "Cumhuriyet Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Çağ Üniversitesi",
          "value"=> "Çağ Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Çanakkale Onsekiz Mart Üniversitesi",
          "value"=> "Çanakkale Onsekiz Mart Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Çankaya Üniversitesi",
          "value"=> "Çankaya Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Çankırı Karatekin Üniversitesi",
          "value"=> "Çankırı Karatekin Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Çukurova Üniversitesi",
          "value"=> "Çukurova Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Dicle Üniversitesi",
          "value"=> "Dicle Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Doğuş Üniversitesi",
          "value"=> "Doğuş Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Dokuz Eylül Üniversitesi",
          "value"=> "Dokuz Eylül Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Dumlupınar Üniversitesi",
          "value"=> "Dumlupınar Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Düzce Üniversitesi",
          "value"=> "Düzce Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ege Üniversitesi",
          "value"=> "Ege Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Erciyes Üniversitesi",
          "value"=> "Erciyes Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Erzincan Üniversitesi",
          "value"=> "Erzincan Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Erzurum Teknik Üniversitesi",
          "value"=> "Erzurum Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Eskişehir Osmangazi Üniversitesi",
          "value"=> "Eskişehir Osmangazi Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Faruk Saraç Tasarım Meslek Yüksekokulu",
          "value"=> "Faruk Saraç Tasarım Meslek Yüksekokulu",
          "selected"=> "false"
         ],
         [
          "name"=> "Fatih Sultan Mehmet Vakıf Üniversitesi",
          "value"=> "Fatih Sultan Mehmet Vakıf Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Fırat Üniversitesi",
          "value"=> "Fırat Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Galatasaray Üniversitesi",
          "value"=> "Galatasaray Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Gazi Üniversitesi",
          "value"=> "Gazi Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Gaziantep Üniversitesi",
          "value"=> "Gaziantep Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Gaziosmanpaşa Üniversitesi",
          "value"=> "Gaziosmanpaşa Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Gebze Teknik Üniversitesi",
          "value"=> "Gebze Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Giresun Üniversitesi",
          "value"=> "Giresun Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Gümüşhane Üniversitesi",
          "value"=> "Gümüşhane Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Hacettepe Üniversitesi",
          "value"=> "Hacettepe Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Hakkari Üniversitesi",
          "value"=> "Hakkari Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Haliç Üniversitesi",
          "value"=> "Haliç Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Harran Üniversitesi",
          "value"=> "Harran Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Hasan Kalyoncu Üniversitesi",
          "value"=> "Hasan Kalyoncu Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Hitit Üniversitesi",
          "value"=> "Hitit Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Iğdır Üniversitesi",
          "value"=> "Iğdır Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Işık Üniversitesi",
          "value"=> "Işık Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İbn Haldun Üniversitesi",
          "value"=> "İbn Haldun Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İhsan Doğramacı Bilkent Üniversitesi",
          "value"=> "İhsan Doğramacı Bilkent Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İnönü Üniversitesi",
          "value"=> "İnönü Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İskenderun Teknik Üniversitesi",
          "value"=> "İskenderun Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul 29 Mayıs Üniversitesi",
          "value"=> "İstanbul 29 Mayıs Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Arel Üniversitesi",
          "value"=> "İstanbul Arel Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Aydın Üniversitesi",
          "value"=> "İstanbul Aydın Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Ayvansaray Üniversitesi",
          "value"=> "İstanbul Ayvansaray Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Bilgi Üniversitesi",
          "value"=> "İstanbul Bilgi Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Bilim Üniversitesi",
          "value"=> "İstanbul Bilim Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Esenyurt Üniversitesi",
          "value"=> "İstanbul Esenyurt Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Gedik Üniversitesi",
          "value"=> "İstanbul Gedik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Gelişim Üniversitesi",
          "value"=> "İstanbul Gelişim Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Kavram Meslek Yüksekokulu",
          "value"=> "İstanbul Kavram Meslek Yüksekokulu",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Kemerburgaz Üniversitesi",
          "value"=> "İstanbul Kemerburgaz Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Kent Üniversitesi",
          "value"=> "İstanbul Kent Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Kültür Üniversitesi",
          "value"=> "İstanbul Kültür Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Medeniyet Üniversitesi",
          "value"=> "İstanbul Medeniyet Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Medipol Üniversitesi",
          "value"=> "İstanbul Medipol Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Rumeli Üniversitesi",
          "value"=> "İstanbul Rumeli Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Sabahattin Zaim Üniversitesi",
          "value"=> "İstanbul Sabahattin Zaim Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Şehir Üniversitesi",
          "value"=> "İstanbul Şehir Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Şişli Meslek Yüksekokulu",
          "value"=> "İstanbul Şişli Meslek Yüksekokulu",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Teknik Üniversitesi",
          "value"=> "İstanbul Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Ticaret Üniversitesi",
          "value"=> "İstanbul Ticaret Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Üniversitesi",
          "value"=> "İstanbul Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstanbul Yeni Yüzyıl Üniversitesi",
          "value"=> "İstanbul Yeni Yüzyıl Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İstinye Üniversitesi",
          "value"=> "İstinye Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İzmir Bakırçay Üniversitesi",
          "value"=> "İzmir Bakırçay Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İzmir Demokrasi Üniversitesi",
          "value"=> "İzmir Demokrasi Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İzmir Ekonomi Üniversitesi",
          "value"=> "İzmir Ekonomi Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İzmir Katip Çelebi Üniversitesi",
          "value"=> "İzmir Katip Çelebi Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "İzmir Yüksek Teknoloji Enstitüsü",
          "value"=> "İzmir Yüksek Teknoloji Enstitüsü",
          "selected"=> "false"
         ],
         [
          "name"=> "Kadir Has Üniversitesi",
          "value"=> "Kadir Has Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kafkas Üniversitesi",
          "value"=> "Kafkas Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kahramanmaraş Sütçü İmam Üniversitesi",
          "value"=> "Kahramanmaraş Sütçü İmam Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kapadokya Üniversitesi",
          "value"=> "Kapadokya Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Karabük Üniversitesi",
          "value"=> "Karabük Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Karadeniz Teknik Üniversitesi",
          "value"=> "Karadeniz Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Karamanoğlu Mehmetbey Üniversitesi",
          "value"=> "Karamanoğlu Mehmetbey Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kastamonu Üniversitesi",
          "value"=> "Kastamonu Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kırıkkale Üniversitesi",
          "value"=> "Kırıkkale Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kırklareli Üniversitesi",
          "value"=> "Kırklareli Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kilis 7 Aralık Üniversitesi",
          "value"=> "Kilis 7 Aralık Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kocaeli Üniversitesi",
          "value"=> "Kocaeli Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Koç Üniversitesi",
          "value"=> "Koç Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Konya Gıda Ve Tarım Üniversitesi",
          "value"=> "Konya Gıda Ve Tarım Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Kto Karatay Üniversitesi",
          "value"=> "Kto Karatay Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Maltepe Üniversitesi",
          "value"=> "Maltepe Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Manisa Celâl Bayar Üniversitesi",
          "value"=> "Manisa Celâl Bayar Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Mardin Artuklu Üniversitesi",
          "value"=> "Mardin Artuklu Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Marmara Üniversitesi",
          "value"=> "Marmara Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Mef Üniversitesi",
          "value"=> "Mef Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Mehmet Akif Ersoy Üniversitesi",
          "value"=> "Mehmet Akif Ersoy Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Melikşah Üniversitesi",
          "value"=> "Melikşah Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Mersin Üniversitesi",
          "value"=> "Mersin Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Mimar Sinan Güzel Sanatlar Üniversitesi",
          "value"=> "Mimar Sinan Güzel Sanatlar Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Muğla Sıtkı Koçman Üniversitesi",
          "value"=> "Muğla Sıtkı Koçman Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Munzur Üniversitesi",
          "value"=> "Munzur Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Mustafa Kemal Üniversitesi",
          "value"=> "Mustafa Kemal Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Muş Alparslan Üniversitesi",
          "value"=> "Muş Alparslan Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Namık Kemal Üniversitesi",
          "value"=> "Namık Kemal Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Necmettin Erbakan Üniversitesi",
          "value"=> "Necmettin Erbakan Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Nevşehir Hacı Bektaş Veli Üniversitesi",
          "value"=> "Nevşehir Hacı Bektaş Veli Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Niğde Ömer Halisdemir Üniversitesi",
          "value"=> "Niğde Ömer Halisdemir Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Niğde Üniversitesi",
          "value"=> "Niğde Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Nişantaşı Üniversitesi",
          "value"=> "Nişantaşı Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Nuh Naci Yazgan Üniversitesi",
          "value"=> "Nuh Naci Yazgan Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Okan Üniversitesi",
          "value"=> "Okan Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ondokuz Mayıs Üniversitesi",
          "value"=> "Ondokuz Mayıs Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ordu Üniversitesi",
          "value"=> "Ordu Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Orta Doğu Teknik Üniversitesi",
          "value"=> "Orta Doğu Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Osmaniye Korkut Ata Üniversitesi",
          "value"=> "Osmaniye Korkut Ata Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Özyeğin Üniversitesi",
          "value"=> "Özyeğin Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Pamukkale Üniversitesi",
          "value"=> "Pamukkale Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Piri Reis Üniversitesi",
          "value"=> "Piri Reis Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Recep Tayyip Erdoğan Üniversitesi",
          "value"=> "Recep Tayyip Erdoğan Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Sabancı Üniversitesi",
          "value"=> "Sabancı Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Sağlık Bilimleri Üniversitesi",
          "value"=> "Sağlık Bilimleri Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Sakarya Üniversitesi",
          "value"=> "Sakarya Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Sanko Üniversitesi",
          "value"=> "Sanko Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Selçuk Üniversitesi",
          "value"=> "Selçuk Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Siirt Üniversitesi",
          "value"=> "Siirt Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Sinop Üniversitesi",
          "value"=> "Sinop Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Süleyman Demirel Üniversitesi",
          "value"=> "Süleyman Demirel Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Şırnak Üniversitesi",
          "value"=> "Şırnak Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ted Üniversitesi",
          "value"=> "Ted Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Tobb Ekonomi Ve Teknoloji Üniversitesi",
          "value"=> "Tobb Ekonomi Ve Teknoloji Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Toros Üniversitesi",
          "value"=> "Toros Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Trakya Üniversitesi",
          "value"=> "Trakya Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Türk Hava Kurumu Üniversitesi",
          "value"=> "Türk Hava Kurumu Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Türk-Alman Üniversitesi",
          "value"=> "Türk-Alman Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Ufuk Üniversitesi",
          "value"=> "Ufuk Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Uludağ Üniversitesi",
          "value"=> "Uludağ Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Uşak Üniversitesi",
          "value"=> "Uşak Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Üsküdar Üniversitesi",
          "value"=> "Üsküdar Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Yalova Üniversitesi",
          "value"=> "Yalova Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Yaşar Üniversitesi",
          "value"=> "Yaşar Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Yeditepe Üniversitesi",
          "value"=> "Yeditepe Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Yıldız Teknik Üniversitesi",
          "value"=> "Yıldız Teknik Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Yüksek İhtisas Üniversitesi",
          "value"=> "Yüksek İhtisas Üniversitesi",
          "selected"=> "false"
         ],
         [
          "name"=> "Yüzüncü Yıl Üniversitesi",
          "value"=> "Yüzüncü Yıl Üniversitesi",
          "selected"=> "false"
         ]
       ] ?? null;



    }









}
