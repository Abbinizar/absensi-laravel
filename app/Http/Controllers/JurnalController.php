<?php

namespace App\Http\Controllers;

use App\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\JurnalExport;
use App\Exports\KegiatanExport;
use Maatwebsite\Excel\Facades\Excel;

class JurnalController extends Controller
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

    public function edit(Request $request)
    {
        $data = Jurnal::where('id', '=', $request->id)->update([
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
            return back()->with('success','Data Berhasil Diubah !!!');
        } else {
            return back()->with('error','Data Gagal Diubah !!!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function exportJurnal(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");
        return Excel::download(new JurnalExport($request->tgl_start, $request->tgl_end), 'jurnal '.date('Y-m-d H.i').'.xlsx');
    }

    public function exportKegiatan(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");
        return Excel::download(new KegiatanExport($request->tgl_start, $request->tgl_end), 'kegiatan '.date('Y-m-d H.i').'.xlsx');
    }
    
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
    public function destroy($id)
    {
        $data = Jurnal::where('id', '=', $id)->delete();
        if ($data) {
            return back()->with('success','Data Berhasil Dihapus !!!');
        } else {
            return back()->with('error','Data Gagal Dihapus !!!');
        }
    }
}
