<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>  
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
  <link rel="stylesheet" type="text/css" href="https://telsfest.syntx.id/css/animate.css">



      @yield('css')
      <style>
          body{
            background-color: #A2D0C4;
              /*background-image: url('{{ asset('img/back.jpg') }}');
              background-size: cover;*/
          }

          
      </style>

</head>



<body>
   <section class="navbar-fixed">
     <nav class="navbar fixed-top navbar-inverse navbar-expand-lg animated slideInDown" id="navbar" style="background-color: white; box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 3px">
        <div class="container">
            <a href="{{ route('landing') }}" class="navbar-brand" style="position: relative; margin-left:20px">
                <img src="{{ url('img/biggest.png')}}" width="auto" height="59px" class="align-top" id="wi">
            </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" id="navbar-toggler-icon" style="color: #000;"></i>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('landing') }}" class="nav-link" style="color:#000;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a  href="/ticket" class="nav-link" style="color:#000;">TICKET</a>
                    </li>
                    <li class="nav-item">
                        <a href="/merchandise" class="nav-link" style="color:#000;">MERCHANDISE</a>
                    </li>
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
                        <a><hr></a>
                        <a href="{{ route('confirm_ticket') }}" class="dropdown-item">Confirm Ticket</a>
                        <a href="{{ route('confirm_merch') }}" class="dropdown-item">Confirm Merchandise</a>
                        <a><hr></a>
                        <a href="/admin/ticket" class="dropdown-item">Manage Ticket</a>
                        <a href="/admin/merchandise" class="dropdown-item">Manage Merchandise</a>
                        <a><hr></a>
                        <a href="{{ route('lineup') }}" class="dropdown-item">Manage Lineup GS</a>
                        <a><hr></a>
                        
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



  @yield('content')



            <footer>
                <div style="background: linear-gradient(360deg, rgba(43,43,43,1) 2%, rgba(113,113,113,0.4) 60%, rgba(162,208,197,0.1) 100%);">
              <div class="container">
                <div class="spacer"></div>
                <div class="row">

                  <div class="col-md-4 mb-4">

                    <center><img src="{{ asset('img/biggest-logo.png') }}" style="width: 200px;"></center>

                  </div>

                  <div class="col-md-8">

                    <h3 style="color: white;">Kontak Kami</h3>

                    <hr style="left: 10; top:30px; position: absolute; width: 50px; border: 2px solid #fff; background: white">
                    <div class="mb-4"></div>
                    <div class="row">  

                      <div class="col-lg-6">  

                        <table>

                        <tr>

                          <td>

                            <i class="fas fa-envelope-open-text text-center" style="background-color: #fff; padding: 10px; border-radius: 100%; width: 38px; height: 38px;"></i>

                          </td>

                          <td>

                            <p style="color: white; margin-top: 20px; margin-left: 20px;"><a style="color: white;" href="mailto:biggesttelesandi@gmail.com">biggesttelesandi@gmail.com</a></p>

                          </td>

                        </tr>

                        <tr>

                          <td>

                            <i class="fab fa-instagram text-center" style="background-color: #fff; padding: 10px; border-radius: 100%; width: 38px; height: 38px;"></i>

                          </td>

                          <td>

                            <p style="color: white; margin-top: 20px; margin-left: 20px;"><a style="color: white;" href="https://instagram.com/telesandi.festival">@telesandi.festival</p>

                          </td>

                        </tr>

                        </table>

                      </div>
                      <div class="col-lg-6">  

                        <table>

                        <tr>

                          <td>

                            <i class="fas fa-map-marked-alt text-center" style="background-color: #fff; padding: 10px; border-radius: 100%; width: 38px; height: 38px;"></i>

                          </td>

                          <td>

                            <p style="color: white; margin-top: 20px; margin-left: 20px;">Mekarsari Raya Jl. KH. Mochammad, Tambun Selatan Bekasi, Indonesia.</p>

                          </td>

                        </tr>


                        </table>

                      </div>


                    </div>

                  </div>

                </div>

              </div>
            </footer>
<p style="background-color: #2b2b2b !important; color: #fff; padding: 15px; margin: 0;" class="text-center">&copy; 2019 <a href="/" style="color: #fff; text-decoration: none;">Telesandi Festival</a>. All rights reserved.</p>        



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
    
$(window).on('load', function(){
    (function(){
        $('.form-prevent').on('submit', function(){
         $('.button-prevent').attr('disabled', 'true');   
        })
    })();
});
</script>
@yield('js')

</body>

</html>