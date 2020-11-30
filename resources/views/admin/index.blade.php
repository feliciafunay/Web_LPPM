@extends('layout/admin')
    
@section('title', 'Admin Home')

@section('container')
    <!-- Start Sidebar -->
    @if(isset(Auth::user()->email))
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand logo_h" href="{{ url('/') }}"><span class="menu-collapsed">LPPM</span></a>
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
    @else
        <script>window.location="/admin";</script>
    @endif

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
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Pengabdian</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Publikasi</span>
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

        <!-- MAIN -->
        <div class="col">
            <div class="mt-5">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <!-- <section class="blog_area area-padding">
        <div class="container">
            @if(isset(Auth::user()->email))
                <div class="container mb-5">
                    <h3>Welcome {{ Auth::user()->name }}! <br> Anda bisa mengubah, menambah, ataupun menghapus data di sini.</h3>
                </div>
            @else
                <script>window.location="/admin";</script>
            @endif
            
            <section>
                <div class="container">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Penelitian</h5>
                                <p class="card-text">Daftar penelitian Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/admin/successlogin/penelitian') }}"><small>View more</small></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pengabdian Kepada Masyarakat</h5>
                                <p class="card-text">Daftar pengabdian kepada masyarakat Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/admin/successlogin/pengabdian') }}"><small>View more</small></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Publikasi</h5>
                                <p class="card-text">Daftar publikasi peneliti Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/admin/successlogin/publikasi') }}"><small>View more</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kepakaran</h5>
                                <p class="card-text">Daftar kepakaran peneliti Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/admin/successlogin/kepakaran') }}"><small>View more</small></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Forum Komunikasi Ilmiah dan Conferences</h5>
                                <p class="card-text">Daftar Forum Komunikasi Ilmiah dan Conferences Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/forkomil-dan-conferences') }}"><small>View more</small></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Produk Riset</h5>
                                <p class="card-text">Daftar produk riset Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/riset') }}"><small>View more</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Paten</h5>
                                <p class="card-text">Data paten Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/paten') }}"><small>View more</small></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Hak Cipta</h5>
                                <p class="card-text">Data hak cipta Universitas Ma Chung</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/hakcipta') }}"><small>View more</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section> -->

    @section('script')
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
            Highcharts.chart('chart', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Diagram Jumlah Berita yang dipublish dari Tahun 2018-2020'
                },
                xAxis: {
                    categories: ['Penelitian', 'Pengabdian', 'Publikasi'],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Berita',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                // tooltip: {
                //     valueSuffix: ' millions'
                // },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor:
                        Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Tahun 2018',
                    data: [{{$countR18}}, {{$countCS18}}, {{$countP18}}]
                }, {
                    name: 'Tahun 2019',
                    data: [{{$countR19}}, {{$countCS19}}, {{$countP19}}]
                }, {
                    name: 'Tahun 2020',
                    data: [{{$countR20}}, {{$countCS20}}, {{$countP20}}]
                }]
            });
        </script>

        <script>
            Highcharts.chart('chart-penelitian', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Diagram Jumlah Berita yang dipublish dari Tahun 2018-2020'
                },
                xAxis: {
                    categories: ['Penelitian', 'Pengabdian', 'Publikasi'],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Berita',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                // tooltip: {
                //     valueSuffix: ' millions'
                // },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor:
                        Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Tahun 2018',
                    data: [10, 5, 5]
                }, {
                    name: 'Tahun 2019',
                    data: [5, 6, 6]
                }, {
                    name: 'Tahun 2020',
                    data: [8, 4, 7]
                }]
            });
        </script>
    @endsection
@endsection

    