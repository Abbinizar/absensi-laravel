@extends('layouts.header');

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Info Pemberitahuan</h4>
          </div>
        </div>
      </div>
      @foreach($berita as $row)
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample">
              <div class="form-group">
                <h4>{{$row['judul']}}</h4>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="isi" name="isi" rows="10" disabled>{{$row['isi']}}</textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach
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