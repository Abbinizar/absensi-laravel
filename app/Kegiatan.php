<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
	protected $table = 'kegiatan';
    protected $fillable = ['id', 'bulan', 'pekan', 'nama', 'jenis_kelamin', 'id_pembina', 'kode_grup', 'kehadiran', 'pembayaran', 'sholat_berjamaah', 'sholat_subuh', 'tilawah', 'puasa_sunnah', 'sholat_malam'];
}
