@extends('layouts.frontend')

@section('title', 'Add Book')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>

    <li class="main"><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <?php $id = Auth::user()->id; ?>
    <li class="active_main"><a href="{{ route('mybook', $id) }}"><i class="fa fa-user"></i>Buku Saya</a></li>
    <li><a href="{{ route('book') }}"><i class="fa fa-book"></i>Buku</a></li>
    
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
<section id="people" class="clearfix">
	<div class="col-sm-12">
	   	<div class="people_1">
		     <h3 class="text-center">Tambah Data</h3>
		</div>
	</div>
</section>
<section id="login_main" class="clearfix">
	<section id="login" class="clearfix">
		<div class="container">
            <form method="post" enctype="multipart/form-data" action={{ route('user_add', Auth::user()->id)}}>
                @csrf
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                <br>
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($list_categories as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                    @endforeach
                </select>
                <br>
                <label for="desc" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="desc" id="desc" value="{{ old('desc') }}">
                <br>
                <label for="file">File</label>
                <input type="file" name="file">
                <br>
                <label for="image">Image</label>
                <input type="file" name="image">
                <input type="textbox" name="user_id" id="user_id" value="{{ Auth::user()->id }}" hidden>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('mybook', $id) }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </section>
</section>
@endsection