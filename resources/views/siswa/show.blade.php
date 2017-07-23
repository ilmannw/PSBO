@extends('template')

@section('main')
	<div id="siswa">

	<div class="row">
		<div class="col-md-6">
			<h2>Detail Siswa</h2>
		</div>
		<br>
		<div class="col-md-6">
			<button type="button" class="btn btn-primary hidden-print" id="print" style="float: right;"><i class="fa fa-print" aria-hidden="true"></i>	Print</button>
		</div>
	</div>
	<br>
		<table class="table table-striped">
			<tr>
				<th>Nama</th>
				<td>{{ $siswa->nama_siswa }}</td>
			</tr>
			<tr>
				<th>NISN</th>
				<td>{{ $siswa->nisn }}</td>
			</tr>
			<tr>
				<th>NIK</th>
				<td>{{ $siswa->nik }}</td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td>{{ $siswa->kelas['nama_kelas'] }}</td>
			<tr>
				<th>Jenis Kelamin</th>
				<td>{{ $siswa->jenis_kelamin }}</td>
			</tr>
			<tr>
				<th>Tempat Lahir</th>
				<td>{{ $siswa->tempat_lahir }}</td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td>{{ $siswa->tanggal_lahir->format('d-m-Y') }}</td>
			</tr>
			<tr>
				<th>Agama</th>
				<td>{{ $siswa->agama }}</td>
			</tr>
			<tr>
				<th>Kebutuhan Khusus</th>
				<td>{{ $siswa->kebutuhan_khusus }}</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td>{{ $siswa->alamat }}</td>
			</tr>
			<tr>
				<th>Jenis Tinggal</th>
				<td>{{ $siswa->jenis_tinggal }}</td>
			</tr>
			<tr>
				<th>Alat Transportasi</th>
				<td>{{ $siswa->alat_transportasi }}</td>
			</tr>
			<tr>
				<th>Nomor Telepon</th>
				<td>{{ $siswa->nomor_telepon }}</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>{{ $siswa->email }}</td>
			</tr>
			<tr>
				<th>Nomor KPS</th>
				<td>{{ $siswa->nomor_kps }}</td>
			</tr>
			<tr>
				<th>Status</th>
				<td>{{ $siswa->status }}</td>
			</tr>
			<tr>
				<th>Nama Ayah</th>
				<td>{{ $siswa->nama_ayah }}</td>
			</tr>
			<tr>
				<th>Nama Ibu</th>
				<td>{{ $siswa->nama_ibu }}</td>
			</tr>
			<tr>
				<th>Pendidikan Ayah</th>
				<td>{{ $siswa->pend_ayah }}</td>
			</tr>
			<tr>
				<th>Pendidikan Ibu</th>
				<td>{{ $siswa->pend_ibu }}</td>
			</tr>
			<tr>
				<th>Penghasilan Ayah</th>
				<td>Rp. {{ $siswa->penghasilan_ayah }}</td>
			</tr>
			<tr>
				<th>Penghasilan Ibu</th>
				<td>Rp. {{ $siswa->penghasilan_ibu }}</td>
			</tr>
			<tr>
				<th>Foto</th>
				<td>
					@if (isset($siswa->foto))
						<img src="{{ asset('fotoupload/' .$siswa->foto) }}">
					@else
						@if ($siswa->jenis_kelamin == 'L')
							<img src="{{ asset('fotoupload/dummymale.jpg') }}">
						@else
							<img src="{{ asset('fotoupload/dummyfemale.jpg') }}">
						@endif
					@endif
				</td>
			</tr>
		</table>
	</div>
@stop

@section('footer')
	@include('footer')
@stop