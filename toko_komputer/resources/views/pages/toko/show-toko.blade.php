@extends ('layout.master')
@section ('title','Show Toko')
@section ('showToko','active')
@section ('content')
<div class="content-wrapper">
        <div class="content">
            <div class="container">
                <div class="card mt-3">
                    <div class="card-header text-center">
                       <b style="font-size:20px;"> Detail {{ $toko ['nama_toko'] }} </b>
                    </div>
                </div>
                <ul class="list-group my-4">
                    <li class="list-group-item">ID Toko : {{$toko['id']}}</li>    
                    <li class="list-group-item">No Izin Usaha : {{$toko['no_izin_usaha']}}</li>
                    <li class="list-group-item">Nama Toko : {{$toko['nama_toko']}}</li>
                    <li class="list-group-item">Pemilik Toko : {{$toko['pemilik_toko']}}</li>
                    <li class="list-group-item">Alamat Toko : {{$toko['alamat_toko']}}</li>
                    
                </ul>
                <a href="/toko" class="btn btn-primary mb-2">Kembali</a>
            </div>
        </div>
    </div>
    @endsection