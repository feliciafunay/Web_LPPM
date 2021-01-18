<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>{{ $comserv->title }}</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome.min.css')}}">
</head>
<body>

    <header class="header_area">	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}">LPPM</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="http://machung.ac.id/">Ma Chung</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{ url('/penelitian') }}">Penelitian</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{ url('/pengabdian') }}">Pengabdian</a></li> 
                            <!-- <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Sign In</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{ url('/download') }}">Download</a></li>   -->
                            <!-- <li class="nav-item"><a class="nav-link" href="price.html">Price</a></li>     
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="feature.html">Features</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="price.html">Price</a></li>
                                    <li class="nav-item"><a class="nav-link" href="element.html">Element</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li>  -->
                            <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
                        </ul>
                    </div>
                    <!-- <div class="right-button">
                        <ul>
                            <li class="shop-icon"><a href="#"><i class="ti-shopping-cart-full"></i><span>0</span></a></li>
                            <li><a class="sign_up" href="">Sign Up</a></li>
                        </ul>
                    </div>  -->
                </div>
            </nav>
        </div>
    </header>

    <section class="hero-banner d-flex align-items-center">
        <div class="container text-center">
            <h2>Pengabdian kepada Masyarakat</h2>
        </div>
    </section>

    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                @yield('container')
                
            </div>
        
        </div>
    </section>

        

    <footer class="footer-area" id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <img src="../img/Logo-UMC-White.png" alt="" class="img-icon mb-20">
                    <p>LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT (LPPM) <br>UNIVERSITAS MA CHUNG</p>
                    <P> </P>
                    <ul>
                        <li><a href="mailto:lppm@machung.ac.id" class=>Email: lppm@machung.ac.id </a><br><a href="tel:0341-550151">Telp: 0341-550151 (ext. 4010)</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Location</h4>
                    <P>Villa Puncak Tidar N-01 <br>Ged. RnD Lt. Ground <br>Malang 65151 <br>Indonesia</P>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Link</h4>
                    <ul>
                        <li><a href="http://sinta.ristekbrin.go.id/">SINTA</a></li>
                        <li><a href="http://simlitabmas.ristekdikti.go.id/">SIMLITABMAS</a></li>
                        <li><a href="http://semar.machung.ac.id/">SEMAR (Sistem Manajemen Abdimas dan Riset Ma Chung)</a></li>
                        <li><a href="https://senam.machung.ac.id/">SENAM (Seminar Nasional Pengabdian Kepada Masyarakat Ma Chung)</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Universitas Ma Chung
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="https://www.facebook.com/Universitas.Ma.Chung"><i class="ti-facebook"></i></a>
                    <a href="https://twitter.com/ma_chung"><i class="ti-twitter"></i></a>
                    <a href="https://www.instagram.com/universitasmachung/"><i class="ti-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCujbjU-9Ce5q0zTuTot5wQw"><i class="ti-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
</body>
</html>