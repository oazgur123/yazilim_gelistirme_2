@extends('layouts.app')

@section('content')
<style media="screen">
  p{
    color:#212529;
  }
</style>
<div class="container">
    <div class="row justify-content-center px-5 py-5">

        <h3 class="text-center bg-dark p-4" style="color:white;border-radius:20px;">{{$form['basvuru_name']}} Başvurusu</h3>
        <p class="mt-3"> <i class="bi bi-exclamation-circle"></i> Lütfen Öncelikle PDF Oluşturun oluşturduğunuz PDF Dosyasını imzalatıp alta bulunan PDF Yükle Formuna yükleyin.</p>
        <form class="form mt-5 p-5" action="{{ route($form['action']) }}" style="border:1px solid #ced4da; border-radius:20px;" method="post" enctype="{{$form['enctype']}}">
          @csrf
          @for($i=0;$i< count($form['inputs']) ; $i++)
            @php $input=$form['inputs'][$i]; @endphp
            <div class="mb-3">
             @if($input['label']!='0')
              <label for="{{$input['name']}}">{{$input['label']}}</label>
             @endif

              @if(!($input['type']=="select" || $input['type']=="checkbox" || $input['type'] == 'radio'))
                <input type="{{$input['type']}}" id="{{$input['name']}}" name="{{$input['name']}}" value="{{$input['value']}}" class="{{$input['classList']}}" required="{{$input['required']}}" max="{{$input['max']}}" min="{{$input['min']}}">
              @elseif($input['type']=="select")
                      @php if(isset($input['value_key']))
                        $value_key=$input['value_key'];
                      @endphp
                  @if(isset($input['ops']))
                    <select class="form-select" name="{{$input['name']}}">
                      @for($j=0;$j< count($input['ops']); $j++)
                        @if($value_key)
                        <option value="{{$input['ops'][$j]['value']}}" >{{$input['ops'][$j][$value_key]}}</option>
                        @else
                        <option value="{{$input['ops'][$j]}}" >{{$input['ops'][$j]}}</option>
                        @endif
                      @endfor

                    </select>
                  @endif
              @elseif($input['type']=="checkbox")
                  @if(isset($input['check']))
                  @php
                  if(isset($input['value_key']))
                    $value_key=$input['value_key'];
                   @endphp
                  <br><br>
                  @for($j=0;$j< count($input['check']); $j++)
                    <div class="mb-3">
                      @if($value_key)
                      <input type="{{$input['type']}}" id="check{{$j}}" name="{{$input['name']}}[]" value="{{$input['check'][$j][$value_key]}}" class="{{$input['classList']}}"  >
                      <label for="check{{$j}}">{{$input['check'][$j][$value_key]}}</label>
                      @else

                      <input type="{{$input['type']}}" id="check{{$j}}" name="{{$input['name']}}[]" value="{{$input['check'][$j]}}" class="{{$input['classList']}}"  >
                      <label for="check{{$j}}">{{$input['check'][$j]}}</label>
                      @endif
                    </div>
                  @endfor
                  @endif


             @elseif($input['type']=="radio")
                    @if(isset($input['radio']))
                    <br><br>
                    @for($j=0;$j< count($input['radio']); $j++)
                      <div class="mb-3">
                        <input type="{{$input['type']}}" id="check{{$j}}" name="{{$input['name']}}" value="{{$input['radio'][$j]}}" class="{{$input['classList']}}"  >
                        <label for="check{{$j}}">{{$input['radio'][$j]}}</label>
                      </div>
                    @endfor
                    @endif
               @endif
            </div>
          @endfor
        </form>



        <form class="form mt-5 bg-dark p-5" style="border-radius:20px;box-shadow: 12px 12px 6px 2px #00000038; " action="{{route('upload_pdf')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="mb-5">
            <label for="" style="color:white" class="mb-3">Dosya Yükle</label>
            <input type="hidden" name="tip" value="{{$form['tip_id']}}">
            <p style="color:#EEEEEE"><i class="bi bi-exclamation-circle"></i> Lütfen indirmiş olduğunuz başvuruyu imzalayarak yükleyin. Aksi halde başvurunuz değerlendirilmeye alınmayacaktır.</p>
            <input type="file" name="file" value="" class="form-control">
          </div>

          <button type="submit" name="button" class="btn btn-primary">Başvuru Yükle</button>
        </form>


    </div>
</div>
@endsection
