@if(isset(Auth::user()->email))
    @extends('layout/admin_dashboard')
@else
    <script>window.location="/admin";</script>
@endif 
    
@section('title', 'Admin Penelitian')

@section('main')
    
    @if(isset(Auth::user()->email))
        <!-- MAIN -->
        <div class="col">
            <div class="mt-5">
                <div id="chart"></div>
            </div>
            <div class="single-pricing">
                <div class="single-pricing-content">
                    <h5>Penelitian</h5>
                    @if (session('status'))
                        <div class='alert alert-success'>
                            {{ session('status')}}
                        </div>
                    @endif
                    <a href="/admin/successlogin/penelitian/create" class="btn btn-primary mb-3 btn-sm" style="color:#fff; font-size:14px">Tambah Data</a>

                    @foreach( $researches as $rsc )
                    <div>
                        <a href="/penelitian/{{ $rsc->slug }}">{{ $rsc->title }} <br><span class="span">{{ $rsc->date }} By {{ $rsc->author }}</span></a>
                    </div>
                    <div class="row mb-3 ml-1">
                        <a href="/admin/successlogin/penelitian/{{ $rsc->id }}/edit" class="btn btn-outline-info btn-sm mr-1" style="color:#000; font-size:10px">Edit</a>
                        
                        <form action="/admin/successlogin/penelitian/{{ $rsc->id }}" method="post">
                            @csrf
                            @method('DELETE') 
                            <button class="btn btn-outline-danger btn-sm" style="color:#000; font-size:10px">Delete</button>
                        </form>
                    </div>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $researches->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    @else
        <script>window.location="/admin";</script>
    @endif

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
                    type: 'column'
                },
                title: {
                    text: 'Jumlah Berita Penelitian, {{$year3}}-{{$year1}}'
                },
                // subtitle: {
                //     text: 'Source: WorldClimate.com'
                // },
                xAxis: {
                    categories: [
                        {{$year3}}, {{$year2}}, {{$year1}}
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Berita'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Penelitian',
                    data: [{{$countR1}}, {{$countR2}}, {{$countR3}}]

                }]
            });
        </script>

    @endsection
@endsection

<!-- @section('container')    -->
    <!-- @if(isset(Auth::user()->email)) -->
        <!-- <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row"> -->
                        <!-- <div class="col-lg-3 offset-lg-9 col-xl-11 offset-xl-1">
                            
                        </div> -->
                        <!-- <img src="../img/logo-umc.png" alt="" class="img">
                        <div class="col-lg-3 offset-lg-9 col-xl-10 offset-xl-2">
                            
                            <div class="banner_content">
                                <h3>Universitas Ma Chung</h3>
                                <h4>LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT (LPPM) <br>(Center for Research and Community Service)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- </section> -->
    <!-- @else
        <script>window.location="/admin";</script>
    @endif -->

    <!-- <section class="area-padding-top area-padding-bottom">
        <div class="container-admin">
            <a href="/admin/successlogin" class="btn btn-primary mb-3 btn-sm">Back</a>
            @if (session('status'))
                <div class='alert alert-success'>
                    {{ session('status')}}
                </div>
            @endif
            
            <div class="single-pricing">
                <div class="single-pricing-content">
                    <h5>Penelitian</h5>
                    <a href="/admin/successlogin/penelitian/create" class="btn btn-primary mb-3 btn-sm" style="color:#fff; font-size:14px">Tambah Data</a>

                    @foreach( $researches as $rsc )
                    <div>
                        <a href="/penelitian/{{ $rsc->slug }}">{{ $rsc->title }} <br><span class="span">{{ $rsc->date }} By {{ $rsc->author }}</span></a>
                    </div>
                    <div class="row mb-3 ml-1">
                        <a href="/admin/successlogin/penelitian/{{ $rsc->id }}/edit" class="btn btn-outline-info btn-sm mr-1" style="color:#000; font-size:10px">Edit</a>
                        
                        <form action="/admin/successlogin/penelitian/{{ $rsc->id }}" method="post">
                            @csrf
                            @method('DELETE') 
                            <button class="btn btn-outline-danger btn-sm" style="color:#000; font-size:10px">Delete</button>
                        </form>
                    </div>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $researches->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <div class="col-sm-4 col-lg-4">
        <div class="single-pricing">
            <div class="single-pricing-content">
                <h5 class="mb-5">Pengabdian</h5>
                <a href="/pengabdian/create" class="btn btn-primary mb-3">Tambah Data</a>
                @foreach( $researches as $rsc )
                <div >
                    <a href="#">{{ $rsc->title }} <br><span class="span">{{ $rsc->date }} By {{ $rsc->author }}</span></a>
                </div>
                @endforeach

                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            {{ $researches->links() }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-lg-4">
        <div class="single-pricing">
            <div class="single-pricing-content">
                <h5>Forkomil & Conferences</h5>
                <a href="/pengabdian/create" class="btn btn-primary mb-3">Tambah Data</a>
                @foreach( $researches as $rsc )
                <div >
                    <a href="#">{{ $rsc->title }} <br><span class="span">{{ $rsc->date }} By {{ $rsc->author }}</span></a>
                </div>
                @endforeach

                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            {{ $researches->links() }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div> -->

<!-- @endsection -->