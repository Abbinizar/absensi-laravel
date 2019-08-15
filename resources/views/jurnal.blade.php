@extends('layouts.header');
@section('content')
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
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
							<button type="submit" class="btn btn-primary mr-2">Kirim</button>
							<button type="button" class="btn btn-light">Batal</button>
						</form>
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
<!-- main-panel ends -->
</div>
@endsection