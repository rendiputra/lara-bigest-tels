<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>  
    <link rel="apple-touch-icon" href="{{ asset('img/biggest-logo.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('img/biggest-logo.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('img/biggest-logo.png') }}" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="{{ asset('img/biggest-logo.png') }}" color="#a2d0c5">
    <link rel="icon" href="{{ asset('img/biggest-logo.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600|Lexend+Deca|Quicksand:200,600,700|Poppins:400,600,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://telsfest.syntx.id/css/all.min.css">
    <link rel="stylesheet" href="https://telsfest.syntx.id/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
    <title>Home &mdash; Biggest 2019</title>
        <style>
            html{
                scroll-behavior: smooth;
            }
        </style>
    
    </head>
    <body>
        
        <div class="bg-body">
            <section class="fs" id="header">
               <nav class="navbar fixed-top navbar-inverse navbar-expand-lg animated slideInDown" id="navbar">
                    <div class="container">
                        <a href="{{ route('landing') }}" class="navbar-brand" style="position: relative; margin-left:20px">
                            <img src="{{'img/biggest.png'}}" width="auto" height="59px" class="align-top" id="wi">
                        </a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars" id="navbar-toggler-icon" style="color: #fff;"></i>
                        </button>
                        

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="{{ route('landing') }}" class="nav-link">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a  href="/ticket" class="nav-link">TICKET</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/merchandise" class="nav-link">MERCHANDISE</a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a href="#sponsorid" class="nav-link">SPONSOR</a>-->
                                <!--</li>               -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

                <div class="id-playeryt opc" style="width: 100%; height: 100vh;" id="vidioyt">
                    <div class="opc">
                       <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/MNBrDyWLyFg',containment:'#vidioyt',startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,showControls:false}" style="display: none;"> </div>
                    </div>
                </div>
            </section>
            <div class="bg-body2 slideInRight animated">
                <div class="opcs" style="background: linear-gradient(180deg, rgba(0,0,0,0.5) 49%, rgba(113,113,113,0.5) 82%, rgba(255,255,255,0) 100%);">
                    <section class="desct-biggest" id="desct-biggestid">
                        <div class="spacer"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col col-12 col-md-6 text-center mb-4">
                                    <div class="img-destbiggest">
                                        <img src="{{ asset('img/cover-biggest.jpg') }}" alt="" class="img-fluid" max-width="100%" width="70%" height="200px">
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 text-center">
                                    <p class="section-title text-left">tentang</p>
                                    <h4 class="section-text text-left" style="color:#fff;">BIGGEST</h4>
                                    <p class="section-desc text-left" style="color:#fff;">
                                        <span><b>BIGGEST</b></span> adalah event sekolah SMK Telekomunikasi Telesandi Bekasi yang diadakan setahun sekali, dan merupakan event terbesar yang diselenggarakan di SMK Telekomunikasi Telesandi

                                        <span><b>BIGGEST 3</b></span> merupakan acara puncak dari Telesandi Festival yang di rancang oleh OSIS SMK Telekomunikasi Telesandi Bekasi, Acara pensi ini juga merupakan acara festival seni dan hiburan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </section>
                    {{-- <div style="background: linear-gradient(180deg, rgba(0,0,0,0.31974788206298144) 0%, rgba(113,113,113,0.5) 36%, rgba(255,255,255,0) 100%);" class="spacer"></div> --}}
                </div>
                <section class="lineup-gs" id="lineup-gs" style="background-image: url('{{ asset('img/daun-jatoh.png') }}'); background-size: 20%; background-repeat: no-repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="{{ asset('img/line-up2.png') }}" alt="" class="img-fluid img-lineup" height="100px">
                            </div>
                        </div>
                        <div class="row">
                            @php $no = 1; @endphp
                            <div class="offset-md-3"></div>
                            @foreach($data as $lineup)
                                <div class="col col-12 col-lg-3 mb-3 justify-content-center text-center">
                                    <a data-toggle="modal" data-target="#modal{{ $no }}">
                                        <img src="{{ asset('images/gs/'.$lineup->foto) }}" alt="" class="img-fluid img-gs" width="80%">
                                      {{-- <div class="card border-0 shadow" style="height: 18rem; background-image: url('{{ asset('images/gs/'.$lineup->foto) }}'); background-size: cover; background: none;">
                                        <div class="overlay-line">
                                            <div class="card-body">
                                                <p class="card-text section-text text-center justify-content-center">{{ $lineup->nama }}</p>
                                            </div>
                                         </div>
                                        </div> --}}
                                    </a>
                                </div>


                            <!-- Modal -->
                            <div class="modal fade" id="modal{{$no}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $lineup->nama }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    {{ $lineup->deskripsi }}
                                  </div>
                                </div>
                              </div>
                            </div>
                            @php $no++ @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="spacer"></div>
                </section>


            <section class="our-history" id="out-historyid" style="background-image: url('{{ asset('img/pohon-kanan.png') }}'); background-position: right; background-repeat: no-repeat; background-size: 10%;">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-12 mb-3">
                            <img src="{{ asset('img/our-history.png') }}" alt="" class="img-fluid float-right img-history" max-width="100%" height="100px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-3 mb-3">
                            <div class="card" style="height: 20rem; background-image: url('{{ asset('img/pentas-seni.jpeg') }}'); background-size: cover;">
                                <div class="overlay-line">
                                    <div class="card-body text-center" style="line-height: 18rem;">
                                        <p class="card-text section-text" style="color:#fff; font-size: 20px; margin-top: 120px;">PENTAS SENI</p>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-3 mb-3">
                            <div class="card" style="height: 20rem; background-image: url('{{ asset('img/biggest1.jpeg') }}'); background-size: cover;">
                                <div class="overlay-line">
                                    <div class="card-body text-center" style="line-height: 18rem;">
                                        <p class="card-text section-text" style="color:#fff; font-size: 20px; margin-top: 120px;">BIGGEST 1</p>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-3 mb-3">
                            <div class="card" style="height: 20rem; background-image: url('{{ asset('img/biggest2.jpeg') }}'); background-size: cover;">
                                <div class="overlay-line">
                                    <div class="card-body text-center" style="line-height: 18rem;">
                                        <p class="card-text section-text" style="color:#fff; font-size: 20px; margin-top: 120px;">BIGGEST 2</p>
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer"></div>
            </section>
            <!--<div class="bg-body3">-->
            <!--    <section class="sponsor" id="sponsorid">-->
            <!--        <div style="width:100%; height: 100px;"></div>-->
            <!--    <div class="container">-->
            <!--        <div class="row justify-content-center">-->
            <!--            <div class="col col-12 colm-md-12 mb-4">-->
            <!--                <center>-->
            <!--                    <img src="{{ asset('img/sponsored.png') }}" alt="" max-width="100%" height="100px" class="img-fluid img-sponsor">-->
            <!--                </center>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="row justify-content-center">-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="spacer"></div>-->
            <!--    </section>-->
            <!--    <section class="mediapartner" id="mediapartnerid">-->
            <!--    <div class="container">-->
            <!--        <div class="row justify-content-center">-->
            <!--            <div class="col col-12 colm-md-12 mb-4">-->
            <!--                <center>-->
            <!--                    <img src="{{ asset('img/medpart.png') }}" alt="" max-width="100%" height="100px" class="img-fluid img-medpart">-->
            <!--                </center>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="row justify-content-center">-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--            <div class="col col-12 col-lg-3 text-center">-->
            <!--                <img src="https://telesandifestival.com/images/partner/1568280116.png" alt="" class="img-fluid sponsor-img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="spacer"></div>-->
            <!--    </section>-->
            <!--</div>-->
            <!--</div>-->
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
            </div>
        </div>
