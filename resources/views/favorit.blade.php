@extends('layouts.frontend')

@section('title', 'Favorit')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    
    @if (Auth::guest())
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>
    <li class="link"><a href="{{ route('register') }}">Register</a></li>
    <li class="link_1"><a href="{{ route('login') }}">Log in</a></li>
	@else
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="#"><i class="fa fa-user"></i>Profil</a></li>
    <li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>
    <li class="active_main"><a href="{{ route('favorit') }}"><i class="fa fa-star"></i>Favorit</a></li>
	<form action="{{ route('logout') }}" method="POST">
		@csrf
		<li>
			<p><br><b style="color:white">{{ Auth::user()->name }}</b>
				<br><button type="submit">Log out</button>
			</p>
		</li>
	</form>
	@endif
@endsection