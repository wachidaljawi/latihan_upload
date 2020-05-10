<?php

namespace App\Http\Controllers;

use App\toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = toko::all();
        return view('pages.toko.data-toko', ['toko' => $toko]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.toko.form-toko');
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
            'nama_toko' => 'required|min:3',
            'pemilik_toko' => 'required|min:3',
            'no_izin_usaha' => 'required|size:6|unique:tokos',
            'alamat_toko' => 'required',

        ]);
        toko::create($validatedData);
        return redirect('/toko')->with('status', "Data {$validatedData['no_izin_usaha']} berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(toko $toko)
    {
        return view('pages.toko.show-toko', ['toko' => $toko]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(toko $toko)
    {
        return view('pages.toko.edit-toko', ['toko' => $toko]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, toko $toko)
    {
        toko::where('id', $toko->id)
            ->update([

                'nama_toko' => $request->nama_toko,
                'pemilik_toko' => $request->pemilik_toko,
                'alamat_toko' => $request->alamat_toko,

            ]);
        return redirect('/toko')->with('status', "Data toko berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(toko $toko)
    {
        toko::destroy($toko->id);
        return redirect('/toko')->with('status', 'Data Toko Berhasil Di Hapus');
    }
}
