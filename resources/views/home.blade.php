@extends('layouts.frontend')

@section('title', 'Home')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    <li class="active_main"><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="#"><i class="fa fa-user"></i>Profil</a></li>
    <li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>

    <li class="link"><a href="{{ route('register') }}">Register</a></li>
    <li class="link_1"><a href="{{ route('login') }}">Log in</a></li>
@endsection

@section('content')
<section id="header" class="clearfix">
  	<div class="col-sm-12 header_main">
        <div class="col-sm-8 header_main_1">
            <div class="header_1">
	  	        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            	<!-- Indicators -->
      
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item">
                            <img src="img/1.jpg" alt="...">
                            <div class="carousel-caption">
                                <p><a href="#">Integer nec odio</a></p>
                                <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                            </div>
                        </div>
                        <div class="item active">
                            <img src="img/2.jpg" alt="...">
                            <div class="carousel-caption">
                                <p><a href="#">Praesent libero</a></p>
                                <h2>Sed cursus ante dapibus diam.</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/3.jpg" alt="...">
                            <div class="carousel-caption">
                                <p><a href="#">Nulla quis</a></p>
                                <h2>Duis sagittis ipsum.Praesent mauris.</h2>
                            </div>
                        </div>
                    </div>

					<!-- Controls -->
					<a class="left carousel-control" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xBdN#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>      
					</a>
					<a class="right carousel-control" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xBdN#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>      
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4 header_main_2">
			<div class="header_2 clearfix">
				<div class="col-sm-12 header_main_3">
					<div class="header_3">
						<a href="#"><img src="img/7.jpg" width="100%" ></a>			   
						<a href="#"><img src="img/7.jpg" width="100%" ></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="culture" class="clearfix">
	<div class="col-sm-12">
	    <div class="col-sm-12">
	        <h3 class="text-center">Terbaru</h3> 
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
            </div>
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
            </div>
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
            </div>
        </div>
    </div>
</section>
@endsection