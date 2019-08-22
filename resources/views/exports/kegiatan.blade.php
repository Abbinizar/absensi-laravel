<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Tanggal</th>
            <th>Pekan</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>ID Pembina</th>
            <th>Kode Grup</th>
            <th>Kehadiran</th>
            <th>Pembayaran</th>
            <th>Sholat Berjamaah</th>
            <th>Sholat Subuh</th>
            <th>Tilawah</th>
            <th>Puasa Sunah</th>
            <th>Sholat Malam</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($data as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->bulan }}</td>
            <td>{{ $data->pekan }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->id_pembina }}</td>
            <td>{{ $data->kode_grup }}</td>
            <td>{{ $data->kehadiran }}</td>
            <td>{{ $data->pembayaran }}</td>
            <td>{{ $data->sholat_berjamaah }}</td>
            <td>{{ $data->sholat_subuh }}</td>
            <td>{{ $data->tilawah }}</td>
            <td>{{ $data->puasa_sunnah }}</td>
            <td>{{ $data->sholat_malam }}</td>
        </tr>
    @endforeach
    </tbody>
</table>