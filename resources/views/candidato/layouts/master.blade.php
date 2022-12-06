<!DOCTYPE html>
<html lang="pt-AO" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('candidato/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>PetroHost - Empregos</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('candidato/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('candidato/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('candidato/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('candidato/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('candidato/css/nice-select.css')}}">					
        <link rel="stylesheet" href="{{asset('candidato/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('candidato/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('candidato/css/main.css')}}">
</head>
    <body>

          <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="/"><img width="200" src="https://www.petrohost.ao/resources/uploads/logo/2022-01-23/petrohost-alojamento-web-criacao-de-websites-aplicativos-registo-de-dominios.png" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="/">Início</a></li>
                      <li><a href="{{route('todas.vagas')}}">Vagas</a></li>
                      @if (Auth::user())
                          <li class="menu-has-children">
                            <a class="ticker-btn" style="margin-right: 5px;" href="{{route('register')}}">{{Auth::user()->name}}</a>
                            <ul>
                                <span style="cursor:pointer;">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit" class="b-none" style="border:none; padding:0px 46px;  background-color:white;">Sair</button>
                                    </form>
                                </span>
                            </ul>
                          </li>
                      @else
                      <li><a class="ticker-btn" href="{{route('register')}}">Criar Conta</a></li>
                      <li><a class="ticker-btn" href="{{route('login')}}">Iniciar Sessão</a></li>				          				          
                      @endif
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->


          {{-- Yield Section --}}
            @yield('content')
          {{-- end yield section --}}

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>SOU CANDIDATO</h6>
                            <ul class="footer-nav">
                                <li><a href="{{route('login')}}">Iniciar Sessão</a></li>
                                <li><a href="{{route('register')}}">Criar Conta</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                        <div class="single-footer-widget newsletter">
                            <h6>Newsletter</h6>
                            <p>Você pode confiar em nós. enviamos apenas ofertas promocionais, nem um único spam.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="form-group row" style="width: 100%">
                                        <div class="col-lg-8 col-md-12">
                                            <input name="EMAIL" placeholder="Preencha com e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                        </div> 
                                    
                                        <div class="col-lg-4 col-md-12">
                                            <button class="nw-btn primary-btn">Subscrever<span class="lnr lnr-arrow-right"></span></button>
                                        </div> 
                                    </div>		
                                    <div class="info"></div>
                                </form>
                            </div>		
                        </div>
                    </div>					
                </div>

                <div class="row footer-bottom d-flex justify-content-between">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Salomão Nunes
                    </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->		

        <script src="{{asset('candidato/js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('candidato/js/vendor/bootstrap.min.js')}}"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="{{asset('candidato/js/easing.min.js')}}"></script>			
        <script src="{{asset('candidato/js/hoverIntent.js')}}"></script>
        <script src="{{asset('candidato/js/superfish.min.js')}}"></script>	
        <script src="{{asset('candidato/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('candidato/js/jquery.magnific-popup.min.js')}}"></script>	
        <script src="{{asset('candidato/js/owl.carousel.min.js')}}"></script>			
        <script src="{{asset('candidato/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('candidato/js/jquery.nice-select.min.js')}}"></script>			
        <script src="{{asset('candidato/js/parallax.min.js')}}"></script>		
        <script src="{{asset('candidato/js/mail-script.js')}}"></script>	
        <script src="{{asset('candidato/js/main.js')}}"></script>	

    </body>
</html>



