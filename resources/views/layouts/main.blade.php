<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Syncopate:400,700|Quicksand:200,600,700|Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://biggest.telesandifestival.com/css/main.css">

    <link rel="stylesheet" href="https://telsfest.syntx.id/css/all.min.css">
    <link rel="stylesheet" href="https://telsfest.syntx.id/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://telsfest.syntx.id/css/animate.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')


    <title>@yield('title')</title>
    
    </head>
    <body>
    	<section class="fs" id="header">
           <nav class="navbar fixed-top navbar-inverse navbar-expand-lg animated slideInDown" id="navbar">
                <div class="container">
                    <a href="http://telesandifestival.com" class="navbar-brand" style="position: relative; margin-left:20px">
                        <img src="{{'img/biggest.png'}}" width="auto" height="59px" class="align-top" id="wi">
                    </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars" id="navbar-toggler-icon" style="color: #fff;"></i>
                    </button>
                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="http://telesandifestival.com" class="nav-link">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="/cup#daftar_lombas" class="nav-link">TICKET</a>
                            </li>
                            <li class="nav-item">
                                <a href="/cup#daftar_lombas" class="nav-link">MERCHANDISE</a>
                            </li>
                            <li class="nav-item">
                                <a href="/cup#daftar_lombas" class="nav-link">SPONSOR</a>
                            </li>
                                                        
                            </ul>
                    </div>
                </div>
            </nav>
@yield('content')

<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://telsfest.syntx.id/js/all.min.js"></script>
        <script src="https://telsfest.syntx.id/js/fontawesome.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    //var preloader = document.getElementById('loading');

    $(window).on('load', function(){
        document.getElementById("loading").style.display = 'none';
        $(".item-logo").addClass('animated zoomInDown');
        $(".header-content").addClass('animated slideInUp');
        $(".item-header").addClass('animated fadeInLeft');
    });

    // function myFunction(){
    //     preloader.style.display = 'none';
    // }
</script>
    </body>
</html>