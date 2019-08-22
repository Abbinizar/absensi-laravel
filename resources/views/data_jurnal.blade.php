@extends('layouts.header');
@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jurnal Pembelajaran</h4>
            <form method="post" action="{{url('exportDataJurnal')}}">
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
            </form>
<!--               <input class="form-control col-2" type="date" name="tgl_start" placeholder="Tanggal Start">
  <input class="form-control col-2" type="date" name="tgl_end" placeholder="Tanggal End"> -->

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
          <th>Action</th>
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
          <td>
            <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#myModal" onclick="setIsi(
              '{{$row['id']}}',
              '{{$row['tanggal']}}',
              '{{$row['kode_grup']}}',
              '{{$row['ketua_grup']}}',
              '{{$row['pekan']}}',
              '{{$row['kelas']}}',
              '{{$row['jumlah_anggota']}}',
              '{{$row['sakit']}}',
              '{{$row['ijin']}}',
              '{{$row['alpha']}}',
              '{{$row['petugas_pembuka']}}',
              '{{$row['evaluasi_bacaan']}}',
              '{{$row['arahan_bimbingan']}}',
              '{{$row['tema_kesimpulan']}}',
              '{{$row['pemberitahuan']}}',
              '{{$row['pembahasan']}}',
              '{{$row['rencana_evaluasi']}}',
              '{{$row['sumbangan']}}');">Edit</button>
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

<div id="modalHapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card-body">
        <h4 class="card-title">Hapus Jurnal</h4>
        <p class="card-description">
          Apakah Anda Yakin Untuk Menghapus ??
        </p>

        <a href="{{url('hapusJurnal')}}/{{$row['id']}}"><button type="submit" class="btn btn-danger mr-2">Hapus</button></a>
        <button class="btn btn-light">Batal</button>
      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="card"> -->
        <div class="card-body">
          <h4 class="card-title">Jurnal Pembelajaran</h4>
          <p class="card-description">
            Dilaporkan tiap pekan oleh Pembina
          </p>
          <form class="forms-sample" action="{{url('ubahJurnal')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="id" id="id" hidden="" readonly="">
            <div class="form-group">
              <label for="bulan">Tanggal</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
              <label for="kode">Kode Grup</label>
              <input type="text" class="form-control" id="kode_grup" name="kode_grup" placeholder="Kode Grup" required>
            </div>
            <div class="form-group">
              <label for="ketua">Ketua Grup</label>
              <input type="text" class="form-control" id="ketua_grup" name="ketua_grup" placeholder="Ketua Grup" required>
            </div>
            <div class="form-group">
              <label for="pekan">Pekan</label>
              <select class="form-control" id="pekan" name="pekan" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="kelas">Kelas</label>
              <select class="form-control" id="kelas" name="kelas" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="form-group">
              <label for="anggota">Jumlah Anggota</label>
              <input type="text" class="form-control" id="jumlah_anggota" name="jumlah_anggota" placeholder="Jumlah anggota" required>
            </div>
            <div class="form-group">
              <label for="sakit">Sakit</label>
              <input type="text" class="form-control" id="sakit" name="sakit" placeholder="Sakit" required>
            </div>
            <div class="form-group">
              <label for="ijin">Ijin</label>
              <input type="text" class="form-control" id="ijin" name="ijin" placeholder="Ijin" required>
            </div>
            <div class="form-group">
              <label for="alpha">Alpha</label>
              <input type="text" class="form-control" id="alpha" name="alpha" placeholder="Alpha" required>
            </div>
            <div class="form-group">
              <label for="pembuka">Petugas Pembuka</label>
              <input type="text" class="form-control" id="petugas_pembuka" name="petugas_pembuka" placeholder="Petugas pembuka" required>
            </div>
            <div class="form-group">
              <label for="evaluasi">Evaluasi Bacaan / Hafalan</label>
              <textarea class="form-control" id="evaluasi_bacaan" name="evaluasi_bacaan" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="arahan">Arahan Bimbingan</label>
              <textarea class="form-control" id="arahan_bimbingan" name="arahan_bimbingan" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="tema">Tema dan Kesimpulan Pembelajaran</label>
              <textarea class="form-control" id="tema_kesimpulan" name="tema_kesimpulan" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="pemberitahuan">Pemberitahuan</label>
              <textarea class="form-control" id="pemberitahuan" name="pemberitahuan" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="pembahasan">Pembahasan Masalah</label>
              <textarea class="form-control" id="pembahasan" name="pembahasan" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="rencana">Rencana dan Evaluasi Program</label>
              <textarea class="form-control" id="rencana_evaluasi" name="rencana_evaluasi" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="sumbangan">Sumbangan Pendidikan</label>
              <input type="text" class="form-control" id="sumbangan" name="sumbangan" placeholder="Sumbangan pendidikan" required>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Save</button>
            <button type="button" class="btn btn-light">Batal</button>
          </form>
        </div>
      </div>
      <!-- </div> -->
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
    function setIsi($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18) {
      $('#id').val($1);
      $('#tanggal').val($2.substring(0, 10));
      $('#kode_grup').val($3);
      $('#ketua_grup').val($4);
      $('#pekan').val($5);
      $('#kelas').val($6);
      $('#jumlah_anggota').val($7);
      $('#sakit').val($8);
      $('#ijin').val($9);
      $('#alpha').val($10);
      $('#petugas_pembuka').val($11);
      $('#evaluasi_bacaan').val($12);
      $('#arahan_bimbingan').val($13);
      $('#tema_kesimpulan').val($14);
      $('#pemberitahuan').val($15);
      $('#pembahasan').val($16);
      $('#rencana_evaluasi').val($17);
      $('#sumbangan').val($18);
    }
  </script>

</div>
@endsection