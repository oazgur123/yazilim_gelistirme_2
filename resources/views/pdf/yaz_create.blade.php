
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
                KOCAEL?? ??N??VERS??TES??
                {{strtoupper($ogrenci_fakulte)}}
                {{strtoupper($ogrenci_bolum)}} B??L??M BA??KANLI??INA
                </h5>
        <div class="frame">
            <table style="margin:20px 0">
                <tr>
                  <th>
                    <p style="font-size:10px; margin-top:20px;">{{$ogrenci_fakulte}} {{$ogrenci_bolum}} B??l??m?? {{$ogrenci_no}} numaral?? {{$name}} isimli ????rencisiyim. <br>
                        {{date('Y')-1}}/{{date('Y')}} E??itim ????retim y??l?? yaz ????retimi kapsam??nda a??a????da bilgilerini verdi??im ders/dersleri almak istiyorum. Kontrol listesinde belirtilen ad??mlar?? tamamlad??m.
                        </p>
                  </th>
                </tr>
                <tr  >
                    <td style="height: 40px;">
                         <p>Gere??inin yap??lmas??n?? arz ederim.	</p>
                         <p style="padding-right: 50px;">
                        ??mza:
                         </p>
                    </td>

                </tr>
            </table>
          <!--Ba??vuru T??r??-->
            <table class="table" style="margin-right:auto;margin-left:auto;">
                <tbody>
                  <tr style="height:10px">
                    <td class="col">
                        <p>????renci E-mail</p>
                    </td>
                    <td>
                       <p>{{$email}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                        <p>????renci Adres</p>
                    </td>
                    <td>
                        <p>{{$adres}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>????renci Gsm </p>
                    </td>
                    <td>
                          <p>{{$telefon_no}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>????renci Dan????man?? Ad?? Soyad??	</p>
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
                            <p>Yaz okulu i??in Ba??vurulan ??niversite</p>
                    </td>
                    <td>
                          <p>{{$uni}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px" >
                    <td class="col end">
                            <p>Yaz okulu ba??lama-biti?? tarihleri</p>
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
                        Kocaeli ??niversitesi {{$ogrenci_bolum}} B??l??m?????nde sorumlu olunan ders/dersler:
                    </p>
                  <th>
            </table>



            <table class="table" style="margin-right:auto;margin-left:auto;">
                <tr>
                    <th><p>Dersin Ad?? ve Kodu</p></th>
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
                        Yaz ????retimi kapsam??nda al??nacak ders/dersler
                    </p>
                  <th>
            </table>


            <table class="table" style="margin-right:auto;margin-left:auto;">
                <tr>
                    <th><p>Fak??lte/B??l??m</p></th>
                    <th><p>Ders ad??/Kodu</p></th>
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





              <!--Ki??isel Bilgiler-->




                <!--III- ????REN??M??NE ??L????K??N B??LG??LER-->




                  <!---IV ??? ADAYIN BA??VURDU??U Y??KSEK????RET??M PROGRAMINA ??L????K??N B??LG??LER-->


                  <!---IV ??? ADAYIN BA??VURDU??U Y??KSEK????RET??M PROGRAMINA ??L????K??N B??LG??LER-->



                  <table style="margin:10px 0;">
                    <tr >
                        <th >
                            <p>Dilek??e Ekleri</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">
                                1-	Yaz d??neminde ders almak istenilen ??niversite ve Kocaeli ??niversitesinin ilgili b??l??mlerinin, ????rencinin ??niversiteye giri?? y??l??ndaki taban puanlar??n?? g??steren belge ektedir. <br>
                                2-	Al??nmak istenilen derslerin kar???? ??niversitedeki ders saati/kredi/AKTS ve ders i??eriklerini g??steren belge ektedir <br>
                                3-	Ba??vurulan d??nem i??inde al??nm???? transkript ektedir.

                            </p>
                        </td>
                    </tr>
                  </table>


                  <table class="table" style="margin-right:auto;margin-left:auto;">
                    <tr>
                        <th></th>
                        <th><p>Unvan, Ad??, Soyad??</p></th>
                        <th><p>??mza</p></th>
                    </tr>

                    <!--TBODY-->

                    <tr>
                        <td><p>????RENC?? DANI??MANI</p></td>
                        <td><p>{{$danisman}}</p></td>
                        <td><p></p></td>

                    </tr>
                    <tr>
                        <td><p>B??L??M BA??KANI</p></td>
                        <td><p>{{$baskan}}</p></td>
                        <td><p></p></td>
                    </tr>

                </table>

                  <table style="margin-top:10px">
                      <tr >
                          <th style="text-align:center">
                            <p >KOCAEL?? ??N??VERS??TES?? YAZ ????RET??M?? ESASLARI</p>
                          </th>
                      </tr>
                    <tr >
                        <td >
                            <p style="padding-left: 20px;font-size:8px; margin-top:10px">
                                ESAS l- (1) Spor Bilimleri Fak??ltesi d??????ndaki t??m akademik birimlerde okuyan ????rencilerin, di??er y??ksek????retim kurumlar??ndan yaz ????retiminde ders alabilmeleri i??in; ??niversiteye giri?? y??l?? esas olmak ??zere ilgili b??l??m/program taban puan??n en fazla 40 puan d??????k olma ko??ulu aran??r. <br>
                                (3) Yaz okulunda di??er y??ksek????retim kurumlar??ndan al??nacak dersler i??in ????rencinin kay??tl?? oldu??u ilgili birimin B??l??m/Anabilim Dal?? veya Program Ba??kanl??????n??n onay?? gerekir. <br>
                                (4) Yaz okulunda B??l??m/Anabilim Dal?? veya Program Ba??kanl?????? bu konudaki de??erlendirmesini; ilgili b??l??m m??fredat??ndaki benzer i??eri??e veya program yeterlili??ine sahip olmakla birlikte, ders(ler)in AKTS/kedi/saat de??er(ler)inden herhangi birini dikkate alarak yapar. <br>
                                ESAS 2- (l) ????renciler, yaz ????retiminde derslerin AKTS/kredi/saat de??erlerine bak??lmaks??z??n, en ??ok 3 ders alabilir. <br>
                                ESAS 3- (l) G??z ve/veya bahar yar??y??llar??nda kay??t donduran ????renciler, kay??t dondurduklar?? yar??y??llara ili??kin dersleri yaz ????retiminde alamazlar. <br>
                                ESAS 6  (l)Yaz ????retimi kapsam??nda al??nan ders(ler)in notu genel not ortalamas??na bak??lmaks??z??n 4'l??k sistem ??zerinden 2'nin alt??nda ise ????renci bu ders(ler)den ba??ar??s??z say??l??r.  <br>
                                ESAS 9- (l) Yaz ????retimi ayn?? ????retim y??l??na ait ??????nc?? bir yar??y??l de??ildir. Yaz ????retiminde al??nan ders(ler)in notlar??, ????rencilerin g??z ve bahar yar??y??llar??ndaki yar??y??l not ortalamalar??n?? ve yar??y??llardaki derslerin ko??ul durumlar??n?? etkilemez. Ancak, ????rencinin genel not ortalamas?? (GNO) hesaplanmas??na dahil edilir. <br>
                            </p>
                        </td>
                    </tr>
                  </table>
        </div>
    </div>
</body>
</html>
