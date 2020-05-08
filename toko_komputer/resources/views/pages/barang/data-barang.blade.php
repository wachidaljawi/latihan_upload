@extends ('layout.master')
@section ('title','Data Barang')
@section ('dataBarang','active')
@section ('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h3>TABEL BARANG</h3>
                    <a href="/barang/create" class="btn btn-info my-3">Tambah Data Barang</a>
        
                    @if (session('status'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('status') }}
                        </div>
                    @endif
        
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id Barang</th>
                                <th scope="col">No Invoice</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">Berat Barang</th>
                                <th scope="col">Warna Barang</th>
                                <th scope="col">Gambar Barang</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $data)
                                <tr>
                                    <td><a href="/barang/{{ $data->barang_id }}">{{ $data->barang_id }}</a></td>
                                    <td>{{ $data->no_invoice }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->jenis_barang }}</td>
                                    <td>{{ $data->berat_barang }}</td>
                                    <td>{{ $data->warna_barang }}</td>
                                    <td>{{ $data->gambar_barang}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-3">
                                                <form action="{{ route ('barang.edit', $data->barang_id) }}" method="GET">
                                                    @csrf
                                                    @method('Patch')
                                                    <button type="submit" class="btn btn-warning btn-sm mb-2">Edit</button>
                                                </form>
                                            </div>
                                            <div class="col-3">
                                                <form action="{{ route ('barang.destroy', $data->barang_id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection