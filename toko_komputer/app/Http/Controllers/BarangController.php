<?php

namespace App\Http\Controllers;

use App\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
        return view('pages.barang.data-barang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.barang.form-barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_invoice' => 'required|size:6|unique:barangs',
            'nama_barang' => 'required|min:3',
            'jenis_barang' => 'required',
            'berat_barang' => 'required',
            'warna_barang' => 'required',
            'gambar_barang' => 'required|file|image|max:1000'

        ]);

        // untuk menyimpan gambar yg diupload
        $file = $request->file('gambar_barang');
        $foto_barang = time() . "_" . $file->getClientOriginalName();

        // untuk menentukan tujuan folder setelah gambar diupload
        $tujuan_upload = 'gambar';
        $file->move($tujuan_upload, $foto_barang);
        barang::create([
            'no_invoice' => $request->no_invoice,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'berat_barang' => $request->berat_barang,
            'warna_barang' => $request->warna_barang,
            'gambar_barang' => $foto_barang,
        ]);
        // $request->session()->flash('pesan', "Data berhasil disimpan");
        return redirect('/barang')->with('status', 'Data Barang Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        return view('pages.barang.show-barang', ['barang' => $barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view('pages.barang.edit-barang', ['barang' => $barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        $validatedData = $request->validate([
            'barang' => 'required',
        ]);
        $barang = barang::find($barang);
        $barang->barang = $request->barang;
        $barang->save();
        $request->session()->flash('pesan', "Data {$validatedData['barang']} berhasil diupdate");
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        barang::destroy($barang->id_barang);
        return redirect('/barang')->with('status', 'Data Karyawan Berhasil Di Hapus');
    }
}
