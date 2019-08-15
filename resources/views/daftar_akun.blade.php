@extends('layouts.header');

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Akun</h4>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
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