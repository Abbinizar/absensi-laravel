<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
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
        $kegiatan = Kegiatan::all()->toArray();
        return view ('data_kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Kegiatan::insert([
            "bulan" => $request->bulan, 
            "pekan" => $request->pekan, 
            "nama" => $request->nama, 
            "jenis_kelamin" => $request->jenis_kelamin, 
            "id_pembina" => $request->id_pembina, 
            "kode_grup" => $request->kode_grup, 
            "kehadiran" => $request->kehadiran, 
            "pembayaran" => $request->pembayaran, 
            "sholat_berjamaah" => $request->sholat_berjamaah, 
            "sholat_subuh" => $request->sholat_subuh, 
            "tilawah" => $request->tilawah, 
            "puasa_sunnah" => $request->puasa_sunnah, 
            "sholat_malam" => $request->sholat_malam, 
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
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = Kegiatan::where('id', '=', $request->id)->update([
            "bulan" => $request->bulan, 
            "pekan" => $request->pekan, 
            "nama" => $request->nama, 
            "jenis_kelamin" => $request->jenis_kelamin, 
            "id_pembina" => $request->id_pembina, 
            "kode_grup" => $request->kode_grup, 
            "kehadiran" => $request->kehadiran, 
            "pembayaran" => $request->pembayaran, 
            "sholat_berjamaah" => $request->sholat_berjamaah, 
            "sholat_subuh" => $request->sholat_subuh, 
            "tilawah" => $request->tilawah, 
            "puasa_sunnah" => $request->puasa_sunnah, 
            "sholat_malam" => $request->sholat_malam, 
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
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kegiatan::where('id', '=', $id)->delete();
        if ($data) {
            return back()->with('success','Data Berhasil Dihapus !!!');
        } else {
            return back()->with('error','Data Gagal Dihapus !!!');
        }
    }
}
