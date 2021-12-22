@extends('layouts.frontend')

@section('title', 'Home')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    
    @if (Auth::guest())
    <li class="active_main"><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>
    <li class="link"><a href="{{ route('register') }}">Register</a></li>
    <li class="link_1"><a href="{{ route('login') }}">Log in</a></li>
	@elseif (Auth::user()->username=="admin")
	<li class="active_main"><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="{{ route('admin_index') }}"><i class="fa fa-book"></i>Manage Book</a></li>
	<form action="{{ route('logout') }}" method="POST">
		@csrf
		<li>
			<p><br><b style="color:white">{{ Auth::user()->name }}</b>
				<br><button type="submit">Log out</button>
			</p>
		</li>
	</form>
	@else
    <li class="active_main"><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
	<?php $id = Auth::user()->id; ?>
	<li><a href="{{ route('mybook', $id) }}"><i class="fa fa-user"></i>Buku Saya</a></li>
	
	<li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>
    
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
@if (Auth::guest())
<section id="header" class="clearfix">
  	<div class="col-sm-12 header_main">
        <div class="col-sm-8 header_main_1">
            <div class="header_1">
	  	        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            	<!-- Indicators -->
      
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
						@foreach ($books as $book)
                        <div class="item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset('/image/' . $book->image) }}" style="width: 960px; height: 450px;">
                            <div class="carousel-caption">
                                <p>{{ $book->title }}</p>
                                <h2> {{ $book->desc }}</h2>
                            </div>
                        </div>
						@endforeach
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
						@foreach ($buku as $book)
						<a href="#"><img src="{{ asset('/image/' . $book->image) }}" style="width: 397px; height: 224px"></a>			   
						@endforeach
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
            @foreach ($book_new as $book)
			<div class="col-sm-2">
	            <div class="culture">
		            <a href="#"><img class="thumbnail" src="{{ asset('/image/' . $book->image) }}" style="width: 140px; height: 120px;"></a>
		            <h5 class="text-center"><a href="#">{{ $book->title }}</a></h5>
		            <p class="text-center">{{ $book->user->name }}</p>
		            <h6 class="text-center"><a href="{{ asset('/file/' . $book->file) }}"><i class="fa fa-download"></i>Unduh</a></h6>
		        </div>
            </div>
			@endforeach
        </div>
    </div>
</section>
@elseif(Auth::user()->username!='admin')
<section id="header" class="clearfix">
  	<div class="col-sm-12 header_main">
        <div class="col-sm-8 header_main_1">
            <div class="header_1">
	  	        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            	<!-- Indicators -->
      
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
						@foreach ($books as $book)
                        <div class="item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset('/image/' . $book->image) }}" style="width: 960px; height: 450px;">
                            <div class="carousel-caption">
                                <p>{{ $book->title }}</p>
                                <h2> {{ $book->desc }}</h2>
                            </div>
                        </div>
						@endforeach
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
						@foreach ($buku as $book)
						<a href="#"><img src="{{ asset('/image/' . $book->image) }}" style="width: 397px; height: 224px"></a>			   
						@endforeach
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
            @foreach ($book_new as $book)
			<div class="col-sm-2">
	            <div class="culture">
		            <a href="#"><img class="thumbnail" src="{{ asset('/image/' . $book->image) }}" style="width: 140px; height: 120px;"></a>
		            <h5 class="text-center"><a href="#">{{ $book->title }}</a></h5>
		            <p class="text-center">{{ $book->user->name }}</p>
		            <h6 class="text-center"><a href="{{ asset('/file/' . $book->file) }}"><i class="fa fa-download"></i>Unduh</a></h6>
		        </div>
            </div>
			@endforeach
        </div>
    </div>
</section>
@endif
@endsection