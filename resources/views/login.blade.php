@extends('layouts.frontend')

@section('title', 'Login')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('book') }}"><i class="fa fa-book"></i>Buku</a></li>

    <li class="link"><a href="{{ route('register') }}">Register</a></li>
    <li class="link_1 active_main"><a href="{{ route('login') }}">Log in</a></li>
@endsection

@section('content')
<section id="login_main" class="clearfix">
	<section id="login" class="clearfix">
        <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Login SiBook</h1>
                    <form role="form" action="{{ route('login') }}" method="post" id="login-form" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="username" class="sr-only">Email</label>
                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                {{ "Username atau kata sandi salah" }}
                                </span>
                            @enderror
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <hr>
        	    </div>
    		</div> 
    	    <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
      </section>
</section>
<br><br><br><br><br><br><br><br><br><br>
<script type="text/javascript">
	function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}
	</script>
@endsection