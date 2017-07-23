<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>LaravelApp</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fileinput.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


	<!-- if it IE9 -->

	<script type="text/javascript" src="{{ asset('http://localhost/laravelapp/public/js/html5shiv_3_7_2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('http://localhost/laravelapp/public/js/respond_1_4_2.min.js') }}"></script>

	<!-- endif -->
</head>
<body>


	@include('navbar')
	@yield('about')

	<div class="container">
		@yield('main')
	</div>

	<div id="footer" style="background-color:#2c3e50; color: #ffffff;">
		<p>&copy; 2017 PDS Copyright</p>
	</div>
	<script type="text/javascript" src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/imageuploadify.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/purify.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/fileinput.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/laravelapp.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#print').click(function(){
				window.print();
			})	
		});
	</script>

</body>
</html>