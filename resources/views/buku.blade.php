@extends('layouts.frontend')

@section('title', 'Buku')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    
    @if (Auth::guest())
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li class="active_main"><a href="{{ route('book') }}"><i class="fa fa-book"></i>Buku</a></li>
    <li class="link"><a href="{{ route('register') }}">Register</a></li>
    <li class="link_1"><a href="{{ route('login') }}">Log in</a></li>
	@else
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
        <?php $id = Auth::user()->id; ?>
    <li><a href="{{ route('mybook', $id) }}"><i class="fa fa-user"></i>Buku Saya</a></li>
    <li class="active_main"><a href="{{ route('book') }}"><i class="fa fa-book"></i>Buku</a></li>
    
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
                <form action="{{ route('book') }}">
                    <p>Cari Buku</p>
                    <input placeholder="Masukkan nama buku..." class="form_1" type="text" name="cari">
                    <a href="{{ route('book') }}" class="btn btn-danger">Batal</a>
                </form>
			</div>
		</div>
	</div>
</section>
<section id="music" class="clearfix">
	<div class="col-sm-12">
        <h3 class="text-center">Buku</h3><br>
        <div class="tab-content clearfix">
            <div class="tab-pane fade in active clearfix">
                <div class="click clearfix">
                    <div class="col-sm-12 music_inner">
                        @foreach ($books1 as $b)
                        <div class="col-sm-2">
                            <div class="culture">
                                <center><a href="#"><img class="thumbnail" src="{{ asset('/image/' . $b->image) }}" style="width: 130px; height: 130px"></a></center>
                                <h5 class="text-center"><a href="#">{{ $b->title }}</a></h5>
                                <p class="text-center">{{ $b->user->name }}</p>
                                <h6 class="text-center"><a href="{{ asset('/file/' . $b->file) }}"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div>
                        @endforeach
                    <div>
                </div>
            </div>
            <div class="tab-pane fade in active clearfix">
                <div class="click clearfix">
                    <div class="col-sm-12 music_inner">
                        @foreach ($books2 as $b)
                        <div class="col-sm-2">
                            <div class="culture">
                                <center><a href="#"><img class="thumbnail" src="{{ asset('/image/' . $b->image) }}" style="width: 130px; height: 130px"></a></center>
                                <h5 class="text-center"><a href="#">{{ $b->title }}</a></h5>
                                <p class="text-center">{{ $b->user->name }}</p>
                                <h6 class="text-center"><a href="{{ asset('/file/' . $b->file) }}"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div>
                        @endforeach
                    <div>
                </div>
            </div>
            <div class="tab-pane fade in active clearfix">
                <div class="click clearfix">
                    <div class="col-sm-12 music_inner">
                        @foreach ($books3 as $b)
                        <div class="col-sm-2">
                            <div class="culture">
                                <center><a href="#"><img class="thumbnail" src="{{ asset('/image/' . $b->image) }}" style="width: 130px; height: 130px"></a></center>
                                <h5 class="text-center"><a href="#">{{ $b->title }}</a></h5>
                                <p class="text-center">{{ $b->user->name }}</p>
                                <h6 class="text-center"><a href="{{ asset('/file/' . $b->file) }}"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div>
                        @endforeach
                    <div>
                </div>
            </div>
            <div class="tab-pane fade in active clearfix">
                <div class="click clearfix">
                    <div class="col-sm-12 music_inner">
                        @foreach ($books4 as $b)
                        <div class="col-sm-2">
                            <div class="culture">
                                <center><a href="#"><img class="thumbnail" src="{{ asset('/image/' . $b->image) }}" style="width: 130px; height: 130px"></a></center>
                                <h5 class="text-center"><a href="#">{{ $b->title }}</a></h5>
                                <p class="text-center">{{ $b->user->name }}</p>
                                <h6 class="text-center"><a href="{{ asset('/file/' . $b->file) }}"><i class="fa fa-download"></i>Unduh</a></h6>
                            </div>
                        </div>
                        @endforeach
                    <div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection