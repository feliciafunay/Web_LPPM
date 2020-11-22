@extends('layout/main')

@section('title', 'Form Ubah Kepakaran')

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
            <h2 class="mb-5">Form Ubah Kepakaran</h2>
            <form method="post" action="/admin/successlogin/kepakaran/{{ $expertises->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                        placeholder="Masukkan Nama" name="name" value="{{ old('name') ? old('name') : $expertises->name }}">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" 
                        placeholder="Masukkan NIP" name="nip" value="{{ old('nip') ? old('nip') : $expertises->nip }}">
                </div>
                @error('nip')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" 
                        placeholder="Masukkan Email" name="email" value="{{ old('email') ? old('email') : $expertises->email }}">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="bidang_kepakaran">Bidang Kepakaran</label>
                    <textarea class="form-control @error('bidang_kepakaran') is-invalid @enderror" id="bidang_kepakaran" 
                    placeholder="Masukkan Bidang Kepakaran" name="bidang_kepakaran" 
                    rows="5">{{ old('bidang_kepakaran') ? old('bidang_kepakaran') : $expertises->bidang_kepakaran }}</textarea>
                </div>
                @error('bidang_kepakaran')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="satuan_kerja">Satuan Kerja</label>
                    <input type="text" class="form-control @error('satuan_kerja') is-invalid @enderror" id="satuan_kerja" 
                        placeholder="Masukkan Satuan Kerja" name="satuan_kerja" value="{{ old('satuan_kerja') ? old('satuan_kerja') : $expertises->satuan_kerja }}">
                </div>
                @error('satuan_kerja')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="status_kepegawaian">Status Kepegawaian</label>
                    <input type="text" class="form-control @error('status_kepegawaian') is-invalid @enderror" id="status_kepegawaian" 
                        placeholder="Masukkan Status Kepegawaian" name="status_kepegawaian" value="{{ old('status_kepegawaian') ? old('status_kepegawaian') : $expertises->status_kepegawaian }}">
                </div>
                @error('status_kepegawaian')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="golongan">Golongan</label>
                    <input type="text" class="form-control @error('golongan') is-invalid @enderror" id="golongan" 
                        placeholder="Masukkan Golongan" name="golongan" value="{{ old('golongan') ? old('golongan') : $expertises->golongan }}">
                </div>
                @error('golongan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="bahasa">Kemampuan Bahasa</label>
                    <textarea class="form-control @error('bahasa') is-invalid @enderror" id="bahasa" 
                    placeholder="Masukkan Kemampuan Bahasa" name="bahasa" 
                    rows="5">{{ old('bahasa') ? old('bahasa') : $expertises->bahasa }}</textarea>
                </div>
                @error('bahasa')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <textarea class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" 
                    placeholder="Masukkan Pendidikan" name="pendidikan" 
                    rows="5">{{ old('pendidikan') ? old('pendidikan') : $expertises->pendidikan }}</textarea>
                </div>
                @error('pendidikan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <textarea class="form-control @error('pengalaman') is-invalid @enderror" id="pengalaman" 
                    placeholder="Masukkan Pengalaman" name="pengalaman" 
                    rows="5">{{ old('pengalaman') ? old('pengalaman') : $expertises->pengalaman }}</textarea>
                </div>
                @error('pengalaman')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <textarea class="form-control @error('kegiatan') is-invalid @enderror" id="kegiatan" 
                    placeholder="Masukkan Kegiatan" name="kegiatan" 
                    rows="5">{{ old('kegiatan') ? old('kegiatan') : $expertises->kegiatan }}</textarea>
                </div>
                @error('kegiatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <p>Foto</p>
                @if ($expertises->image)
                    <img src="/img/kepakaran/{{ $expertises->image }}" alt="">
                @else
                    <p><i>Belum ada foto.</i></p>
                @endif
                
                <div class="form-group mt-3">
                    <label for="image">Upload Foto</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </section>

@endsection