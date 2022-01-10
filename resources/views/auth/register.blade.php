@extends('layouts.app')

@section('content')
@php


    use App\Models\Bolumler;
    $fakulteler=Bolumler::get();
    $temp=null;



    $bolumler_array=array();
    $fakulteler_array=array();
    $temp="";
    $bolumler=Bolumler::get();

    foreach($bolumler as $bolum){
      array_push($bolumler_array,$bolum->bolum_adi);
      $fakulte=$bolum->fakulte;
      if($temp!=$fakulte)
        array_push($fakulteler_array,$fakulte);

      $temp=$fakulte;
    };

@endphp

<div class="container mt">
    <div class="row justify-content-center login_register">
        <div class="col-md-8">
        
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ad Soyad">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Posta Adresi">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="row mb-3">
                                <input id="ogrenci_no" type="text" class="form-control @error('ogrenci_no') is-invalid @enderror" name="ogrenci_no" min="9" max="9" value="{{ old('ogrenci_no') }}"  autocomplete="ogrenci_no" autofocus required placeholder="Öğrenci Numarası">

                                @error('ogrenci_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="row mb-3">

                                <input id="tc" type="text" class="form-control @error('tc') is-invalid @enderror" name="tc" min="11" max="11" value="{{ old('tc') }}"  autocomplete="ogrenci_no" autofocus required placeholder="TC veya Pasaport">

                                @error('tc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                                <input id="sinif" type="number" class="form-control @error('sinif') is-invalid @enderror" name="sinif" min="1" max="4" value="{{ old('sinif') }}"  autocomplete="ogrenci_no" autofocus required placeholder="Sınıf">

                                @error('sinif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">

                                <select id="ogrenci_fakulte" class="form-select  @error('ogrenci_fakulte') is-invalid @enderror" name="ogrenci_fakulte"  value="{{ old('ogrenci_fakulte') }}"  autocomplete="ogrenci_fakulte" autofocus required onclick="selected_fakulte();">
                                  <option >Fakulte Seçiniz</option>

                                @foreach($fakulteler as $fakulte)
                                @if($temp!=$fakulte->fakulte)
                                 <option value="{{$fakulte->fakulte}}">{{$fakulte->fakulte}}</option>
                                @endif
                                @php $temp=$fakulte->fakulte;  @endphp
                                @endforeach
                               </select>
                                @error('ogrenci_fakulte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="row mb-3">
                                <select id="ogrenci_bolum" class="form-select  @error('ogrenci_no') is-invalid @enderror" name="ogrenci_bolum"  value="{{ old('ogrenci_bolum') }}"  autocomplete="ogrenci_bolum" autofocus required>
                                  <option >Önce Fakülte Seçmeniz Gerekli</option>
                               </select>
                                @error('ogrenci_bolum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="row mb-3">
                                <input id="telefon_no" type="text" class="form-control @error('ogrenci_no') is-invalid @enderror" name="telefon_no" min="10" max="10" value="{{ old('telefon_no') }}"  autocomplete="telefon_no" autofocus required placeholder="Telefon Numarası">

                                @error('telefon_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="row mb-3">
                                <input id="dogum" type="date" class="form-control @error('dogum') is-invalid @enderror" name="dogum"  value="{{ old('dogum') }}"  autocomplete="dogum" autofocus required placeholder="Doğum Gününüz">

                                @error('dogum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>








                        <div class="row mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Şifre">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Şifre Onaylama">
                        </div>

                        <div class="row mb-0">
                                <button type="submit" class="btn btn-outline-primary" style="width:100%">
                                    {{ __('Kayıt Ol') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
  var strbolum = "{!!  implode(',',$bolumler_array) !!}";
  var strfakulte = "{!!  implode(',',$fakulteler_array) !!}";
  select_fakulte=document.getElementById('ogrenci_fakulte');
  select_bolum=document.getElementById('ogrenci_bolum');

  const bolumlerArray = strbolum.split(",");
  const fakultelerArray = strfakulte.split(",");
  const toplamArray=[];
  var j=-1;
  for (var i = 0; i < bolumlerArray.length; i++) {
    if(i%5==0)
      j++;
    toplamArray.push([bolumlerArray[i],fakultelerArray[j]]);
  };

  var fakulte_value=select_fakulte.value;
  var opt =null;
  function selected_fakulte(){
    if(select_fakulte.value!=fakulte_value )
    {
      select_bolum.innerHTML="";
      fakulte_value=select_fakulte.value;
      for (var i = 0; i < toplamArray.length; i++) {
        if(fakulte_value==toplamArray[i][1])
        {
          opt = document.createElement('option');
          opt.value = toplamArray[i][0];
          opt.innerHTML = toplamArray[i][0];
          select_bolum.appendChild(opt)
        }
      }
    }


  };



</script>
@endsection
