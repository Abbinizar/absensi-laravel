@extends('layouts.header');
@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Evaluasi Kegiatan Harian</h4>
            <form method="post" action="{{url('exportDataKegiatan')}}">
              @csrf
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-9">
                      <input type="date" name="tgl_start" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Akhir</label>
                    <div class="col-sm-9">
                      <input type="date" name="tgl_end" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group row">
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-primary mr-2">Generate to Excel</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <button type="submit" class="btn btn-primary mr-2">Generate to Excel</button>
              <input type="date" name="tgl_start" placeholder="Tanggal Start">
              <input type="date" name="tgl_end" placeholder="Tanggal End"> -->
            </form>
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
                        <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#modalHapus">Hapus</button>
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
            
            <form class="forms-sample" action="{{url('ubahKegiatan')}}" method="post">
              {{csrf_field()}}
              <input type="text" name="id" hidden="true" readonly="" id="id">
              <div class="form-group">
                <label for="bulan">Bulan</label>
                <input type="date" class="form-control" id="bulan" name="bulan" placeholder="Bulan" required>
              </div>
              <div class="form-group">
                <label for="pekan">Pekan</label>
                <select class="form-control" id="pekan" name="pekan" required>
                  <option id="1" value="1">1</option>
                  <option id="2" value="2">2</option>
                  <option id="3" value="3">3</option>
                  <option id="4" value="4">4</option>
                  <option id="5" value="5">5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
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
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sumbangan">Membayar Sumbangan Pendidikan</label>
                <select class="form-control" id="pembayaran" name="pembayaran" required>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
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

    <div id="modalHapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="card-body">
            <h4 class="card-title">Hapus Kegiatan</h4>
            <p class="card-description">
              Apakah Anda Yakin Untuk Menghapus ??
            </p>
            
            <a href="{{url('hapusKegiatan')}}/{{$row['id']}}"><button type="submit" class="btn btn-danger mr-2">Hapus</button></a>
            <button class="btn btn-light">Batal</button>
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

    <script type="text/javascript">
      function setIsi($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n){
        $("#id").val($a);
        $("#bulan").val($b.substring(0, 10));
        $("#pekan").val($c);
        $("#nama").val($d);
        $("#jenis_kelamin").val($e);
        $("#id_pembina").val($f);
        $("#kode_grup").val($g);
        $("#kehadiran").val($h);
        $("#pembayaran").val($i);
        $("#sholat_berjamaah").val($j);
        $("#sholat_subuh").val($k);
        $("#tilawah").val($l);
        $("#puasa_sunnah").val($m);
        $("#sholat_malam").val($n);
      }
    </script>

  </div>
  <!-- main-panel ends -->
</div>
@endsection