<p style="background-color: #2b2b2b !important; color: #fff; padding: 15px; margin: 0;" class="text-center">&copy; 2019 <a href="/" style="color: #fff; text-decoration: none;">Telesandi Festival</a>. All rights reserved.</p>        



    

        <script src="https://syntx.id/assets/vendors/jquery.min.js"></script>
        <script src="https://telsfest.syntx.id/js/all.min.js"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="https://telsfest.syntx.id/js/fontawesome.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>   
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://telsfest.syntx.id/js/v4-shims.min.js"></script>
        <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>



<script>
        jQuery(function(){
      jQuery("#bgndVideo").YTPlayer();
    });    
</script>

<script>


    $(window).on('scroll',function(){

        var header = $('#header');
        var scrollTop = $(this).scrollTop();
        var height = header.outerHeight();
        var offset = height / 2;
        var calc = (scrollTop / height)*1;

        var calcBox = calc/5;

        var calccolor = 255 - ((scrollTop/ height) * 255);


        var navcolor = document.getElementsByClassName("nav-link");
        document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,"+calc+")";
        document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,"+calcBox+")";

        var fa_bars = document.getElementById("navbar-toggler-icon");

        fa_bars.style.color = "rgba("+ calccolor +","+ calccolor +","+ calccolor +")";

        for (var i = 0; i < navcolor.length; i++) {

            navcolor[i].style.color = "rgba("+calccolor+","+calccolor+","+calccolor+")";
        }

        if(calc > '1'){
            document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,"+ calc+")";
            
            for (var i = 0; i < navcolor.length; i++) {
                navcolor[i].style.color = "rgba(0,0,0)";
            }
            document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,0.2)";

        }else if(calc < '0'){
            document.getElementById("navbar").style.backgroundColor = "rgba(255,255,255,0)";

            document.getElementById("navbar").style.boxShadow = "0px 2px 3px rgba(0,0,0,0)";

            
            for (var i = 0; i < navcolor.length; i++) {
                navcolor[i].style.color = "rgba(255,255,255)";
            }           
        }
    })
</script>
    </body>
</html>