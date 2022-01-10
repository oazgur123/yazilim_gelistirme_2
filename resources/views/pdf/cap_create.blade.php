
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
            KOCAELİ ÜNİVERSİTESİ
            {{strtoupper($ogrenci_fakulte)}}
            {{strtoupper($ogrenci_bolum)}} BÖLÜM BAŞKANLIĞINA
            </h5>
        <div class="frame">
            <table style="margin:20px 0">
                <tr>
                  <th>
                    <p style="font-size:10px; margin-top:20px;">{{$ogrenci_fakulte}} {{$ogrenci_bolum}} Bölümü {{$ogrenci_no}} numaralı {{$name}} isimli öğrencisiyim. <br>
                        Kocaeli Üniversitesi Ön Lisans ve Lisans Eğitim ve Öğretim Yönetmeliği’nin 45. maddesi uyarınca, Fakülteniz {{$cap_bolum}} Bölümü’nde Çift Anadal Programı (ÇAP) kapsamında öğrenim görme talebimin kabul edilmesini
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
                            (İkinci Anadal taban puanı ile öğrencinin aldığı puanı gösteren belge (Başarı sıralaması ilk %20’ de bulunmayan öğrenciler için)
                          </p>
                    </td>
                  </tr>

                </tbody>
            </table>
            <br>



            <table style="margin-top:20px 0">
                <tr>
                    <p style="font-size:10px; margin-top:20px;">
                        Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği Bölümü’nde sorumlu olunan ders/dersler:
                    </p>
                  <th>
            </table>




                  <table style="margin:10px 0;">
                    <tr >
                        <th >
                            <p>İlgili Yönetmelikler</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">
                                (01/06/2016  tarih ve 29729 sayılı Resmi Gazete’de yayımlanan Kocaeli Üniversitesi Ön Lisans ve Lisans Eğitim ve Öğretim Yönetmeliği)
                            </p>
                        </td>
                    </tr>
                  </table>

                  <table style="margin:10px 0;">
                    <tr >
                        <th >
                            <p>Çift Anadal Programı</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding-left: 20px;font-size:8px;">
                                MADDE 45 – (1) Bir bölümün öğrencileri, lisans öğrenimleri boyunca aynı fakülte içinde veya dışında asıl bölümüne konu bakımından yakın olan başka bir lisans öğretimini aynı zamanda takip edebilir. Bununla ilgili esaslar Senato tarafından belirlenir.
                            </p>
                        </td>
                    </tr>
                  </table>



                  <table style="margin-top:10px">
                      <tr >
                          <th >
                            <p>
                            <a href="http://odb.kocaeli.edu.tr/dosyalar/yonetmelikler/Kou_cap_yonetmeligi.pdf">Kocaeli Üniversitesi Çift Anadal Programı (ÇAP) Yönetmeliği : </a>
                            http://odb.kocaeli.edu.tr/dosyalar/yonetmelikler/Kou_cap_yonetmeligi.pdf
                            </p>
                          </th>
                      </tr>
                    <tr >
                        <td >
                            <p style="padding-left: 20px;font-size:8px; margin-top:10px">
                                MADDE 6 (2) Başvuru anında anadal diploma programındaki GNO'su 4.00'1ük not sisteminde en az 3.00 olan ve anadal diploma programının ilgili sınıfında başarı sıralaması itibariyle ilk %20'sinde bulunan öğrenciler ikinci anadal programına başvurabilir.
                                c. Anadal diploma programındaki GNO'su en az 3.00 olan ancak anadal diploma programının ilgili sınıfında başarı sıralaması itibariyle en üst %20'sinde yer almayan öğrencilerden çift anadal yapılacak bölümün/programın ilgili yıldaki taban puanından az olmamak üzere puana sahip olanlar da ÇAP'a başvurabilirler.
                                <br>
                            </p>
                        </td>
                    </tr>
                  </table>
        </div>
    </div>
</body>
</html>
