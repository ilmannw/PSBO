<nav class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ url('/') }}">Pangkalan Data Siswa (PDS)</a>
	</div>
	<div class="collaspe navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">

			@if (Auth::check())
				@if (!empty($halaman) && $halaman == 'siswa')	
					<li class="active"><a href="{{ url('siswa') }}">Siswa<span class="sr-only">(current)</span></a></li>
				@else
					<li><a href="{{ url('siswa') }}">Siswa</a></li>
				@endif
			@endif


			@if (Auth::check() && Auth::user()->level == 'admin')
				@if (!empty($halaman) && $halaman == 'kelas')	
					<li class="active"><a href="{{ url('kelas') }}">Kelas<span class="sr-only">(current)</span></a></li>
				@else
					<li><a href="{{ url('kelas') }}">Kelas</a></li>
				@endif
			@endif

			@if (Auth::check() && Auth::user()->level == 'admin')
				@if (!empty($halaman) && $halaman == 'user')
					<li class="active"><a href="{{ url('user') }}">User
					<span class="sr-only">(current)</span></a></li>
				@else
					<li><a href="{{ url('user') }}">User</a></li>
				@endif
			@endif

		</ul>
		<ul class="nav navbar-nav navbar-right">
			@if (Auth::check())
			<li class="dropdown">
				<a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}	<span class="caret"></span></a>
					
				<ul class="dropdown-menu">
					<li><a href="{{ url('logout') }}" ><i class="fa fa-sign-out" aria-hidden="true"></i>	Logout</a></li>
					
				</ul>
			</li>
			@else
			<li><a href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>	Login</a></li>
			@endif
		</ul>
	</div>
</div>
</nav>