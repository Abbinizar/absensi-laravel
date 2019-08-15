@extends('layouts.header');

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Selemat datang di web absensi</h4>
          </div>
        </div>
      </div>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Info Pemberitahuan</h4>
            <form class="forms-sample">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
              </div>
              <div class="form-group">
                <label for="isi">Isi</label>
                <textarea class="form-control" id="isi" name="isi" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Kirim</button>
              <button class="btn btn-light">Batal</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Info Pemberitahuan</h4>
            <form class="forms-sample">
              @foreach($berita as $row)
              <div class="form-group">
                <h4>{{$row['judul']}}</h4>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="isi" name="isi" rows="4">{{$row['isi']}}</textarea>
              </div>
              @endforeach
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