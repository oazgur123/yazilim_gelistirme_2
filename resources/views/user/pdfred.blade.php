@extends('layouts.app')

@section('content')

<style>
  body{
    background-color: white;
  }
</style>

<div class="container" >



    <div class="row justify-content-center" style="margin-top:10%;">


        <div class="col-md-12">
          <div class="card bg-dark">
              <div class="card-body">
                <h3>Merhaba {{Auth::user()->name;}}, Reddedilen başvuruları görüntülüyorsun.</h3>
                <p >PDF ikonuna tıklayarak gönderdiğin dosyları görüntüleyebilirsin.</p>


              </div>
          </div>
          <table class="table table-dark table-striped mt-5">
                <thead>
                  <tr>
                    <th scope="col">Başvuru Tip</th>
                    <th scope="col">Durumu</th>
                    <th scope="col">Oluşturma Tarih</th>
                    <th scope="col">Görüntüle</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pdfler as $pdf)
                  <tr>
                    <th scope="row">{{$pdf->tip}}</th>
                    <td>{{$pdf->onay}}</td>
                    <td>{{$pdf->created_at}}</td>
                    <td> <a href="/{{$pdf->pdf_url}}" target="_blank"><i class="bi bi-file-earmark-pdf" style="color:white;"></i></a> </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
        </div>
    </div>

    <div class="row justify-content-center mt-5" >
      <div class="col-md-6">
        <div class="card card-2 card-0 mb-5">
          <div class="card-body">
            <a href="{{ route('pdf_bekleme') }}"  ><i class="bi bi-circle-square"></i> Beklemede Olan Başvuruları Görüntüle</a><br><br>
            <p>Bu alanda sadece beklenen başvurular yer alacaktır. </p>
            <a href="{{ route('pdf_bekleme') }}"  >Görüntüle</a><br><br>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-3 card-0 mb-5">
          <div class="card-body">
            <a href="{{ route('pdf_onay') }}"  ><i class="bi bi-circle-square"></i> Onaylanan Başvuruları Görüntüle</a><br><br>
            <p>Bu alanda sadece onaylanan başvurular yer alacaktır. </p>
            <a href="{{ route('pdf_onay') }}"  >Görüntüle</a><br><br>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
