
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
            <h5 class="text-center">KOCAELİ ÜNİVERSİTESİ <br> YATAY GEÇİŞ BAŞVURU FORMU
            </h5>
        <p class="form-tipi">OGR-F-4</p>
        <div class="frame">
          <!--Başvuru Türü-->
            <table >
                <thead>
                  <tr>
                    <th>
                      <p >  I- BASVURU TÜRÜ</p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=0; @endphp
                  @foreach($basvuru_turleri as $tur)
                  <tr>
                      <td >
                        <p>
                        @if($tur==$basvuruturu)
                            <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px">
                        @else
                            <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                        @endif
                       {{$tur}}<span></span></p>
                      </td>

                  @if($i%2==1)
                    </tr>
                  @endif

                  @php $i++; @endphp
                  @endforeach


                </tbody>
              </table>

              <!--Kişisel Bilgiler-->

              <table >
                  <thead>
                    <tr>
                      <th>
                        <p >  II- KİŞİSEL BİLGİLER</p>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                           <p>ADI SOYADI:{{$name}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>T.C. KİMLİK NO:{{$tc}}</p>
                      </td>
                      <td>
                           <p>DOĞUM TARİHİ: {{$dogum}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>E-POSTA ADRESİ:{{$email}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>TEBLİGAT ADRES:{{$adres}}</p>
                      </td>
                    </tr>

                  </tbody>
                </table>



                <!--III- ÖĞRENİMİNE İLİŞKİN BİLGİLER-->

                <table >
                    <thead>
                      <tr>
                        <th>
                          <p >  III- ÖĞRENİMİNE İLİŞKİN BİLGİLER</p>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU ÜNİVERSİTE  : {{$uni}}</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU FAKÜLTE / YÜKSEKOKUL:{{$ogrenci_fakulte}}</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU BÖLÜM / PROGRAM	:{{$ogrenci_bolum}}</p>
                        </td>
                      </tr>




                      <tr>
                        <td>
                          @if($ogrenim_turu=='1')
                          <p>
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px">
                          I.ÖĞRETİM
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                          II.ÖĞRETİM
                        </p>
                          @else
                          <p>
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                          I.ÖĞRETİM
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px">
                          II.ÖĞRETİM
                          SINIF/ YARIYIL :{{$sinif}}
                        </p>
                          @endif
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>GENEL AKADEMİK BAŞARI NOT ORTALAMASI:{{$gortalama}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>ÖĞRENCİ NUMARASI (KOCAELİ  ÜNİVERSİTESİ ÖĞRENCİLERİ İÇİN):{{$ogrenci_no}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU YÜKSEKÖĞRETİM KURUMUNA YERLEŞTİRİLDİĞİ YIL:{{$yerlesme_yil}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLUNAN PROGRAMA YERLEŞTİRMEDE KULLANILAN PUAN TÜRÜ VE PUANI	:{{$puan_turu}} / {{$puan}}</p>
                        </td>
                      </tr>


                    </tbody>
                  </table>


                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->


                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->


                  <table >
                      <thead>
                        <tr>
                          <th>
                            <p >IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER</p>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                               <p>FAKÜLTE / YÜKSEKOKUL/MYO.  ADI	: {{$ogrenci_fakulte}}  <p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                               <p>BÖLÜM / PROGRAM ADI: {{$basvuru_bolum}}</p>
                          </td>
                        </tr>


                        <tr>
                          <td>
                               <p>Beyan ettiğim bilgilerin veya belgelerin gerçeğe aykırı olması veya daha önce yatay geçiş yapmış olmam halinde hakkımda cezai işlemlerin yürütüleceğini ve kaydım yapılmış olsa dahi silineceğini bildiğimi kabul ediyorum.</p>
                          </td>
                        </tr>

                        <tr>

                          <td>
                               <p>TARİHİ: {{date('d/m/y')}}</p>
                          </td>

                          <td>
                               <p>Adayın Adı Soyadı: {{$name}}<br>İmzası:</p>
                          </td>
                        </tr>

                      </tbody>
                    </table>

        </div>
    </div>
</body>
</html>
