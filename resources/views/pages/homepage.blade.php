@extends('template')

@section('main')
	<div id="homepage">
	
	<br>
	<br>
		<div class="row">
			<div class="col-md-6">
				<img src="http://icon-icons.com/icons2/550/PNG/512/business-color_badge_icon-icons.com_53477.png">
			</div>
			<div class="col-md-6">
				<br>
				<h1>Selamat Datang!</h1>
				<br>
				<h3>Cara menggunakan PDS :</h4>
				<br>
				<h4 style="line-height: 150%;">1. Silahkan <a href="{{ url('/login') }}"> login </a> menggunakan akun Anda yang telah terdaftar.</h4>
				<h4 style="line-height: 150%;">2. Jika belum terdaftar, silahkan hubungi operator sekolah untuk mendaftar.</h4>
				<h4 style="line-height: 150%;">3. Anda dapat menggunakan fitur pencarian untuk mendapatkan data lebih cepat.</h4>
				<h4 style="line-height: 150%;">4. Informasi lebih lanjut, silahkan hubungi operator sekolah.</h4>
			</div>
		</div>
	</div>
@stop

@section('footer')
	<div id="footer">
		<p>&copy; 2016 laravelapp.dev</p>
	</div>
@stop