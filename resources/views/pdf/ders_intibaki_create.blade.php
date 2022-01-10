
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
            margin:2px;
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


    </style>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="main">
            <h5 class="text-center">KOCAELİ ÜNİVERSİTESİ <br> {{ strtoupper($ogrenci_fakulte) }} DEKANLIĞINA</h5>
        <div class="frame">
          <!--Başvuru Türü-->
            <table class="table" style="width:80%;margin-right:auto;margin-left:auto;">
                <thead>
                  <tr style="height:auto;">
                    <th class="col">
                      <p ><span>KİMLİK BİLGİLERİ</span> (Tüm alanları doldurunuz)</p>
                    </th>
                    <th>
                      </th>
                  </tr>

                </thead>
                <tbody>
                  <tr style="height:10px">
                    <td class="col">
                        <p>Adı ve Soyadı</p>
                    </td>
                    <td>
                       <p>{{ $name }}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                        <p>Öğrenci No</p>
                    </td>
                    <td>
                        <p>{{$ogrenci_no}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>Bölümü</p>
                    </td>
                    <td>
                          <p>{{$ogrenci_bolum}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>Telefon Numarası</p>
                    </td>
                    <td>
                          <p>{{$telefon_no}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px">
                    <td class="col">
                            <p>E-posta Adresi	 </p>
                    </td>
                    <td>
                          <p>{{$email}}</p>
                    </td>
                  </tr>

                  <tr style="height:10px" >
                    <td class="col end">
                            <p>Yazışma Adresi</p>
                    </td>
                    <td class="end">
                          <p>{{$adres}}</p>
                    </td>
                  </tr>

                </tbody>
              </table>

              <!--Kişisel Bilgiler-->

              <table style="margin:20px 0">
                    <tr>
                      <th>
                        <p style="font-size:10px; margin-top:20px;">Daha önce {{$eski_uni}} Üniversitesi {{$eski_fakulte}} Fakültesi / Meslek Yüksek Okulu {{$eski_bolum}} Bölümünde / Programında aldığım ve aşağıda belirttiğim ders / derslerden muaf olmak istiyorum.</p>
                      </th>
                    </tr>
                    <tr  >
                        <td style="height: 40px;">
                             <p>Gereğinin yapılmasını arz ederim.	</p>
                             <p style="padding-right: 50px;">
                               @php
                               date_default_timezone_set('Europe/Istanbul');
                               @endphp
                                 Tarih:{{ date('d.m.Y') }}<br>
 								                 İmza:
                             </p>
                        </td>

                    </tr>
                </table>



                <!--III- ÖĞRENİMİNE İLİŞKİN BİLGİLER-->




                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->


                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->


                  <table class="table">
                      <tr>
                        <th>
                          <p ><span>Bilişim Sistemleri Mühendisliği Bölümünde Muaf Olmak İstediğim Dersler</span></p>
                          </th>
                      </tr>

                        <tr style="height:34px; border:none;">
                          <th style="border:none;border-right: 0.5px solid; text-align: center; padding:0" >
                            <table style="border-collapse: collapse;" >
                                    <tr style="border:none; height:34px">
                                        <th style="border-bottom:0.5px solid; border-right: 0.5px solid;">
                                            <p style="text-align:center">ADI</p>
                                        </th>
                                        <th style="border-bottom:0.5px solid; border-right: 0.5px solid;">
                                            <p style="transform: rotate(-90deg);text-align:center" >T</p>
                                        </th>
                                        <th style="border-bottom:0.5px solid; border-right: 0.5px solid;">
                                            <p style="transform: rotate(-90deg);text-align:center" >U/L</p>
                                        </th>
                                        <th style="border-bottom:0.5px solid;">
                                            <p style="transform: rotate(-90deg);text-align:center" >AKTS</p>
                                        </th>
                                    </tr>


                                    <!--TBODY-->
                                    @foreach($yazders as $der)
                                    <tr>
                                        <td><p>{{$der->ders}}</p></td>
                                        <td><p>{{$der->T}}</p></td>
                                        <td><p>{{$der->U}}/{{$der->L}}</p></td>
                                        <td><p>{{$der->AKTS}}</p></td>
                                    </tr>
                                    @endforeach
                            </table>
                          </th>

                        </tr>

                  </table>


                  <table>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">T: Teorik Ders Saati  U / L : Uygulama / Laboratuvar Saati  K : Kredi</p>
                        </td>
                    </tr>
                  </table>

                  <table style="margin-top:20px;">
                    <tr >
                        <th >
                            <p>Eklenecek Belge/Belgeler:</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">
                                1-	Transkript Belgesi (Onaylı)<br>
                                2-	Onaylı Ders İçerikleri
                            </p>
                        </td>
                    </tr>
                  </table>














        </div>



    </div>
</body>
</html>
