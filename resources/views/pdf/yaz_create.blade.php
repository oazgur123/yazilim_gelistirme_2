
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="tr">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

    * {
     font-family: "DejaVu Sans Mono", monospace;
   }


        .form-tipi{
          text-align: right;
          font-size: 10px;
        }
        .text-center{
            text-align: center;
        }
        .frame{
            margin-top: 1px;
            padding: 0 10px ;

        }
        table{
            width: 100%;
        }
        .main{
            margin:15px 0px;
            padding: 0 10px;
        }

        th{
          text-align: left;
        }
        th p,td p{
          font-size: 10px;
          width: fit-content;
        }
        th,td{
          padding: 0;
          margin: 0;
        }

        .title{
          border-bottom: 1px solid black;
        }
        tr{
          height:12.95px ;
        }
        .table tr, .table td,.table th{
          border-bottom: 0.5px solid black;
          border-left: 0.5px solid black;
          padding-left: 5px;
        }



        .table{
          border: 0.4px solid black;
          border-collapse:collapse;
          width:100%;
        }
        .table .col{
          border-right: 0.5px solid black;

        }
        .table .end{
          border-bottom: none;

        }
        .table thead .col{
            border-right:none;
        }
        .table thead p span{
            font-weight:bold;
            font-size: 10px;
        }
        .sub-table td,th{
            min-width:20px;
        }
        .sub-table p{
          width: fit-content;
        }
        .tab{
          text-align: right;
        }

    </style>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="main">

        <div class="tab">
          @php
          date_default_timezone_set('Europe/Istanbul');
          @endphp
            <div class="from-tipi"><p style="font-weight: 900;">OGR-F-1</p></div>
            <div><p style="font-size:10px;">Tarih:{{date('d/m/Y')}}</p></div>
        </div>

            <h5 class="text-center">T.C.
                KOCAELİ ÜNİVERSİTESİ
                {{strtoupper($ogrenci_fakulte)}}
                {{strtoupper($ogrenci_bolum)}} BÖLÜM BAŞKANLIĞINA
                </h5>
        <div class="frame">
            <table style="margin:20px 0">
                <tr>
                  <th>
                    <p style="font-size:10px; margin-top:20px;">{{$ogrenci_fakulte}} {{$ogrenci_bolum}} Bölümü {{$ogrenci_no}} numaralı {{$name}} isimli öğrencisiyim. <br>
                        {{date('Y')-1}}/{{date('Y')}} Eğitim Öğretim yılı yaz öğretimi kapsamında aşağıda bilgilerini verdiğim ders/dersleri almak istiyorum. Kontrol listesinde belirtilen adımları tamamladım.
                        </p>
                  </th>
                </tr>
                <tr  >
                    <td style="height: 40px;">
                         <p>Gereğinin yapılmasını arz ederim.	</p>
                         <p style="padding-right: 50px;">
                        İmza:
                         </p>
                    </td>

                </tr>
            </table>
          <!--Başvuru Türü-->
            <table class="table" style="margin-right:auto;margin-left:auto;">
                <tbody>
                  <tr style="height:10px">
                    <td class="col">
                        <p>Öğrenci E-mail</p>
                    </td>
                    <td>
                       <p>{{$email}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                        <p>Öğrenci Adres</p>
                    </td>
                    <td>
                        <p>{{$adres}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>Öğrenci Gsm </p>
                    </td>
                    <td>
                          <p>{{$telefon_no}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>Öğrenci Danışmanı Adı Soyadı	</p>
                    </td>
                    <td>
                          <p>{{$danisman}}</p>
                    </td>
                  </tr>

                </tbody>
            </table>
            <br>
            <table class="table" style="margin-right:auto;margin-left:auto;">
                <tbody>
                  <tr style="height:10px">
                    <td class="col">
                            <p>Yaz okulu için Başvurulan Üniversite</p>
                    </td>
                    <td>
                          <p>{{$uni}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px" >
                    <td class="col end">
                            <p>Yaz okulu başlama-bitiş tarihleri</p>
                    </td>
                    <td class="end">
                          <p>{{$date_start}}/{{$date_end}}</p>
                    </td>
                  </tr>

                </tbody>
            </table>


            <table style="margin-top:20px 0">
                <tr>
                    <p style="font-size:10px; margin-top:20px;">
                        Kocaeli Üniversitesi {{$ogrenci_bolum}} Bölümü’nde sorumlu olunan ders/dersler:
                    </p>
                  <th>
            </table>



            <table class="table" style="margin-right:auto;margin-left:auto;">
                <tr>
                    <th><p>Dersin Adı ve Kodu</p></th>
                    <th><p>T</p></th>
                    <th><p>U</p></th>
                    <th><p>L</p></th>
                    <th><p>AKTS</p></th>
                </tr>

                <!--TBODY-->
                @foreach($ders as $der)
                <tr>
                    <td><p>{{$der->ders}}</p></td>
                    <td><p>{{$der->T}}</p></td>
                    <td><p>{{$der->U}}</p></td>
                    <td><p>{{$der->L}}</p></td>
                    <td><p>{{$der->AKTS}}</p></td>
                </tr>
                @endforeach

            </table>


            <table style="margin-top:20px 0">
                <tr>
                    <p style="font-size:10px; margin-top:20px;">
                        Yaz öğretimi kapsamında alınacak ders/dersler
                    </p>
                  <th>
            </table>


            <table class="table" style="margin-right:auto;margin-left:auto;">
                <tr>
                    <th><p>Fakülte/Bölüm</p></th>
                    <th><p>Ders adı/Kodu</p></th>
                    <th><p>T</p></th>
                    <th><p>U</p></th>
                    <th><p>L</p></th>
                    <th><p>AKTS</p></th>
                </tr>


                @foreach($yazders as $der)
                <tr>
                    <td><p>{{$der->bolum}}</p></td>
                    <td><p>{{$der->ders}}</p></td>
                    <td><p>{{$der->T}}</p></td>
                    <td><p>{{$der->U}}</p></td>
                    <td><p>{{$der->L}}</p></td>
                    <td><p>{{$der->AKTS}}</p></td>
                </tr>
                @endforeach

            </table>





              <!--Kişisel Bilgiler-->




                <!--III- ÖĞRENİMİNE İLİŞKİN BİLGİLER-->




                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->


                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->



                  <table style="margin:10px 0;">
                    <tr >
                        <th >
                            <p>Dilekçe Ekleri</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">
                                1-	Yaz döneminde ders almak istenilen Üniversite ve Kocaeli Üniversitesinin ilgili bölümlerinin, öğrencinin üniversiteye giriş yılındaki taban puanlarını gösteren belge ektedir. <br>
                                2-	Alınmak istenilen derslerin karşı Üniversitedeki ders saati/kredi/AKTS ve ders içeriklerini gösteren belge ektedir <br>
                                3-	Başvurulan dönem içinde alınmış transkript ektedir.

                            </p>
                        </td>
                    </tr>
                  </table>


                  <table class="table" style="margin-right:auto;margin-left:auto;">
                    <tr>
                        <th></th>
                        <th><p>Unvan, Adı, Soyadı</p></th>
                        <th><p>İmza</p></th>
                    </tr>

                    <!--TBODY-->

                    <tr>
                        <td><p>ÖĞRENCİ DANIŞMANI</p></td>
                        <td><p>{{$danisman}}</p></td>
                        <td><p></p></td>

                    </tr>
                    <tr>
                        <td><p>BÖLÜM BAŞKANI</p></td>
                        <td><p>{{$baskan}}</p></td>
                        <td><p></p></td>
                    </tr>

                </table>

                  <table style="margin-top:10px">
                      <tr >
                          <th style="text-align:center">
                            <p >KOCAELİ ÜNİVERSİTESİ YAZ ÖĞRETİMİ ESASLARI</p>
                          </th>
                      </tr>
                    <tr >
                        <td >
                            <p style="padding-left: 20px;font-size:8px; margin-top:10px">
                                ESAS l- (1) Spor Bilimleri Fakültesi dışındaki tüm akademik birimlerde okuyan öğrencilerin, diğer yükseköğretim kurumlarından yaz öğretiminde ders alabilmeleri için; Üniversiteye giriş yılı esas olmak üzere ilgili bölüm/program taban puanın en fazla 40 puan düşük olma koşulu aranır. <br>
                                (3) Yaz okulunda diğer yükseköğretim kurumlarından alınacak dersler için öğrencinin kayıtlı olduğu ilgili birimin Bölüm/Anabilim Dalı veya Program Başkanlığının onayı gerekir. <br>
                                (4) Yaz okulunda Bölüm/Anabilim Dalı veya Program Başkanlığı bu konudaki değerlendirmesini; ilgili bölüm müfredatındaki benzer içeriğe veya program yeterliliğine sahip olmakla birlikte, ders(ler)in AKTS/kedi/saat değer(ler)inden herhangi birini dikkate alarak yapar. <br>
                                ESAS 2- (l) Öğrenciler, yaz öğretiminde derslerin AKTS/kredi/saat değerlerine bakılmaksızın, en çok 3 ders alabilir. <br>
                                ESAS 3- (l) Güz ve/veya bahar yarıyıllarında kayıt donduran öğrenciler, kayıt dondurdukları yarıyıllara ilişkin dersleri yaz öğretiminde alamazlar. <br>
                                ESAS 6  (l)Yaz öğretimi kapsamında alınan ders(ler)in notu genel not ortalamasına bakılmaksızın 4'lük sistem üzerinden 2'nin altında ise öğrenci bu ders(ler)den başarısız sayılır.  <br>
                                ESAS 9- (l) Yaz öğretimi aynı öğretim yılına ait üçüncü bir yarıyıl değildir. Yaz öğretiminde alınan ders(ler)in notları, öğrencilerin güz ve bahar yarıyıllarındaki yarıyıl not ortalamalarını ve yarıyıllardaki derslerin koşul durumlarını etkilemez. Ancak, öğrencinin genel not ortalaması (GNO) hesaplanmasına dahil edilir. <br>
                            </p>
                        </td>
                    </tr>
                  </table>
        </div>
    </div>
</body>
</html>
