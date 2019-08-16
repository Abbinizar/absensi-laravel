<?php

namespace App\Http\Controllers;

use App\Jurnal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal = Jurnal::all()->toArray();
        return view('data_jurnal', compact('jurnal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Jurnal::insert([
            "tanggal" => $request->tanggal, 
            "kode_grup" => $request->kode_grup, 
            "ketua_grup" => $request->ketua_grup, 
            "pekan" => $request->pekan, 
            "kelas" => $request->kelas, 
            "jumlah_anggota" => $request->jumlah_anggota, 
            "sakit" => $request->sakit, 
            "ijin" => $request->ijin, 
            "alpha" => $request->alpha, 
            "petugas_pembuka" => $request->petugas_pembuka, 
            "evaluasi_bacaan" => $request->evaluasi_bacaan, 
            "arahan_bimbingan" => $request->arahan_bimbingan, 
            "tema_kesimpulan" => $request->tema_kesimpulan, 
            "pemberitahuan" => $request->pemberitahuan, 
            "pembahasan" => $request->pembahasan, 
            "rencana_evaluasi" => $request->rencana_evaluasi, 
            "sumbangan" => $request->sumbangan
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
    public function export()
    {
        return Excel::download(new JurnalExport(), 'jurnal.xlsx');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function exportview()
    {
        return Excel::download(new JurnalExport(), 'jurnal.xlsx');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Jurnal $jurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurnal $jurnal)
    {
        //
    }
}
