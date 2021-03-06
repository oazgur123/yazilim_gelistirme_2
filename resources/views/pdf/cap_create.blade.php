
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
            <div class="from-tipi"><p style="font-weight: 900;">OGR-F-5</p></div>
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
                        Kocaeli ??niversitesi ??n Lisans ve Lisans E??itim ve ????retim Y??netmeli??i???nin 45. maddesi uyar??nca, Fak??lteniz {{$cap_bolum}} B??l??m?????nde ??ift Anadal Program?? (??AP) kapsam??nda ????renim g??rme talebimin kabul edilmesini
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
                        <p>Adres :</p>
                    </td>
                    <td>
                       <p>{{$adres}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                        <p>GSM</p>
                    </td>
                    <td>
                        <p>{{$telefon_no}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>E-Mail</p>
                    </td>
                    <td>
                          <p>{{$email}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>Eki: Trankript</p>
                    </td>
                    <td>
                          <p>
                            (??kinci Anadal taban puan?? ile ????rencinin ald?????? puan?? g??steren belge (Ba??ar?? s??ralamas?? ilk %20??? de bulunmayan ????renciler i??in)
                          </p>
                    </td>
                  </tr>

                </tbody>
            </table>
            <br>



            <table style="margin-top:20px 0">
                <tr>
                    <p style="font-size:10px; margin-top:20px;">
                        Kocaeli ??niversitesi Bili??im Sistemleri M??hendisli??i B??l??m?????nde sorumlu olunan ders/dersler:
                    </p>
                  <th>
            </table>




                  <table style="margin:10px 0;">
                    <tr >
                        <th >
                            <p>??lgili Y??netmelikler</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">
                                (01/06/2016  tarih ve 29729 say??l?? Resmi Gazete???de yay??mlanan Kocaeli ??niversitesi ??n Lisans ve Lisans E??itim ve ????retim Y??netmeli??i)
                            </p>
                        </td>
                    </tr>
                  </table>

                  <table style="margin:10px 0;">
                    <tr >
                        <th >
                            <p>??ift Anadal Program??</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">
                                MADDE 45 ??? (1) Bir b??l??m??n ????rencileri, lisans ????renimleri boyunca ayn?? fak??lte i??inde veya d??????nda as??l b??l??m??ne konu bak??m??ndan yak??n olan ba??ka bir lisans ????retimini ayn?? zamanda takip edebilir. Bununla ilgili esaslar Senato taraf??ndan belirlenir.
                            </p>
                        </td>
                    </tr>
                  </table>



                  <table style="margin-top:10px">
                      <tr >
                          <th >
                            <p>
                            <a href="http://odb.kocaeli.edu.tr/dosyalar/yonetmelikler/Kou_cap_yonetmeligi.pdf">Kocaeli ??niversitesi ??ift Anadal Program?? (??AP) Y??netmeli??i : </a>
                            http://odb.kocaeli.edu.tr/dosyalar/yonetmelikler/Kou_cap_yonetmeligi.pdf
                            </p>
                          </th>
                      </tr>
                    <tr >
                        <td >
                            <p style="padding-left: 20px;font-size:8px; margin-top:10px">
                                MADDE 6 (2) Ba??vuru an??nda anadal diploma program??ndaki GNO'su 4.00'1??k not sisteminde en az 3.00 olan ve anadal diploma program??n??n ilgili s??n??f??nda ba??ar?? s??ralamas?? itibariyle ilk %20'sinde bulunan ????renciler ikinci anadal program??na ba??vurabilir.
                                c. Anadal diploma program??ndaki GNO'su en az 3.00 olan ancak anadal diploma program??n??n ilgili s??n??f??nda ba??ar?? s??ralamas?? itibariyle en ??st %20'sinde yer almayan ????rencilerden ??ift anadal yap??lacak b??l??m??n/program??n ilgili y??ldaki taban puan??ndan az olmamak ??zere puana sahip olanlar da ??AP'a ba??vurabilirler.
                                <br>
                            </p>
                        </td>
                    </tr>
                  </table>
        </div>
    </div>
</body>
</html>
