@extends('template')

@section('main')
	<div id="siswa">
		<h2>Siswa</h2>

		@include('_partial.flash_message')

		@include('siswa.form_pencarian')

		@if (!empty($siswa_list))
			<table class="table table-hover">
				<thead>
					<tr>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Status</th>
						<th>Tanggal Lahir</th>
						<th>JK</th>
						<th>Telepon</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($siswa_list as $siswa): ?>
						<tr>
							<td>{{ $siswa->nisn }}</td>
							<td>{{ $siswa->nama_siswa }}</td>
							<td>{{ $siswa->kelas['nama_kelas']}}</td>
							<td>
								@if ($siswa->status == "Aktif")
									<p style="color: green;">Aktif</p>
								@else
									<p style="color: red;">Tidak Aktif</p>
								@endif
							</td>
							<td>{{ $siswa->tanggal_lahir->format('d-m-Y') }}</td>
							<td>{{ $siswa->jenis_kelamin }}</td>
							<td>{{ $siswa->nomor_telepon }}</td>
							<td>
									<div class="box-button"> 
										{{ link_to('siswa/' . $siswa->id, 'Detail', ['class'=>'btn btn-info btn-sm']) }}
									</div>
								@if (Auth::check() && Auth::user()->level == 'admin')
									<div class="box-button"> 
										{{ link_to('siswa/' . $siswa->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
									</div>
									<div class="box-button">
										{!! Form::open(['method' => 'DELETE', 'action' => ['SiswaController@destroy', $siswa->id]]) !!}
										{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
										{!! Form::close() !!}
									</div>
								@endif

							</td>
							<div class=>
						</tr>	
					<?php endforeach ?>
				</tbody>
			</table>
		@else
			<p>Tidak ada data siswa</p>
		@endif

		<div class="table-nav">
			<div class="jumlah-data">
				<strong>Jumlah Siswa: {{ $jumlah_siswa }}</strong>
			</div>
			<div class="paging">
				{{ $siswa_list->links() }}
			</div>
		</div>

		@if (Auth::check() && Auth::user()->level == 'admin')
		
			<div class="btn-group">
				<div class="tombol-nav">
					<a href="siswa/create" class="btn btn-primary"> Tambah Siswa </a>
				</div>
			</div>

			<div class="btn-group dropdown">
				<div class="tombol-nav">
					<button type="button" class="excellButton excellButton-primary" data-toggle="dropdown" id="excellButton"><i class="fa fa-file-excel-o" aria-hidden="true"></i>	Excel<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="{{ url('getTemplate') }}">Download Template Excel</a></li>
						<li class="devider"></li>
						<li id="export-to-excel"><a href="{{ url('getExport') }}">Export Data Siswa</a></li>
						<li class="devider"></li>
						<li><a href="{{ url('getImport') }}">Import Data Siswa</a></li>
					</ul>
				</div>
			</div>

		@endif
		
	</div>
@stop

@section('footer')
	@include('footer')
@stop