@extends('layout/main')

@section('title', 'Form Tambah Publikasi')

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
            <h2 class="mb-5">Form Tambah Publikasi</h2>
            <p><i>* Wajib diisi</i></p>

            <form method="post" action="{{url( '/admin/successlogin/publikasi' )}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Judul*</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukkan Judul Publikasi" name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="abstract">Abstrak*</label>
                    <textarea class="form-control @error('abstract') is-invalid @enderror" id="abstract" placeholder="Masukkan Abstrak" name="abstract" rows="10">{{ old('abstract') }}</textarea>
                </div>
                @error('abstract')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="author">Penulis*</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Masukkan Nama Penulis" name="author" value="{{ old('author') }}">
                </div>
                @error('author')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="date">Tanggal*</label>
                    <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="Masukkan Tanggal Publikasi (yyyy-mm-dd)" name="date" value="{{ old('date') }}">
                </div>
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="file">Upload File</label>
                    <input type="file" class="form-control-file" id="file" name="file">
                </div>
                @error('file')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </section>

@endsection