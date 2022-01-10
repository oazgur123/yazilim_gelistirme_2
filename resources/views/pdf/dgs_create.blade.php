<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="tr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        * {
            font-family: "DejaVu Sans Mono", monospace;
        }
        .form-tipi {
            text-align: right;
            font-size: 10px;
        }

        .text-center {
            text-align: center;
        }

        .frame {
            margin-top: 1px;
            border: 2px solid black;
        }

        table {
            width: 100%;
        }

        .main {
            margin: 15px 0px;
            padding: 0 10px;
        }

        th {
            text-align: left;
        }

        th p,
        td p {
            font-size: 10px;
            width: fit-content;
        }

        th,
        td {
            padding: 0;
            margin: 0;
        }

        .title {
            border-bottom: 1px solid black;
        }

        tr {
            height: 12.95px;
        }

        .table tr,
        .table td,
        .table th {
            border-bottom: 0.5px solid black;
            border-left: 0.5px solid black;
            padding-left: 5px;
        }



        .table {
            border: 0.4px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        .table .col {
            border-right: 0.5px solid black;

        }

        .table .end {
            border-bottom: none;

        }

        .table thead .col {
            border-right: none;
        }

        .table thead p span {
            font-weight: bold;
            font-size: 10px;
        }

        .sub-table td,
        th {
            min-width: 20px;
        }

        .sub-table p {
            width: fit-content;
        }

        .tab {
            text-align: right;
        }

        .table-bg {
            /*background-image: url("https://drive.google.com/u/1/uc?id=1Cq5i5eBMqsPkGswa2xii0w99Ls-l7CXI&export=download");*/
            background-repeat: none;
            background-size: cover;
            padding: 10px;

            border-bottom: 2px solid;
        }

        .rote-title {
            transform: rotate(90deg);
            font-size: 15px;
            /* text-align: center; */
            margin-top: 31px;
            margin-left: -29px;
            background: #c6eafa;

        }
    </style>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <div class="main">

      @php
      date_default_timezone_set('Europe/Istanbul');
      @endphp
        <div class="text-center">
            <img src="https://osym.gov.tr/images/osym-logo.png"
                width="10%" alt="">
            <h5 class="text-center">{{date('Y')}} - DGS ADAY BAŞVURU FORMU</h5>
        </div>
        <div class="frame">

            <table class="table-bg" style="margin-right:auto;margin-left:auto;">
                <tbody>
                    <tr>
                      <th> <p>KİMLİK BİLGİLERİ</p> </th>
                    </tr>
                    <tr>
                        <td class="col">
                            <p>1. T.C. KİMLİK NUMARASI :</p>
                        </td>
                        <td>
                            <p>{{$tc}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="col">
                            <p>2. ADI:</p>
                        </td>
                        <td>
                            <p>{{explode(' ',$name)[0]}}</p>
                        </td>

                        <td class="col">
                            <p>3. SOYADI :</p>
                        </td>
                        <td>
                            <p>{{explode(' ',$name)[1]}}</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="col">
                            <p>4. BABA ADI:</p>
                        </td>
                        <td>
                            <p>{{$baba}}</p>
                        </td>

                        <td class="col">
                            <p>5. ANNE ADI:</p>
                        </td>
                        <td>
                            <p>{{$anne}}</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="col">
                            <p>6. DOĞUM TARİHİ:</p>
                        </td>
                        <td>
                            <p>{{$dogum}}</p>
                        </td>

                        <td class="col">
                            <p>7. CİNSİYET:</p>
                        </td>
                        <td>
                            <P>
                              @if($cinsiyet=="Erkek")
                                <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg"
                                    alt="" width="10px" height="10px"> <span>ERKEK</span>
                              @else
                              <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg"
                                  alt="" width="10px" height="10px"> <span>KIZ</span>
                              @endif

                              @if($cinsiyet=="Kız")
                                <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg"
                                    alt="" width="10px" height="10px"> <span>KIZ</span>
                                    @else
                                    <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg"
                                        alt="" width="10px" height="10px"> <span>KIZ</span>
                                    @endif
                            </P>
                        </td>
                    </tr>

                    <tr>
                        <td class="col">
                            <p>8. DOĞUM YERİ:</p>
                        </td>
                        <td>
                            <p>{{$dogumyeri}}</p>
                        </td>

                        <td class="col">
                            <p>9. NUFUSA KAYIT OLDUĞU İL/İLÇE:</p>
                        </td>
                        <td>
                            <p>{{$nufus_il}}/{{$nufus_ilce}}</p>
                        </td>
                    </tr>


                </tbody>
            </table>



            <table class="table-bg" style="margin-right:auto;margin-left:auto;">
                    <tbody>
                        <tr>
                          <th> <p>İLETİŞİM BİLGİLERİ</p> </th>
                        </tr>
                    <tr>
                        <td class="col">
                            <p>11. YAZIŞMA ADRESİ </p>
                        </td>
                        <td>
                            <p>{{$adres}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="col">
                            <p>ADRES İLİ:</p>
                        </td>
                        <td>
                            <p>{{$adres_il}}</p>
                        </td>

                        <td class="col">
                            <p>ADRES İLÇESİ :</p>
                        </td>
                        <td>
                            <p>{{$adres_ilce}}</p>
                        </td>

                    </tr>

                    <tr>
                        <td class="col">
                            <p>12. TELEFON NUMARASI:</p>
                        </td>
                        <td>
                            <p>{{$telefon_no}}</p>
                        </td>

                        <td class="col">
                            <p>13. E-POSTA ADRESİ:</p>
                        </td>
                        <td>
                            <p>{{$email}}</p>
                        </td>
                    </tr>




                </tbody>
            </table>

            <table class="table-bg" style="margin-right:auto;margin-left:auto;">
                <tbody>
                  <tr>
                    <th> <p>EĞİTİM BİLGİLERİ</p> </th>
                  </tr>

                <tr>

                        <td class="col">
                            <p>14. ÖN LİSANS EĞİTİM BİLGİSİ :</p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="col">
                            <p>ÜNİVERSİTE ADI:</p>
                        </td>
                        <td>
                            <p>Kocaeli Üniversitesi</p>
                        </td>

                        <td class="col">
                            <p>KODU:</p>
                        </td>
                        <td>
                            <p>1212ASD1</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="col">
                            <p>MESLEK YÜKSEK OKULU ADI:</p>
                        </td>
                        <td>
                            <p>{{$meslek_adi}}</p>
                        </td>

                        <td class="col">
                            <p>KODU:</p>
                        </td>
                        <td>
                            <p>1212SDA</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="col">
                            <p>ÖN LİSANS PROGRAMI</p>
                        </td>
                        <td>
                            <p>{{$onlisans}}</p>
                        </td>

                        <td class="col">
                            <p>KODU:</p>
                        </td>
                        <td>
                            <p>123SDW</p>
                        </td>

                    </tr>
                    <tr>
                        <td class="col">
                            <p>MEZUNİYET TARİHİ</p>
                        </td>
                        <td>
                            <p>{{$mezun_date}}</p>
                        </td>


                    </tr>

                    <tr>
                        <td class="col">
                            <p>DİPLOMA NOTU/PUANI:</p>
                        </td>
                        <td>
                            <p>{{$not}}</p>
                        </td>
                    </tr>




                </tbody>
            </table>

            <table class="table-bg" style="margin-right:auto;margin-left:auto;">
              <tbody>
                <tr>
                  <th> <p>SINAVA İLİŞKİN BİLGİLER</p> </th>
                </tr>
                <tr>

                        <td class="col">
                            <p>15. SINAV MERKEZ TERCİHİ :</p>
                        </td>
                        <td>
                            <p>{{$sinav}}</p>
                        </td>

                        <td class="col">
                            <p>KODU:</p>
                        </td>
                        <td>
                            <p>4532OC</p>
                        </td>
                    </tr>
                </tbody>
            </table>




            <table class="table-bg" style="margin-right:auto;margin-left:auto;">
                <tbody>
                    <tr>
                      <th> <p>İMZA</p> </th>
                    </tr>
                    <tr>
                        <td class="col">
                            <p>20. ADAYIN IMZASI <br>
                                Aday Başvuru Formunda yazilan bütün bilgilerin doğru olduğunu bildiririm. Verdigim bilgilerden
                                herhangi birinin doğru olmadiği saptanirsa, bundan doğacak sonuçlari kabul ederim.</p>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>
</body>

</html>
