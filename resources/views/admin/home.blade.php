@extends('admin.layouts.app')

@section('content')

<style>

</style>


<div class="container" >
    <div class="row justify-content-center" style="margin-top:10%;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif



                    <div class=" bg-dark p-4 mb-5" style="border-radius:10px">
                      <h3>Merhaba {{Auth::user()->name;}}, Admin paneline hoşgeldin.</h3>
                      <p >Tüm Başvuruları görüntülemek, durumlarını değiştirmek, için aşağıdaki linkleri kullanabilirsin.</p>
                    </div>

                    <div class="card card-1 card-0 my-5">
                      <div class="card-body">
                        <a href="{{ route('admin_basvurular') }}"  ><i class="bi bi-circle-square"></i>  Başvuruları Görüntüle</a><br><br>
                        <p>Tüm Başvuruları görüntülemek ve durumlarını değiştirmek için kullanabilirsin.</p>
                        <a href="{{ route('admin_basvurular') }}" class="btn-go"  >Başvurulara Git</a><br><br>

                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
