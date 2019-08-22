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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Level</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($user as $row)
                  <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>
                      @if($row['jabatan'] == 1)
                      Admin
                      @elseif($row['jabatan'] == 2)
                      Pembina
                      @else
                      Member
                      @endif
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