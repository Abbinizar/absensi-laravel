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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $berita = Berita::where('tgl_publish', '!=', '0000-00-00 00:00:00')->orderBy('id', 'desc')->get();
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
        $berita = Berita::orderBy('id', 'desc')->get();
        return view('data_berita', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = Berita::where('id', '=', $request->id)->update([
            "judul"         => $request->judul,
            "isi"           => $request->isi,
            "tgl_publish"   => $request->tgl_publish
        ]);
        if ($data) {
            return back()->with('success','Data Berhasil Diubah !!!');
        } else {
            return back()->with('error','Data Gagal Diubah !!!');
        }
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

    public function publish($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = Berita::where('id', '=', $id)->update([
            'tgl_publish' => date('Y:m:d H:i:s')
        ]);
        if ($data) {
            return back()->with('success','Data Berhasil Dihapus !!!');
        } else {
            return back()->with('error','Data Gagal Dihapus !!!');
        }
    }
}
