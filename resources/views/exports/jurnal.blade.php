<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Tanggal</th>
            <th>Kode Grup</th>
            <th>Ketua Grup</th>
            <th>Pekan</th>
            <th>Kelas</th>
            <th>Jumlah Anggota</th>
            <th>Sakit</th>
            <th>Ijin</th>
            <th>Alpha</th>
            <th>Petugas Pembuka</th>
            <th>Evaluasi Bacaan</th>
            <th>Arahan Bimbingan</th>
            <th>Tema Kesimpulan</th>
            <th>Pemberitahuan</th>
            <th>Pembahasan</th>
            <th>Rencana Evaluasi</th>
            <th>Sumbangan</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($data as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->tanggal }}</td>
            <td>{{ $data->kode_grup }}</td>
            <td>{{ $data->ketua_grup }}</td>
            <td>{{ $data->pekan }}</td>
            <td>{{ $data->kelas }}</td>
            <td>{{ $data->jumlah_anggota }}</td>
            <td>{{ $data->sakit }}</td>
            <td>{{ $data->ijin }}</td>
            <td>{{ $data->alpha }}</td>
            <td>{{ $data->petugas_pembuka }}</td>
            <td>{{ $data->evaluasi_bacaan }}</td>
            <td>{{ $data->arahan_bimbingan }}</td>
            <td>{{ $data->tema_kesimpulan }}</td>
            <td>{{ $data->pemberitahuan }}</td>
            <td>{{ $data->pembahasan }}</td>
            <td>{{ $data->rencana_evaluasi }}</td>
            <td>{{ $data->sumbangan }}</td>
        </tr>
    @endforeach
    </tbody>
</table>