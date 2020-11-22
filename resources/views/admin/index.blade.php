@extends('layout/admin')
    
@section('title', 'Admin Home')

@section('container')
    @if(isset(Auth::user()->email))
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
    @else
        <script>window.location="/admin";</script>
    @endif

    <section class="blog_area area-padding">
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
    </section>

@endsection

    