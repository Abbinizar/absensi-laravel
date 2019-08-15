@extends('layouts.header');
@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jurnal Pembelajaran</h4>
            <button type="submit" class="btn btn-primary mr-2">Generate to Excel</button>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
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
                    <th>Evaluasi Bacaan / Hafalan</th>
                    <th>Arahan Bimbingan</th>
                    <th>Tema dan Kesimpulan Pembelajaran</th>
                    <th>Pemberitahuan</th>
                    <th>Pembahasan Masalah</th>
                    <th>Rencana dan Evaluasi Program</th>
                    <th>Sumbangan Pendidikan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($jurnal as $row)
                  <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['tanggal']}}</td>
                    <td>{{$row['kode_grup']}}</td>
                    <td>{{$row['ketua_grup']}}</td>
                    <td>{{$row['pekan']}}</td>
                    <td>{{$row['kelas']}}</td>
                    <td>{{$row['jumlah_anggota']}}</td>
                    <td>{{$row['sakit']}}</td>
                    <td>{{$row['ijin']}}</td>
                    <td>{{$row['alpha']}}</td>
                    <td>{{$row['petugas_pembuka']}}</td>
                    <td>{{$row['evaluasi_bacaan']}}</td>
                    <td>{{$row['arahan_bimbingan']}}</td>
                    <td>{{$row['tema_kesimpulan']}}</td>
                    <td>{{$row['pemberitahuan']}}</td>
                    <td>{{$row['pembahasan']}}</td>
                    <td>{{$row['rencana_evaluasi']}}</td>
                    <td>{{$row['sumbangan']}}</td>
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
@endsection