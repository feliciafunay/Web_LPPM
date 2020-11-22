@extends('layout/main')

@section('title', 'Form Tambah Berita Penelitian')

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

    <section class="area-padding-bottom area-padding-top">
        <div class="container">
            <h2 class="mb-5">Form Tambah Berita Penelitian</h2>
            <form method="post" action="{{url( '/admin/successlogin/penelitian' )}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukkan Judul Berita" name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Masukkan Deskripsi Berita" name="description" rows="10">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="author">Penulis</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Masukkan Nama Penulis Berita" name="author" value="{{ old('author') }}">
                </div>
                @error('author')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="date">Tanggal</label>
                    <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="Masukkan Tanggal Berita dibuat (yyyy-mm-dd)" name="date" value="{{ old('date') }}">
                </div>
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="thumbnail">Upload Thumbnail</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Berita</button>
            </form>
        </div>
    </section>

@endsection

    