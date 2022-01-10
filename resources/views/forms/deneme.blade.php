@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <a href="{{ route($form['action']) }}">Deneme</a>
      @for($i=0;$i< count($form['inputs']) ; $i++)
      @php $input=$form['inputs'][$i]; @endphp
        {{ $input['name'] }}
      @endfor
    </div>
</div>
@endsection
