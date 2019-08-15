@extends('layouts.header');
@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Evaluasi Kegiatan Harian</h4>
            <button type="submit" class="btn btn-primary mr-2">Generate to Excel</button>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Pekan</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>ID Pembina</th>
                    <th>Kode Grup</th>
                    <th>Kehadiran Kegiatan Belajar</th>
                    <th>Membayar Sumbangan Pendidikan</th>
                    <th>Shalat Berjamaah di Masjid</th>
                    <th>Shalat Subuh Berjamaah di Masjid</th>
                    <th>Tilawah Alquran</th>
                    <th>Puasa Sunnah</th>
                    <th>Sholat Malam</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kegiatan as $row)
                  <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['bulan']}}</td>
                    <td>{{$row['pekan']}}</td>
                    <td>{{$row['nama']}}</td>
                    <td>{{$row['jenis_kelamin']}}</td>
                    <td>{{$row['id_pembina']}}</td>
                    <td>{{$row['kode_grup']}}</td>
                    <td>{{$row['kehadiran']}}</td>
                    <td>{{$row['pembayaran']}}</td>
                    <td>{{$row['sholat_berjamaah']}}</td>
                    <td>{{$row['sholat_subuh']}}</td>
                    <td>{{$row['tilawah']}}</td>
                    <td>{{$row['puasa_sunnah']}}</td>
                    <td>{{$row['sholat_malam']}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
@endsection