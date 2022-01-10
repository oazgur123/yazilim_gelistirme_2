@extends('admin.layouts.app')

@section('content')

<style >

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
                      <h2>Başvuru Listeleme</h2>
                      <p >Tüm Başvuruları görüntülemek, durumlarını değiştirmek için aşağıdaki linkleri kullanabilirsin.
                      </p>


                      <a href="{{route('admin_tumu')}}" class="btn-go mb-5" >Tüm Başvuruları Görüntüle</a>
                    </div>


                    <div class="card card-1 card-0 mb-5">
                      <div class="card-body">
                        <a href="/admin/listele/beklemede/4"  ><i class="bi bi-circle-square"></i>  Ders İntibakı</a><br><br>
                        <p>Ders intibakı; ders adı, ders kodu, dersin yarıyılı değişiklikleri, bir dersin başka bir ders ile değiştirilmesi, dersin kaldırılması ve yeni ders eklenmesi işlemleridir.</p>
                        <a href="/admin/listele/beklemede/4" class="btn-go" >Başvurulara Git</a><br><br>

                      </div>
                    </div>
                    <div class="card card-2 card-0 mb-5">
                      <div class="card-body">
                        <a href="/admin/listele/beklemede/2"  ><i class="bi bi-circle-square"></i> Yatay Geçiş</a><br><br>
                        <p>Yatay geçiş; bir öğrencinin kayıtlı olduğu üniversite programından başka bir üniversitenin benzer bir programına geçme işlemidir.</p>
                        <a href="/admin/listele/beklemede/2" class="btn-go"  >Başvurulara Git</a><br><br>

                      </div>
                    </div>
                    <div class="card card-3 card-0 mb-5">
                      <div class="card-body">
                        <a href="/admin/listele/beklemede/1"   ><i class="bi bi-circle-square"></i> Çap</a><br><br>
                        <p>Çift Anadal, öğrenim gördüğü önlisans ya da lisans programında üstün başarı gösteren öğrencilerin esas programlarına yakın içerikteki ikinci bir programdır.</p>
                        <a href="/admin/listele/beklemede/1" class="btn-go"  >Başvurulara Git</a><br><br>

                      </div>
                    </div>
                    <div class="card card-4 card-0 mb-5">
                      <div class="card-body">
                        <a href="/admin/listele/beklemede/5"   ><i class="bi bi-circle-square"></i> DGS</a><br><br>
                        <p>DGS'nin açılımı dikey geçiş sınavıdır. Ölçme, Seçme ve Yerleştirme Merkezi Başkanlığı'nın meslek yüksekokulları ile açık öğretim ön lisans programlarıdır.</p>
                        <a href="/admin/listele/beklemede/5" class="btn-go"  >Başvurulara Git</a><br><br>

                      </div>
                    </div>
                    <div class="card card-5 card-0 mb-5">
                      <div class="card-body">
                        <a href="/admin/listele/beklemede/3"   ><i class="bi bi-circle-square"></i> Yaz Ders Başvurusu</a>
                        <p>Yaz okulu; Bir yıl sonunda yaz ve güz döneminde başarısız olunan derslerin tekrardan alındığı döneme verilen isimdir.</p>
                        <a href="/admin/listele/beklemede/3" class="btn-go"  >Başvurulara Git</a><br><br>

                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
