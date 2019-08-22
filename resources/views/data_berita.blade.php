@extends('layouts.header');
@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Berita Pemberitahuan</h4>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Publish</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($berita as $row)
                  <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['judul']}}</td>
                    <td>{{$row['isi']}}</td>
                    <td>{{$row['tgl_publish']}}</td>
                    <td>
                      <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#myModal" onclick="setIsi(
                      '{{$row['id']}}', '{{$row['judul']}}', '{{$row['isi']}}', '{{$row['tgl_publish']}}');">Edit</button>
                      <a href="{{url('publishBerita')}}/{{$row['id']}}"><button type="button" class="btn btn-primary btn-circle btn-sm">Publish</button></a>
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
            <h4 class="card-title">Hapus Berita</h4>
            <p class="card-description">
              Apakah Anda Yakin Untuk Menghapus ??
            </p>
            
            <a href="{{url('hapusBerita')}}/{{$row['id']}}"><button type="submit" class="btn btn-danger mr-2">Hapus</button></a>
            <button class="btn btn-light">Batal</button>
          </div>
        </div>
      </div>
    </div>

  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="card-body">
          <h4 class="card-title">Info Pemberitahuan</h4>
          <form class="forms-sample" action="{{url('ubahBerita')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="id" id="id" hidden="" readonly="">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
            </div>
            <div class="form-group">
              <label for="isi">Isi</label>
              <input type="text" class="form-control" id="isi" name="isi" rows="4" required></input>
            </div>
            <div class="form-group">
              <label for="isi">Tgl Publish</label>
              <input type="date" class="form-control" id="tgl_publish" name="tgl_publish" rows="4" required>
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
  <script type="text/javascript">
    function setIsi($a, $b, $c, $d){
      $('#id').val($a);
      $('#judul').val($b);
      $('#isi').val($c);
      $('#tgl_publish').val($d.substring(0, 10));
    }
  </script>
  <!-- partial -->
</div>
@endsection