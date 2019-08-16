<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all()->toArray();
        return view('berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Berita::insert([
            "judul" => $request->judul,
            "isi" => $request->isi
        ]);
        if ($data) {
            return back()->with('success','Data Berhasil Ditambahkan !!!');
        } else {
            return back()->with('error','Data Gagal Ditambahkan !!!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        $berita = Berita::all()->toArray();
        return view('data_berita', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Berita::where('id', '=', $request->id)->update([
            "judul" => $request->judul,
            "isi" => $request->isi
        ]);
        if ($data) {
            return back()->with('success','Data Berhasil Diubah !!!');
        } else {
            return back()->with('error','Data Gagal Diubah !!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::where('id', '=', $id)->delete();
        if ($data) {
            return back()->with('success','Data Berhasil Dihapus !!!');
        } else {
            return back()->with('error','Data Gagal Dihapus !!!');
        }
    }
}
