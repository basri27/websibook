@extends('layouts.frontend')

@section('title', 'Home')

@section('menu')
    <li class="brand_1"><a href="{{ route('home') }}"><i class="fa fa-book"></i>SiBook</a></li>
    <li><p>MENU</p></li>
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="#"><i class="fa fa-user"></i>Profil</a></li>
    <li><a href="{{ route('buku') }}"><i class="fa fa-book"></i>Buku</a></li>

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
                <h1>Login</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="user@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onClick="showPassword()"></span>
                            <span class="label">Show password</span>                        </div>
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