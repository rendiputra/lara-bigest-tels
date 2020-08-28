<!DOCTYPE html>

<html lang="id">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') &mdash; Biggest 2019</title>
  <link rel="apple-touch-icon" href="{{ asset('img/biggest-logo.png') }}" sizes="180x180">
  <link rel="icon" href="{{ asset('img/biggest-logo.png') }}" sizes="32x32" type="image/png">
  <link rel="icon" href="{{ asset('img/biggest-logo.png') }}" sizes="16x16" type="image/png">
  <link rel="mask-icon" href="{{ asset('img/biggest-logo.png') }}" color="#a2d0c5">
  <link rel="icon" href="{{ asset('img/biggest-logo.png') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Syncopate:400,700|Nunito:200,600|Lexend+Deca|Quicksand:200,600,700|Poppins:400,600,700|Roboto:400,500,600,700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="https://biggest.telesandifestival.com/css/main.css">
  <link rel="stylesheet" href="https://telsfest.syntx.id/css/all.min.css">
  <link rel="stylesheet" href="https://telsfest.syntx.id/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://biggest.telesandifestival.com/css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://biggest.telesandifestival.com/css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">


@yield('css')
<style>
  body{
    background-color: #A2D0C4;
      /*background-image: url('{{ asset('img/back.jpg') }}');
      background-size: cover;*/
  }
              /* The sidebar menu */
    .sidenav {
    	margin-top: 80px;
      height: 100%; /* Full-height: remove this if you want "auto" height */
      width: 300px; /* Set the width of the sidebar */
      position: fixed; /* Fixed Sidebar (stay in place on scroll) */
      z-index: 1; /* Stay on top */
      top: 0; /* Stay at the top */
      left: 0;
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 20px;
    }
    
    /* The navigation menu links */
    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      display: block;
    }
    
    /* Style page content */
    .main {
      margin-left: 300px; /* Same as the width of the sidebar */
      padding: 0px 10px;
    }
    
    /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    .tes{
        
    }
    
    @media screen and (max-width: 768px){
    	.sidenav{
    		display: none;
    	}	
    	.main{
    		margin-left: auto;
    	}
    }
    
    @media screen and (max-width: 768px){
    	.main{
    		margin-left: 50px;
    	}
    	.tes{
    	    display: inline;
    	}
    	.tes2{
    	    display:none;
    	}
    }
    
</style>

</head>



<body>
   <section class="navbar-fixed">
     <nav class="navbar fixed-top navbar-inverse navbar-expand-lg animated slideInDown" id="navbar" style="background-color: white; box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 3px">
        <div class="container">
            <a href="http://telesandifestival.com" class="navbar-brand" style="position: relative; margin-left:20px">
                <img src="http://telesandifestival.com/images/logo/festcup.png" width="auto" height="59px" class="align-top" id="wi">
            </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" id="navbar-toggler-icon" style="color: #000;"></i>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="http://biggest.telesandifestival.com" class="nav-link" style="color:#000;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a  href="/ticket" class="nav-link" style="color:#000;">TICKET</a>
                    </li>
                    <li class="nav-item">
                        <a href="/merchandise" class="nav-link" style="color:#000;">MERCHANDISE</a>
                    </li>
                    <div class="tes">
                        <li>
    				        <a href="/dash/user" class="c-font-16 c-font-uppercase mb-3 active" ><i class="far fa-user"></i> Profil</a>
                        </li>
                        
                        <li>
        				  <a href="/dash/ordered"  class="c-font-16 c-font-uppercase mb-3 " ><i class="fa fa-shopping-cart"></i> Orders</a>
                        </li>
                    </div>
                    <!--<li class="nav-item">-->
                    <!--    <a href="#sponsor" class="nav-link" style="color:#000;">SPONSOR</a>-->
                    <!--</li>-->
                                   
    @guest
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link" style="color:#000;">{{__('LOGIN')}}</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:#000;">
                    {{ Auth::user()->email }} <span class="caret"></span>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if(Auth::user()->isAdmin == TRUE)
                        <a href="/admin/dash" class="dropdown-item">Dashboard</a>
                        <a href="{{ route('get') }}" class="dropdown-item">Scan Barcode</a>
                        <a href="{{ route('confirm_ticket') }}" class="dropdown-item">Confirm Ticket</a>
                        <a href="{{ route('confirm_merch') }}" class="dropdown-item">Confirm Merchandise</a> 
                        <a href="/admin/ticket" class="dropdown-item">Manage Ticket</a>
                        <a href="/admin/merchandise" class="dropdown-item">Manage Merchandise</a>
                        
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
        </div>
    </nav>
   </section>


<div class="spacer"></div>
    <div class="container-fluid ">
<!-- Side navigation -->
		<div class="c-content-tab-3 c-opt-1" >
			<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 tes2 justify-content-center" role="tablist" style="border: none;">
                <li class="active">
    
    				<div class="sidenav bg-white ">
    				  <a href="/dash/user" class="c-font-16 c-font-uppercase mb-3 active" ><i class="far fa-user"></i> Profil</a>
    
    
    				  <a href="/dash/ordered"  class="c-font-16 c-font-uppercase mb-3 " ><i class="fa fa-shopping-cart"></i> Orders</a>
    				</div>
    			</li>
    		</ul>
			<!--<div id="mySidebar" class="sidebar">-->
			<!--  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
			<!--  <a href="#" class="active"><i class="fa fa-user"></i> Profil</a>-->
			<!--  <a href="#"><i class="fas fa-shopping-cart"></i> Orders</a>-->
			<!--</div>-->

			<!--<div class="tes"  style="left: 0;">-->
			<!--  	<button class="openbtn alert-primary" onclick="openNav()">&#9776;</button>-->
			<!--	<div class="tes ">-->
			<!--	</div>-->
			<!--</div>-->


  @yield('content')

		</div>


	</div>

<script src="https://syntx.id/assets/vendors/jquery.min.js"></script>
<script src="https://telsfest.syntx.id/js/all.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="https://telsfest.syntx.id/js/fontawesome.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://telsfest.syntx.id/js/v4-shims.min.js"></script>
<script src="https://www.jqueryscript.net/demo/User-Friendly-Number-Input-Spinner-with-jQuery-Bootstrap/bootstrap-number-input.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>   
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>   
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementByClass("main").style.marginLeft= "50px";
}
</script>
@yield('js')

</body>

</html>