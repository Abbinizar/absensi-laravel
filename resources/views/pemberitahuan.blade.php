@extends('layouts.header');

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" style="margin: 10px;">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block" style="margin: 10px;">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block" style="margin: 10px;">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('info'))
        <div class="alert alert-info alert-block" style="margin: 10px;">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
        @endif
      </div>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Info Pemberitahuan</h4>
            <form class="forms-sample" action="{{url('tambahberita')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
              </div>
              <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi" rows="4" style="height: 100" required></input>
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