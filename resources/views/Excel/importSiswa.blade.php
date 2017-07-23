@extends('template')

@section('main')
	<form action="postImport" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}" class="inputfile">
		<label class="control-label">Upload File *.xls, *.xlsx, *.csv</label>
		<input type="file" name="siswa" id="import" accept=".csv, .xls, .xlsx" multiple class="file">
			
	</form>

@stop
