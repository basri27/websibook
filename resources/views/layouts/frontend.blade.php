<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiBook</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}" />
    <script src="{{ asset('/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <section id="main">
        <section id="menu">
            <div id="wrapper" class="">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <nav id="spy">
                        <ul class="sidebar-nav nav">
                            <li class="brand_1"><a href="index.html"><i class="fa fa-book"></i>SiBook</a></li>
                            <hr>
                            <li class="active_main"><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                            <li><a href="people.html"><i class="fa fa-user"></i>Profil</a></li>
                            <li><a href="music.html"><i class="fa fa-book"></i>Buku</a></li>

                            <li class="link"><a href="register.html">Register</a></li>
                            <li class="link_1"><a href="login.html">Log in</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="page-content-wrapper">
                    <div class="content-header">
                        <h1 id="home">
                        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">                    </a>                </h1>
                    </div>
                </div>
                
                <section id="footer" class="clearfix">
                    <div class="col-sm-12">
                        <div class="footer">
                            <p> © 2013 Your Website Name. All Rights Reserved | Design by <a
                                    href="http://www.templateonweb.com">TemplateOnWeb</a></p>
                        </div>
                    </div>
                </section>

            </div>
        </section>
    </section>
    <!-- //for menu -->
    <script type="text/javascript">

        /*Menu-toggle*/
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
        });

        /*Scroll Spy*/
        $('body').scrollspy({ target: '#spy', offset: 80 });

        /*Smooth link animation*/
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    </script>
    <!-- //for menu_end -->
</body>

</html>