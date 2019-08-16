@extends('layouts.header');
@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jurnal Pembelajaran</h4>
            <a href="{{route('jurnal.exportview')}}" class="btn btn-primary mr-2">Generate to Excel</a>
            
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
                        <a href="{{url('hapusjurnal')}}/{{$row['id']}}"><button type="button" class="btn btn-danger btn-circle btn-sm">Hapus</button></a>
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
          <!-- <div class="card"> -->
            <div class="card-body">
              <h4 class="card-title">Jurnal Pembelajaran</h4>
              <p class="card-description">
                Dilaporkan tiap pekan oleh Pembina
              </p>
              <form class="forms-sample" action="{{url('tambahjurnal')}}" method="post">
                {{csrf_field()}}
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
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <select class="form-control" id="kelas" name="kelas" required>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
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
  </div>
  @endsection