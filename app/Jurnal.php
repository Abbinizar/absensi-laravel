<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = 'jurnal';
    protected $fillable = ['id', 'tanggal', 'kode_grup', 'ketua_grup', 'pekan', 'kelas', 'jumlah_anggota', 'sakit', 'ijin', 'alpha', 'petugas_pembuka', 'evaluasi_bacaan', 'arahan_bimbingan', 'tema_kesimpulan', 'pemberitahuan', 'pembahasan', 'rencana_evaluasi', 'sumbangan'];
    public $timestamps = false;
}
