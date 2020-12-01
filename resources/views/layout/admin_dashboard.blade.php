<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Start Sidebar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand logo_h" href="{{ url('/admin/successlogin') }}"><span class="menu-collapsed">LPPM</span></a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
            <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="#">Dashboard</a>
                    <a class="dropdown-item" href="#">Profile</a>
                </div>
            </li>
            
            </ul>
        </div>
    </nav>

    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Dashboard</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <div id='submenu1' class="collapse sidebar-submenu">
                    <a href="{{ url('/admin/successlogin/penelitian') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Penelitian</span>
                    </a>
                    <a href="{{ url('/admin/successlogin/pengabdian') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Pengabdian</span>
                    </a>
                    <a href="{{ url('/admin/successlogin/publikasi') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Publikasi</span>
                    </a>
                    <a href="{{ url('/admin/successlogin/kepakaran') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Kepakaran</span>
                    </a>
                </div>
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed">Profile</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="{{ url('/admin/logout') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Logout <i class="fa fa-sign-out"></i></span>
                    </a>
                </div>            
               
            </ul>
        </div> <!-- End Sidebar -->

        @yield('main')
        
    </div>
    

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
                        <li><a href="https://jacips.machung.ac.id/">SENAM (Seminar Nasional Pengabdian Kepada Masyarakat Ma Chung)</a></li>
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

    @yield('script')
</body>
</html>