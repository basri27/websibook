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
			<a href="{{ route('adm_tambah') }}" class="btn btn-primary" style="float: right">Tambah</a>
		    <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Pengupload</th>
                        <th>Aksi</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
					@foreach ($books as $book)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->desc }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>{{ $book->user->name}}</td>
                        <td>
                            <form action="{{ route('adm_deleteBook', $book->id) }}" method="post">
                                @method('DELETE')
                                @csrf                                                            
                                <a type="button" class="btn btn-warning btn-sm" href="{{ route('adm_edit', $book->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus ini?')"><i class="fa fa-trash"></i> Hapus</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ asset('/file/' . $book->file) }}" class="fa fa-download"></a>
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