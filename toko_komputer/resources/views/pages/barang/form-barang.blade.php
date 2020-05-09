@extends ('layout.master')
@section ('title','Form Barang')
@section ('formBarang','active')
@section ('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">FORM Barang</h1>
                    <hr>
                    <form action="/barang" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            {{-- <div class="col-md-3">
                                <div class="form-group">
                                    <label for="barang_id">Id Barang</label>
                                    <input type="text" class="form-control" id="barang_id"  placeholder="Masukan Id Barang" name="barang_id" value="{{ old('barang_id') }}">
                                    @error('barang_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="no_invoice">No Invoice</label>
                                    <input type="text" class="form-control" id="no_invoice"  placeholder="Masukan no invoice" name="no_invoice" value="{{ old('no_invoice') }}">
                                    @error('no_invoice')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang"  placeholder="nama Barang" name="nama_barang" value="{{ old('nama_barang') }}">
                                    @error('nama_barang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror                
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <select name="jenis_barang" id="jenis_barang" class="form-control">
                                        <option value="Monitor" {{ old('jenis_barang') == 'Monitor' ? 'selected' : '' }}>
                                            Monitor
                                        </option>
                                        <option value="Hard Disk" {{ old('jenis_barang') == 'Hard Disk' ? 'selected' : '' }}>
                                            Hard Disk
                                        </option>
                                        <option value="Ssd" {{ old('jenis_barang') == 'Ssd' ? 'selected' : '' }}>
                                            Ssd
                                        </option>
                                        <option value="Laptop" {{ old('jenis_barang') == 'Laptop' ? 'selected' : '' }}>
                                            Laptop
                                        </option>
                                        <option value="Mouse" {{ old('jenis_barang') == 'Mouse' ? 'selected' : '' }}>
                                            Mouse
                                        </option>
                                        <option value="Ram" {{ old('jenis_barang') == 'Ram' ? 'selected' : '' }}>
                                            Ram
                                        </option>
                                    </select>
                                    @error('jenis_barang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="berat_barang">Berat Barang</label>
                                    <input type="text" class="form-control" id="berat_barang"  placeholder="Berat barang" name="berat_barang" value="{{ old('berat_barang') }}">
                                    @error('berat_barang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="warna_barang">Warna</label>
                                    <input type="text" class="form-control" id="warna_barang"   placeholder="Masukan warna " name="warna_barang" value="{{ old('warna_barang') }}">
                                    @error('warna_barang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <form action="{{url('/barang')}}" method="POST" enctype="multipart/form-data">
                            @csrf --}}
                            <div class="form-group">
                                <label for="gambar_barang">Gambar Barang</label>
                                <input type="file" class="form-control-file" id="gambar_barang" name="gambar_barang">
                                @error('gambar_barang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        {{-- </form> --}}
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                        <a href="/barang" class="btn btn-outline-warning btn-sm">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection