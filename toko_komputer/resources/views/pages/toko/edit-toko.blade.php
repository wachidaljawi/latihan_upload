@extends ('layout.master')
@section ('title','Edit Toko')
@section ('edit_toko','active')
@section ('content')

<div class="content-wrapper">
        <div class="content">
            <div class="container bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Form Toko</h1>
                        <hr>
                    <form action="/toko/{{$toko->id}}" method="post">
                        @csrf
                        @method('Patch')
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="no_izin_usaha">No Izin Usaha</label>
                                        <input type="text" class="form-control" id="no_izin_usaha"  placeholder="Masukan no izin usaha" name="no_izin_usaha" readonly value="{{ $toko->no_izin_usaha }}">
                                        @error('no_izin_usaha')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="nama_toko">Nama Toko</label>
                                        <input type="text" class="form-control" id="nama_toko"  placeholder="nama Toko" name="nama_toko" value="{{ $toko->nama_toko }}">
                                        @error('nama_toko')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror                
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pemilik_toko">Pemilik Toko</label>
                                        <input type="text" class="form-control" id="pemilik_toko"  placeholder="pemilik toko" name="pemilik_toko" value="{{ $toko->pemilik_toko }}">
                                        @error('pemilik_toko')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat_toko">Alamat</label>
                                        <textarea name="alamat_toko" id="alamat_toko"  placeholder="Masukan Alamat Anda" rows="3" class="form-control">{{ $toko->alamat_toko }}</textarea>
                                        @error('alamat_toko')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                            <a href="/toko" class="btn btn-outline-warning btn-sm">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection