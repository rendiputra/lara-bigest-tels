<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Syncopate:400,700|Quicksand:200,600,700|Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">


    <title>@yield('title')</title>
    
    </head>
    <body>
    	<section class="navbar-biggest" id="navbar-biggestid">
    		<div class="container">
	    		<div class="row">
	    			<div class="col col-md-12 col-sm-12">
	    				<nav class="navbar navbar-expand-lg navbar-light fixed-top">
						  <a class="navbar-brand" href="#">Navbar</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item">
						        <a class="nav-link" href="#">HOME</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">TICKET</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">MERCHANDISE</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">SPONSOR</a>
						      </li>
            @guest
            
                    <a class="nav-item nav-link btn btn-danger my-2 my-sm-0" href="{{ route('login') }}" style="border-radius: 40px; width: 70px; margin-right: 15px; color: white;">{{ __('Login') }}</a>
                @else
                    <li class="nav-item">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->isAdmin == TRUE)
                                <a href="/admin/dash" class="dropdown-item">Dashboard</a>
                                <a href="/usercreatedlorem" class="dropdown-item">Buat User</a>
                                <a href="/admin/klasemen" class="dropdown-item">Manage Klasemen</a>
                                <a href="/admin/jadwal" class="dropdown-item">Manage Jadwal</a>
                                
                            @else
                                <a class="dropdown-item @if(Request::is('home','home/*')) active @endif" href="/user/dash">
                                    {{ __('Dashboard') }}
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </div>
                    </li>
            @endguest
						    </ul>
						  </div>
						</nav>
	    			</div>
	    		</div>
	    	</div>
    	</section>
		
		@yield('content')	
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>