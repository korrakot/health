<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style>
		html,
		body {
			background-color: #fff;
			color: #636b6f;
			font-family: 'Sarabun', sans-serif;
			font-weight: 200;
			height: 100vh;
			margin: 0;
		}
	</style>
</head>

<body>
	<div id="app">
		<div>
			<a class="container" style="text-align: center; width: 100%; display:block; font-size:1.25rem">
				ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน
			</a>
		</div>
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
			<div class="container">
				<button style="align-self: flex-end" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">
						@auth
						<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">สุขภาพผู้สูงอายุ</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/healthelder/record">บันทึกสุขภาพ</a>
      <a class="dropdown-item" href="/healthelder/diseaserecord">บันทึกโรคประจำตัว</a>
      <a class="dropdown-item" href="/healthelder/medicinerecord">บันทึกการใช้ยา</a>
      <a class="dropdown-item" href="/healthelder/rightsrecord">บันทึกสิทธิการรักษา</a>
    </div>
	</li>
	<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">การติดตาม</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/tracking/observe">การสังเกตอาการ</a>
      <a class="dropdown-item" href="/tracking/record">การบันทึกสุขภาพ</a>
      <a class="dropdown-item" href="/tracking/status">สถานภาพ</a>
    </div>
	</li>
	<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">รายงาน</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">โรคประจำตัว</a>
      <a class="dropdown-item" href="#">การใช้ยา</a>
      <a class="dropdown-item" href="#">สิทธิการรักษา</a>
    </div>
	</li>
	<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ข้อมูลระบบ</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/info/elders">ผู้สูงอายุ</a>
      <a class="dropdown-item" href="/disease">โรคประจำตัว</a>
      <a class="dropdown-item" href="/patent">สิทธิการรักษา</a>
      <a class="dropdown-item" href="/symptom">อาการ</a>
      <a class="dropdown-item" href="/medicine">ยา</a>
    </div>
	</li>
						
						@endauth
					</ul>


					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																											 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

		<main class="py-4">
			@yield('content')
		</main>
	</div>
</body>

</html>