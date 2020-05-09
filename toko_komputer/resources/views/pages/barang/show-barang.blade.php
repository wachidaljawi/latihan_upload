@extends ('layout.master')
@section ('title','Show Barang')
@section ('showBarang','active')
@section ('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <div class="card mt-3">
                <div class="card-header text-center">
                   <b style="font-size:20px;"> Detail {{ $barang ['nama_barang'] }} </b>
                </div>
            </div>
            <ul class="list-group my-4">
                <li class="list-group-item">ID Barang : {{$barang['barang_id']}}</li>    
                <li class="list-group-item">No Invoice : {{$barang['no_invoice']}}</li>
                <li class="list-group-item">Nama Barang : {{$barang['nama_barang']}}</li>
                <li class="list-group-item">Jenis Barang : {{$barang['jenis_barang']}}</li>
                <li class="list-group-item">Berat Barang : {{$barang['berat_barang']}}</li>
                <li class="list-group-item">Warna Barang : {{$barang['warna_barang']}}</li>
                <li class="list-group-item">Gambar Barang : <img width="150px" src="{{ url ('/gambar/'. $barang->gambar_barang) }}"</li>
                {{-- @endforelse --}}
            </ul>
            <a href="/barang" class="btn btn-primary mb-2">Kembali</a>
        </div>
    </div>
</div>
@endsection