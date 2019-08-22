<?php

namespace App\Exports;

use App\Kegiatan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KegiatanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function __construct(string $tgl_start, string $tgl_end)
    {
        $this->tgl_start = $tgl_start;
        $this->tgl_end = $tgl_end;
    }

    // public function query()
    // {
    //     return Kegiatan::query()->whereBetween('bulan', [$this->tgl_start, $this->tgl_end]);
    // }

    public function view(): View
    {
        return view('exports.kegiatan', [
            'data' => Kegiatan::whereBetween('bulan', [$this->tgl_start, $this->tgl_end])->get(),
        ]);
    }
}
