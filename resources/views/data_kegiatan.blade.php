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
                    <th>Action</th>
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
                    <td>
                      <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#myModal" onclick="setIsi(
                        '{{$row['id']}}',
                        '{{$row['bulan']}}',
                        '{{$row['pekan']}}',
                        '{{$row['nama']}}',
                        '{{$row['jenis_kelamin']}}',
                        '{{$row['id_pembina']}}',
                        '{{$row['kode_grup']}}',
                        '{{$row['kehadiran']}}',
                        '{{$row['pembayaran']}}',
                        '{{$row['sholat_berjamaah']}}',
                        '{{$row['sholat_subuh']}}',
                        '{{$row['tilawah']}}',
                        '{{$row['puasa_sunnah']}}',
                        '{{$row['sholat_malam']}}');">Edit</button>
                        <a href="{{url('hapuskegiatan')}}/{{$row['id']}}"><button type="button" class="btn btn-danger btn-circle btn-sm">Hapus</button></a>
                      </td>
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

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="card-body">
            <h4 class="card-title">Evaluasi Kegiatan Harian</h4>
            <p class="card-description">
              Dilaporkan tiap pekan oleh Member
            </p>
            
            <form class="forms-sample" action="{{url('tambahkegiatan')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label for="bulan">Bulan</label>
                <input type="date" class="form-control" id="bulan" name="bulan" placeholder="Bulan" required>
              </div>
              <div class="form-group">
                <label for="pekan">Pekan</label>
                <select class="form-control" id="pekan" name="pekan" required>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pembina">ID Pembina</label>
                <input type="text" class="form-control" id="id_pembina" name="id_pembina" placeholder="ID Pembina" required>
              </div>
              <div class="form-group">
                <label for="kode">Kode Grup</label>
                <input type="text" class="form-control" id="kode_grup" name="kode_grup" placeholder="Kode Grup" required>
              </div>
              <div class="form-group">
                <label for="kehadiran">Kehadiran Kegiatan Belajar</label>
                <select class="form-control" id="kehadiran" name="kehadiran" required>
                  <option>Ya</option>
                  <option>Tidak</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sumbangan">Membayar Sumbangan Pendidikan</label>
                <select class="form-control" id="pembayaran" name="pembayaran" required>
                  <option>Ya</option>
                  <option>Tidak</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sholat">Shalat Berjamaah di Masjid</label>
                <input type="text" class="form-control" id="sholat_berjamaah" name="sholat_berjamaah" placeholder="Dalam 1 pekan, untuk wanita solat tepat waktu" required>
              </div>
              <div class="form-group">
                <label for="sholatsubuh">Shalat Subuh Berjamaah di Masjid</label>
                <input type="text" class="form-control" id="sholat_subuh" name="sholat_subuh" placeholder="Untuk wanita: Salat shubuh di awal waktu dalam 1 pekan" required>
              </div>
              <div class="form-group">
                <label for="tilawah">Tilawah Alquran</label>
                <input type="text" class="form-control" id="tilawah" name="tilawah" placeholder="Jumlah halaman yang dibaca dalam 1 pekan" required>
              </div>
              <div class="form-group">
                <label for="puasa">Puasa Sunnah</label>
                <input type="text" class="form-control" id="puasa_sunnah" name="puasa_sunnah" placeholder="Berapa kali dalam 1 bulan" required>
              </div>
              <div class="form-group">
                <label for="sholatmalam">Sholat Malam</label>
                <input type="text" class="form-control" id="sholat_malam" name="sholat_malam" placeholder="Berapa kali dalam 1 bulan" required>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Kirim</button>
              <button class="btn btn-light">Batal</button>
            </form>
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