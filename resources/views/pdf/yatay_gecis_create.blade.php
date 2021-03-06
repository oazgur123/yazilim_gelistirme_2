
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
            <h5 class="text-center">KOCAEL?? ??N??VERS??TES?? <br> YATAY GE?????? BA??VURU FORMU
            </h5>
        <p class="form-tipi">OGR-F-4</p>
        <div class="frame">
          <!--Ba??vuru T??r??-->
            <table >
                <thead>
                  <tr>
                    <th>
                      <p >  I- BASVURU T??R??</p>
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

              <!--Ki??isel Bilgiler-->

              <table >
                  <thead>
                    <tr>
                      <th>
                        <p >  II- K??????SEL B??LG??LER</p>
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
                           <p>T.C. K??ML??K NO:{{$tc}}</p>
                      </td>
                      <td>
                           <p>DO??UM TAR??H??: {{$dogum}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>E-POSTA ADRES??:{{$email}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>TEBL??GAT ADRES:{{$adres}}</p>
                      </td>
                    </tr>

                  </tbody>
                </table>



                <!--III- ????REN??M??NE ??L????K??N B??LG??LER-->

                <table >
                    <thead>
                      <tr>
                        <th>
                          <p >  III- ????REN??M??NE ??L????K??N B??LG??LER</p>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDU??U ??N??VERS??TE  : {{$uni}}</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDU??U FAK??LTE / Y??KSEKOKUL:{{$ogrenci_fakulte}}</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDU??U B??L??M / PROGRAM	:{{$ogrenci_bolum}}</p>
                        </td>
                      </tr>




                      <tr>
                        <td>
                          @if($ogrenim_turu=='1')
                          <p>
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px">
                          I.????RET??M
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                          II.????RET??M
                        </p>
                          @else
                          <p>
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                          I.????RET??M
                          <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px">
                          II.????RET??M
                          SINIF/ YARIYIL :{{$sinif}}
                        </p>
                          @endif
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>GENEL AKADEM??K BA??ARI NOT ORTALAMASI:{{$gortalama}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>????RENC?? NUMARASI (KOCAEL??  ??N??VERS??TES?? ????RENC??LER?? ??????N):{{$ogrenci_no}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDU??U Y??KSEK????RET??M KURUMUNA YERLE??T??R??LD?????? YIL:{{$yerlesme_yil}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLUNAN PROGRAMA YERLE??T??RMEDE KULLANILAN PUAN T??R?? VE PUANI	:{{$puan_turu}} / {{$puan}}</p>
                        </td>
                      </tr>


                    </tbody>
                  </table>


                  <!---IV ??? ADAYIN BA??VURDU??U Y??KSEK????RET??M PROGRAMINA ??L????K??N B??LG??LER-->


                  <!---IV ??? ADAYIN BA??VURDU??U Y??KSEK????RET??M PROGRAMINA ??L????K??N B??LG??LER-->


                  <table >
                      <thead>
                        <tr>
                          <th>
                            <p >IV ??? ADAYIN BA??VURDU??U Y??KSEK????RET??M PROGRAMINA ??L????K??N B??LG??LER</p>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                               <p>FAK??LTE / Y??KSEKOKUL/MYO.  ADI	: {{$ogrenci_fakulte}}  <p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                               <p>B??L??M / PROGRAM ADI: {{$basvuru_bolum}}</p>
                          </td>
                        </tr>


                        <tr>
                          <td>
                               <p>Beyan etti??im bilgilerin veya belgelerin ger??e??e ayk??r?? olmas?? veya daha ??nce yatay ge??i?? yapm???? olmam halinde hakk??mda cezai i??lemlerin y??r??t??lece??ini ve kayd??m yap??lm???? olsa dahi silinece??ini bildi??imi kabul ediyorum.</p>
                          </td>
                        </tr>

                        <tr>

                          <td>
                               <p>TAR??H??: {{date('d/m/y')}}</p>
                          </td>

                          <td>
                               <p>Aday??n Ad?? Soyad??: {{$name}}<br>??mzas??:</p>
                          </td>
                        </tr>

                      </tbody>
                    </table>

        </div>
    </div>
</body>
</html>
