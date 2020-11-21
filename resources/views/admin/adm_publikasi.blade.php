@extends('layout/admin')
    
@section('title', 'Admin Publikasi')

@section('container')   
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-3 offset-lg-9 col-xl-11 offset-xl-1">
                        
                    </div> -->
                    <img src="../../img/logo-umc.png" alt="" class="img">
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

    <section class="area-padding-top area-padding-bottom">
        <div class="container-admin">
            <a href="/admin/successlogin" class="btn btn-primary mb-3 btn-sm">Back</a>
            @if (session('status'))
                <div class='alert alert-success'>
                    {{ session('status')}}
                </div>
            @endif
            
            <div class="single-pricing">
                <div class="single-pricing-content">
                    <h5>Publikasi</h5>
                    <a href="/publikasi/create" class="btn btn-primary mb-3 btn-sm" style="color:#fff; font-size:14px">Tambah Data</a>

                    @foreach( $publications as $publication )
                    <div>
                        <a href="/publikasi/{{ $publication->slug }}">{{ $publication->title }} <br><span class="span">{{ $publication->date }} By {{ $publication->author }}</span></a>
                    </div>
                    <div class="row mb-3 ml-1">
                        <a href="/publikasi/{{ $publication->id }}/edit" class="btn btn-outline-info btn-sm mr-1" style="color:#000; font-size:10px">Edit</a>
                        
                        <form action="/admin/successlogin/publikasi/{{ $publication->id }}" method="post">
                            @csrf
                            @method('DELETE') 
                            <button class="btn btn-outline-danger btn-sm" style="color:#000; font-size:10px">Delete</button>
                        </form>
                    </div>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $publications->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection