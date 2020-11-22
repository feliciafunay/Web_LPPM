@extends('layout/main')
    
@section('title', 'LPPM Ma Chung')

@section('container')
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-3 offset-lg-9 col-xl-11 offset-xl-1">
                        
                    </div> -->
                    <img src="../img/logo-umc.png" alt="" class="img">
                    <div class="col-lg-3 offset-lg-9 col-xl-10 offset-xl-2">
                        
                        <div class="banner_content">
                            <h3>Universitas Ma Chung</h3>
                            <h4>LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT (LPPM) <br>(Center for Research and Community Service)</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="area-padding-bottom area-padding-top">
        <div class="container">
            <!-- <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <img src="../img/icon/bar-chart.png" alt="" class="img-icon mb-20">
                                </div>
                                <div class="single-about-content">
                                    <a href="{{ url('/penelitian') }}" class="typography"><h5>Penelitian</h5></a> 
                                    <p>Keterangan </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <img src="../img/icon/university.png" alt="" class="img-icon mb-10">
                                </div>
                                <div class="single-about-content">
                                    <a href="{{ url('/pengabdian-kepada-masyarakat') }}" class="typography"><h5>Pengabdian Kepada Masyarakat</h5></a>
                                    <p>Keterangan </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <img src="../img/icon/user.png" alt="" class="img-icon mb-20">
                                </div>
                                <div class="single-about-content">
                                    <a href="{{ url('/forkomil-dan-conferences') }}" class="typography"><h5>Forum Komunikasi Ilmiah dan Conferences</h5></a>
                                    <p>Keterangan </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="card-deck">
                <div class="card">
                    <img src="../img/blog/1.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Publikasi</h5>
                        <p class="card-text">Daftar publikasi peneliti Universitas Ma Chung</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/publikasi') }}"><small>View more</small></a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/blog/1.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Kepakaran</h5>
                        <p class="card-text">Daftar kepakaran peneliti Universitas Ma Chung</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/kepakaran') }}"><small>View more</small></a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/blog/1.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Forum Komunikasi Ilmiah dan Conferences</h5>
                        <p class="card-text">Daftar Forum Komunikasi Ilmiah dan Conferences Universitas Ma Chung</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/forkomil-dan-conferences') }}"><small>View more</small></a>
                    </div>
                </div>
            </div>
            <div class="card-deck mt-4">
                <div class="card">
                    <img src="../img/blog/2.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Produk Riset</h5>
                        <p class="card-text">Daftar produk riset Universitas Ma Chung</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/riset') }}"><small>View more</small></a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/blog/2.png" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Paten</h5>
                        <p class="card-text">Data paten Universitas Ma Chung</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/paten') }}"><small>View more</small></a>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/blog/2.png" class="card-img-top" alt="img">
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
        </div>
    </section>

    <!-- <section class="feature-area area-padding bg_one">
        <div class="container">
            <div class="row align-items-center">

                <div class="offset-lg-6 col-lg-6">
                    <div class="area-heading light">
                        <h4>Coming Soon</h4>
                        <p>Keterangan</p>
                    </div>
                    <div class="row">
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <img src="../img/icon/checklist.png" alt="" class="img-icon-cs">
                                </div>
                                <div class="single-feature-content">
                                    <h5>Pusat Studi Fakultas</h5>
                                    <p>Keterangan </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <img src="../img/icon/team.png" alt="" class="img-icon-cs">
                                </div>
                                <div class="single-feature-content">
                                    <h5>KKN Penelitian dan Pengabdian kepada Masyarakat</h5>
                                    <p>Keterangan </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="pricing_area area-padding-top area-padding-bottom">
        <div class="container">
            <div class="row">   
                <div class="col-sm-6 col-lg-6">
                    <div class="single-pricing">
                        <div class="single-pricing-content">
                            <a href="{{ url('/penelitian') }}"><h5>Penelitian</h5></a>
                            @foreach( $researches as $rsc )
                            <div >
                                <a href="/penelitian/{{ $rsc->slug }}">{{ $rsc->title }} <br><span class="span">{{ $rsc->date }} By {{ $rsc->author }}</span></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="single-pricing">
                        <div class="single-pricing-content">
                            <a href="{{ url('/pengabdian-kepada-masyarakat') }}"><h5>Pengabdian</h5></a>
                            @foreach( $comserv as $cs )
                            <div >
                                <a href="#">{{ $cs->title }} <br><span class="span">{{ $cs->date }} By {{ $cs->author }}</span></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

    