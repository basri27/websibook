@extends('layouts.frontend')

@section('title', 'Add Book')

@section('menu')
<li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
<li><p>MENU</p></li>
<li><a href="{{ route('home') }}"></a></li>
<li class="active_main"><a href="{{ route('admin_index') }}"><i class="fa fa-book"></i>Manage Book</a></li>
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
            <form method="post" enctype="multipart/form-data" action={{ route('adm_add')}}>
                @csrf
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                <br>
                <label for="desc" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="desc" id="desc" value="{{ old('desc') }}">
                <br>
                <label for="image">Image</label>
                <input type="file" name="image">
                <input type="textbox" name="user_id" id="user_id" value="{{ Auth::user()->id }}" hidden>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin_index') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </section>
</section>
@endsection