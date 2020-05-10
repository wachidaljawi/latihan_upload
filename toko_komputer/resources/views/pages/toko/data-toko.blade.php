@extends ('layout.master')
@section ('title','Data Toko')
@section ('dataToko','active')
@section ('content')
<div class="content-wrapper">
        <section class="content">
            <div class="container bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h3>TABEL Toko</h3>
                        <a href="/toko/create" class="btn btn-info my-3">Tambah Data Toko</a>
            
                        @if (session('status'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('status') }}
                            </div>
                        @endif
            
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">No Izin Usaha</th>
                                    <th scope="col">Nama Toko</th>
                                    <th scope="col">Pemilik Toko</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($toko as $data)
                                    <tr>
                                        <td>{{ $data->id }}</a></td>
                                        <td><a href="/toko/{{ $data->id }}">{{ $data->no_izin_usaha }}</a></td>
                                        <td>{{ $data->nama_toko }}</td>
                                        <td>{{ $data->pemilik_toko }}</td>
                                        <td>{{ $data->alamat_toko }}</td>
                                        
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <form action="{{ route ('toko.edit', $data->id) }}" method="GET">
                                                        @csrf
                                                        @method('Patch')
                                                        <button type="submit" class="btn btn-warning btn-sm btn-block mb-2">Edit</button>
                                                    </form>
                                                </div>
                                                <div class="col">
                                                    <form action="{{ route ('toko.destroy', $data->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm btn-block">Delete</button>
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