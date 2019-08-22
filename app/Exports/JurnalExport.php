<?php

namespace App\Exports;

use App\Jurnal;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class JurnalExport implements FromView
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
    //     return Jurnal::query()->whereBetween('tanggal', [$this->tgl_start, $this->tgl_end]);
    // }

    public function view(): View
    {
        return view('exports.jurnal', [
            'data' => Jurnal::whereBetween('tanggal', [$this->tgl_start, $this->tgl_end])->get(),
        ]);
    }
}
