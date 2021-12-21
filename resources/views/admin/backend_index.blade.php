@extends('layouts.frontend')

@section('title', 'Manage Books')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
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
		     <h3 class="text-center">Daftar Buku & Materi</h3>
		</div>
	</div>
</section>
<section id="login_main" class="clearfix">
	<section id="login" class="clearfix">
		<div class="container">
			<a href="{{ route('tambah') }}" class="btn btn-primary" style="float: right">Tambah</a>
		    <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Pengupload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($books as $book)
                    <?php $no = 1; ?>
                    <tr>
                        <td>{{ $no = $no++ }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>{{ $book->user->name}}</td>
                        <td>
                            <center>
                                <a href=""><i class="fa fa-edit"></i></a>
                                <a href=""><i class="fa fa-trash"></i></a>
                            </center>
                        </td>
                    </tr>
					@endforeach
                </tbody>
            </table>
		</div>
    </section>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>

@endsection