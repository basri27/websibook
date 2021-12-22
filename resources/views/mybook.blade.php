@extends('layouts.frontend')

@section('title', 'My Books')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>

    <li class="main"><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <?php $id = Auth::user()->id; ?>
    <li class="active_main"><a href="{{ route('mybook', $id) }}"><i class="fa fa-user"></i>Buku Saya</a></li>
    <li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>
    
	<form action="{{ route('logout') }}" method="POST">
		@csrf
		<li>
			<p><br><b style="color:white">{{ Auth::user()->name }}</b>
				<br><button type="submit">Log out</button>
			</p>
		</li>
	</form>
@endsection
@section('content')
<section id="contact" class="clearfix">
    <div class="container">
        <div class="col-sm-6">
	        <div class="contact_main_1">
                <h2>Buku Saya</h2>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="col-sm-6">
        <a href="{{ route('user_tambah', $id) }}" class="btn btn-primary">Tambah Buku</a>
    </div>
</div>
<section id="list" class="clearfix">
	<div class="col-sm-12">
	   	<div class="people_1">
            <div class="list_1 col-sm-12 clearfix">
                        @if (!empty($books))
                        @foreach ($books as $books)
                        <div class="col-sm-4">
                            <a href="article.html"><img style="width: 350px; height: 300px;" src="{{ asset('/image/' . $books->image) }}" class="iw"></a>
                            <div class="blog_p_1lii clearfix">
                                <h5 class="bold mgt">
                                    <r>{{ $books->title }}</r>
                                    <span class="pull-right col_1">
                                        <?php $id = Auth::user()->id;  ?>
                                        <a href="{{ route('user_edit', $books->id, $id) }}"><i class="fa fa-pencil"></i></a>
                                    </span>
                                </h5>	
                                <h6>By: <r class="col_1">{{ $books->user->name }}</r></h6>
                                <h6>Kategori: <r class="col_1">{{ $books->category->name }}</r></h6>
                                <p>Deskripsi: {{ $books->desc }}</p>
                                <h5 class="bold tc"><a href="#">Read More</a></h5>	
                                <h6 class="bor_t">{{ $books->created_at }}<a class="pull-right" href="#"><i class="fa fa-trash-o"></i></a></h6>  
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="container">
                            <div class="col-sm-6">
                                <h4>Buku Anda Kosong</h4>
                            </div>
                        </div>
                        @endif
                </div>
		    </div>
        </div>
	</div>
</section>
@endsection