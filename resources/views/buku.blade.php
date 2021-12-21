@extends('layouts.frontend')

@section('title', 'Buku')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    
    @if (Auth::guest())
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li class="active_main"><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>
    <li class="link"><a href="{{ route('register') }}">Register</a></li>
    <li class="link_1"><a href="{{ route('login') }}">Log in</a></li>
	@else
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="#"><i class="fa fa-user"></i>Profil</a></li>
    <li class="active_main"><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>
    
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

@section('content')
<section id="people_header" class="clearfix">
    <div class="col-sm-12">
	    <div class="col-sm-8">
	        <div class="people_header_1">
			   <p>Cari Buku</p>
			   <input placeholder="Masukkan nama buku..." class="form_1" type="text">
			</div>
		</div>
	</div>
</section>
<section id="music" class="clearfix">
	<div class="col-sm-12">
        <ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#home_2">Fashion</a></li>
		    <li><a data-toggle="tab" href="#menu_2">Business</a></li>
		    <li><a data-toggle="tab" href="#menu_3">Adventure</a></li>
		    <li><a data-toggle="tab" href="#menu_4">Outdoor</a></li>
		    <li><a data-toggle="tab" href="#menu_5">Music</a></li>
		    <li><a data-toggle="tab" href="#menu_6">Trending</a></li>
		    <li><a data-toggle="tab" href="#menu_7">Sports</a></li>
		    <li><a data-toggle="tab" href="#menu_8">Entertainment</a></li>
        </ul> 
        <div class="tab-content clearfix">
            <div id="home_2" class="tab-pane fade in active clearfix">
                <div class="click clearfix">
                    <div class="col-sm-12 music_inner">
                        <div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div><div class="col-sm-2">
                            <div class="culture">
                                <a href="#"><img class="thumbnail" src="img/14.jpg" width="100%"></a>
                                <h5 class="text-center"><a href="#">Judul Buku</a></h5>
                                <p class="text-center">Pengupload</p>
                                <h6 class="text-center"><a href="#"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection