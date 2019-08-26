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
                    <th>Action</th>
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
                    <td>
                      <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#myModal" onclick="setIsi(
                        '{{$row['id']}}',
                        '{{$row['name']}}',
                        '{{$row['email']}}',
                        '{{$row['jabatan']}}'
                      );">Edit</button>
                      <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#modalHapus">Hapus</button></td>
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

    {{-- Modal --}}

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="card-body">
            <h4 class="card-title">Edit Akun</h4>
            <p class="card-description">
              Edit Akun
            </p>
            <br>
            
            <form class="forms-sample" action="{{url('editUser')}}" method="post">
              {{csrf_field()}}
              <input type="text" name="id" hidden="true" readonly="" id="id">
              
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="password_confirmation">
              </div>

              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Jabatan</label>
                <SELECT id="jabatan" class="form-control" name="jabatan" required>
                  <option selected="true" disabled=""> -- select one -- </option>
                  <option value="1">Admin</option>
                  <option value="2">Pembina</option>
                  <option value="3">Member</option>
                </SELECT>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Ubah</button>
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
            <h4 class="card-title">Hapus Akun</h4>
            <p class="card-description">
              Apakah Anda Yakin Untuk Menghapus ??
            </p>
            
            <a href="{{url('hapusUser')}}/{{$row['id']}}"><button type="submit" class="btn btn-danger mr-2">Hapus</button></a>
            <button class="btn btn-light">Batal</button>
          </div>
        </div>
      </div>
    </div>

    {{-- End Of Modal --}}

    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 </span>
      </div>
    </footer>
    <!-- partial -->

    <script type="text/javascript">
      function setIsi($a, $b, $c, $d) {
        $("#id").val($a);
        $("#username").val($b);
        $("#email").val($c);
        $("#jabatan").val($d);
      }
    </script>

  </div>
  @endsection