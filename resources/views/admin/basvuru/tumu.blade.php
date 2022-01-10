@extends('admin.layouts.app')

@section('content')

<style>
  body{
    background-color: white;

  }
  a{
    text-decoration: none;

  }


  .card{
    background-color: #ffffff12;
  }

  .card a{
    color:white;
  }

  .card-0:hover{
    box-shadow: 12px 12px 6px 2px #00000038;
    margin-top: 2px;
  }

h3,   p{
    color: #EEEEEE;
  }
  .card-1{
    background: #8946A6;
  }
  .card-2{
    background: #3FA796;
  }
  .card-3{
    background: #C996CC;
  }
  .card-4{
    background: #FF7777;
  }
  .card-5{
    background: #3B185F;
  }
</style>

<div class="container" >



    <div class="row justify-content-center" style="margin-top:10%;">


        <div class="col-md-12">
          <div class="card bg-dark">
              <div class="card-body">
                <h3>Merhaba {{Auth::user()->name;}}, Tüm başvuruları görüntülüyorsun.</h3>
                <p >PDF İkonuna tıklayarak gönderilen dosyları görüntüleyebilirsin.</p>

              </div>

          </div>
          <form class="form" action="{{route('pdfguncelle')}}" method="post">
            @csrf
            <select class="form-select mt-5"  name="durum" id="durum" required onclick="disab()">
                <option  selected>Seçili Kullanıcıların Durumlarını Güncelle</option>
                <option value="Onaylandı">Onaylandı</option>
                <option value="Beklemede">Beklemede</option>
                <option value="Red">Red</option>
            </select>
          <table class="table table-dark table-striped mt-5">
                <thead>
                  <tr>
                    <th scope="col"><input type="checkbox" id="tumu" onclick="tumuCheked()" > Tümünü Seç</th>
                    <th scope="col">Kullanıcı Adı</th>
                    <th scope="col">Başvuru Tipi</th>
                    <th scope="col">Durumu</th>
                    <th scope="col">Oluşturma Tarih</th>
                    <th scope="col">Görüntüle</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($basvurular as $basvuru)
                  <tr>
                    <th scope="row">
                      <input type="checkbox" class="pdf_id" name="pdf_id[]" onclick="disab()" value="{{$basvuru->_id}}">
                    </th>
                    <th scope="row">{{$basvuru->username}}</th>
                    <th scope="row">{{$basvuru->tipName}}</th>
                    <td>{{$basvuru->onay}}</td>
                    <td>{{$basvuru->created_at}}</td>
                    <td> <a href="/{{$basvuru->pdf_url}}" target="_blank"><i class="bi bi-file-earmark-pdf" style="color:white;"></i></a> </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>

                <input type="submit" name="submit" id="submit" value="Seçili Kullanıcıları Güncelle" disabled class="btn btn-primary">
              </form>

        </div>
    </div>
</div>

<script type="text/javascript">
      durum=document.getElementById('durum');
      submit=document.getElementById('submit');
      pdf_id=document.getElementsByClassName('pdf_id');


        function kontorol(pdf_id)
        {
          for (var i = 0; i < pdf_id.length; i++) {
            if(pdf_id[i].checked)
              return 1
          }

          return 0;

        };

      if(durum.selectedIndex!=0 && kontorol(pdf_id))
          submit.disabled=false;

      function disab(){
        durum=document.getElementById('durum');
        submit=document.getElementById('submit');
        pdf_id=document.getElementsByClassName('pdf_id');
        if(durum.selectedIndex!=0 && kontorol(pdf_id))
          submit.disabled=false;
        else
          submit.disabled=true;
      };

      function tumuCheked()
      {
        pdf_id=document.getElementsByClassName('pdf_id');
        tumu=document.getElementById('tumu');

        if(tumu.checked){
          for (var i = 0; i < pdf_id.length; i++) {
            pdf_id[i].checked=true;
          }
        }
        else{
          for (var i = 0; i < pdf_id.length; i++) {
            pdf_id[i].checked=false;
          }
        }
      };



</script>


@endsection
