		@if(isset($siswa))
            {!! Form::hidden('id', $siswa->id) !!}
        @endif

        <div class="page-header form-group">
  			<h2><small>Data Siswa</small></h2>
		</div>


		<!-- Nama siswa -->	

			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('nama_siswa') ? 'has-error' : 'has-success' }}"> 
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nama_siswa', 'Nama:', ['class' => 'control-label']) !!} 
				{!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
				@if($errors->has('nama_siswa'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('nama_siswa') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

		<!-- NISN -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('nisn') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nisn', 'NISN:', ['class' => 'control-label']) !!}
				{!! Form::text('nisn', null, ['class' => 'form-control']) !!}
				@if($errors->has('nisn'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('nisn') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- NIK -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('nik') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nik', 'NIK:', ['class' => 'control-label']) !!}
				{!! Form::text('nik', null, ['class' => 'form-control']) !!}
				@if($errors->has('nik'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('nik') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

		<!-- kelas -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('id_kelas') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('id_kelas', 'Kelas:', ['class' => 'control-label']) !!}
				@if(count($list_kelas) > 0)
					{!! Form::select('id_kelas', $list_kelas, null, ['class' => 'form-control', 'id' => 'id_kelas', 'placeholder' => 'Pilih Kelas']) !!}
				@else
					<p>Tidak ada pilihan kelas</p>

				@endif

				@if($errors->has('id_kelas'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('id_kelas') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

		<!-- JK -->
			@if ($errors->any())
				<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
				<div class="radio">
					<label>{!! Form::radio('jenis_kelamin', 'L') !!}Laki-laki</label>
				</div>
				<div class="radio">
					<label>{!! Form::radio('jenis_kelamin', 'P') !!}Perempuan</label>
				</div>
				@if($errors->has('jenis_kelamin'))
					<span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
				@endif
			</div>
		<!-- Tempat Lahir -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('tempat_lahir') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('tempat_lahir', 'Tempat Lahir:', ['class' => 'control-label']) !!}
				{!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
				@if($errors->has('tempat_lahir'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('tempat_lahir') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Tanggal Lahir -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('tanggal_lahir') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label']) !!}
				{!! Form::date('tanggal_lahir', !empty($siswa) ? $siswa->tanggal_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
				@if($errors->has('tanggal_lahir'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Agama -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('agama') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('agama', 'Agama:', ['class' => 'control-label']) !!}
				{!! Form::text('agama', null, ['class' => 'form-control']) !!}
				@if($errors->has('agama'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('agama') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Kebutuhan Khusus -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('kebutuhan_khusus') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('kebutuhan_khusus', 'Kebuthan Khusus:', ['class' => 'control-label']) !!}
				{!! Form::text('kebutuhan_khusus', null, ['class' => 'form-control']) !!}
				@if($errors->has('kebutuhan_khusus'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('kebutuhan_khusus') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Alamat -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('alamat') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('alamat', 'Alamat:', ['class' => 'control-label']) !!}
				{!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}

                @if($errors->has('alamat'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('alamat') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Jenis Tinggal -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('jenis_tinggal') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('jenis_tinggal', 'Jenis Tinggal:', ['class' => 'control-label']) !!}
				{!! Form::text('jenis_tinggal', null, ['class' => 'form-control']) !!}
				@if($errors->has('jenis_tinggal'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('jenis_tinggal') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Alat Transportasi -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('alat_transportasi') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('alat_transportasi', 'Alat Transportasi:', ['class' => 'control-label']) !!}
				{!! Form::text('alat_transportasi', null, ['class' => 'form-control']) !!}
				@if($errors->has('alat_transportasi'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('alat_transportasi') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Nomor Telepon -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('nomor_telepon') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nomor_telepon', 'Nomor Telepon:', ['class' => 'control-label']) !!}
				{!! Form::number('nomor_telepon', null, ['class' => 'form-control']) !!}
				@if($errors->has('nomor_telepon'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('nomor_telepon') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- Email -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
				{!! Form::email('email', null, ['class' => 'form-control']) !!}
				@if($errors->has('email'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('email') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>
		<!-- No KPS -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('nomor_kps') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nomor_kps', 'Nomor KPS:', ['class' => 'control-label']) !!}
				{!! Form::text('nomor_kps', null, ['class' => 'form-control']) !!}
				@if($errors->has('nomor_kps'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('nomor_kps') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

		<!-- status -->
			@if ($errors->any())
				<div class="form-group {{ $errors->has('status') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
				<div class="radio">
					<label>{!! Form::radio('status', 'Aktif') !!}Aktif</label>
				</div>
				<div class="radio">
					<label>{!! Form::radio('status', 'Tidak Aktif') !!}Tidak Aktif</label>
				</div>
				@if($errors->has('status'))
					<span class="help-block">{{ $errors->first('status') }}</span>
				@endif
			</div>

			<div class="page-header form-group">
  				<h2><small>Data Wali</small></h2>
			</div>


		<!-- Nama Wali -->
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('nama_ayah') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nama_ayah', 'Nama Ayah:', ['class' => 'control-label']) !!}
				{!! Form::text('nama_ayah', null, ['class' => 'form-control']) !!}
				@if($errors->has('nama_ayah'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('nama_ayah') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('nama_ibu') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nama_ibu', 'Nama Ibu:', ['class' => 'control-label']) !!}
				{!! Form::text('nama_ibu', null, ['class' => 'form-control']) !!}
				@if($errors->has('nama_ibu'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('nama_ibu') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif	
			</div>

			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('pend_ayah') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
  				{!! Form::label('pend_ayah', 'Pendidikan Ayah:', ['class' => 'control-label']) !!}
			  	{!! Form::select('pend_ayah', ['SD'=>'Sekolah Dasar', 'SMP'=>'Sekolah Menengah Pertama', 'SMA'=>'Sekolah Menengah Atas', 'S1'=>'Strata 1', 'S2'=>'Strata 2', 'S3'=> 'Strata 3'], null, ['placeholder' => 'Pilih salah satu...', 'class'=>'form-control']) !!}
			  	@if($errors->has('pend_ayah'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('pend_ayah') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

			
			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('pend_ibu') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
  				{!! Form::label('pend_ibu', 'Pendidikan Ibu:', ['class' => 'control-label']) !!}
			  	{!! Form::select('pend_ibu', ['SD'=>'Sekolah Dasar', 'SMP'=>'Sekolah Menengah Pertama', 'SMA'=>'Sekolah Menengah Atas', 'S1'=>'Strata 1', 'S2'=>'Strata 2', 'S3'=> 'Strata 3'], null, ['placeholder' => 'Pilih salah satu...', 'class'=>'form-control']) !!}
			  	@if($errors->has('pend_ibu'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>   
					<span class="help-block">{{ $errors->first('pend_ibu') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('penghasilan_ayah') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('penghasilan_ayah', 'Penghasilan Ayah:', ['class' => 'control-label']) !!}
				{!! Form::text('penghasilan_ayah', null, ['class' => 'form-control']) !!}
				@if($errors->has('penghasilan_ayah'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('penghasilan_ayah') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
			</div>

			@if ($errors->any())
				<div class="form-group has-feedback {{ $errors->has('penghasilan_ibu') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('penghasilan_ibu', 'Penghasilan Ibu:', ['class' => 'control-label']) !!}
				{!! Form::text('penghasilan_ibu', null, ['class' => 'form-control']) !!}
				@if($errors->has('penghasilan_ibu'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					<span class="help-block">{{ $errors->first('penghasilan_ibu') }}</span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
				@endif
				</div>

			@if ($errors->any())
				<div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('foto', 'Foto:') !!}
				<input type="file" name="foto11" class="file" accept="image/*" id="foto11">
				@if ($errors->has('foto'))
					<span class="help-block">{{ $errors->first('foto') }}</span>
				@endif
			</div>

			<div class="form-group">
				{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
			</div>