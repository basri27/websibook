@extends('layouts.frontend')

@section('title', 'Register')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>

    <li class="link active_main"><a href="{{ route('register') }}">Register</a></li>
    <li class="link_1"><a href="{{ route('login') }}">Log in</a></li>
@endsection

@section('content')
<section id="register" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    <div class="reg clearfix">
			        <form role="form" method="post" action="{{ route('register') }}">
                        @csrf
				        <h3>Register SiBook | <small>Unduh buku dan materi secara gratis.</small></h3>
                        <hr class="colorgraph">
                        <div class="form-group">
				            <input type="text" name="name" id="name" class="form-control input-lg @error('name') is-invalid @enderror" placeholder="Name" tabindex="3">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
				            <input type="text" name="username" id="username" class="form-control input-lg @error('username') is-invalid @enderror" placeholder="Username" tabindex="3">
                            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
				        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg @error('email') is-invalid @enderror" placeholder="Email Address" tabindex="4">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg @error('password') is-invalid @enderror" placeholder="Password" tabindex="5">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-lg" placeholder="Password Confirmation" tabindex="5">
                        </div>
				
						<hr class="colorgraph">
						<div class="row">
						    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
</section><br><br>
@endsection