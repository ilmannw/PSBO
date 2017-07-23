<div id="pencarian">
	{!! Form::open(['url' => '/cari', 'method' => 'get', 'id' => 'form-pencarian']) !!}
		<div class="row">
			<div class="col-md-4">
				{!! Form::select('id_kelas', $list_kelas, (!empty($id_kelas) ? $id_kelas : null), ['id' => 'id_kelas', 'class' => 'form-control', 'placeholder'=> '-Kelas-']) !!}
			</div>

			<div class="col-md-8">
				<div class="input-group">
					{!! Form:: text('kata_kunci', (!empty($kata_kunci)) ? $kata_kunci : null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Siswa']) !!}
					<span class="input-group-btn">
						{!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
					</span>
				</div>
			</div>
		</div>
	{!!	Form::close() !!}
</div>