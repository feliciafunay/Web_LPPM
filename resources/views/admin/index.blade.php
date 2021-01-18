@if(isset(Auth::user()->email))
    @extends('layout/admin_dashboard')
@else
    <script>window.location="/admin";</script>
@endif    

@section('title', 'Admin Dashboard')

@section('main')
    
    @if(isset(Auth::user()->email))
        <!-- MAIN -->
        
        <div class="col">
        @if (session('status'))
            <div class='alert alert-success'>
                {{ session('status')}}
            </div>
        @endif
            <div class="mt-5">
                <div id="chart"></div>
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
                    type: 'bar'
                },
                title: {
                    text: 'Diagram Jumlah Berita yang dipublish dari Tahun {{$year3}}-{{$year1}}'
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
                    name: 'Tahun {{$year3}}',
                    data: [{{$countR1}}, {{$countCS1}}, {{$countP1}}]
                }, {
                    name: 'Tahun {{$year2}}',
                    data: [{{$countR2}}, {{$countCS2}}, {{$countP2}}]
                }, {
                    name: 'Tahun {{$year1}}',
                    data: [{{$countR3}}, {{$countCS3}}, {{$countP3}}]
                }]
            });
        </script>
    @endsection
@endsection

    