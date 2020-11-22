@extends('layout/kepakaran')

@section('container')
    <div class="container">
        <h2 class="mb-5">Profil Sivitas LPPM Universitas Ma Chung</h2>
        <div class="single-post">
            <div class="feature-img">
                @if ($expertises->image)
                    <img src="/img/kepakaran/{{ $expertises->image }}" alt="" width=130>
                @else
                    <img src="/img/blog/c1.jpg" alt="" width=130>
                @endif 
            </div>
            <div class="blog_details">
                <h2 class="mb-5">{{ $expertises->name }}</h2>
                <table class="table table-bordered" style="min-width:150px">
                    <tbody>
                        <tr>
                            <td>NIP</td>
                            <td>{{ $expertises->nip }}</td>
                        </tr>
                        <tr>
                            <td>Satuan Kerja</td>
                            <td>{{ $expertises->satuan_kerja }}</td>
                        </tr>
                        <tr>
                            <td>Status Kepegawaian</td>
                            <td>{{ $expertises->status_kepegawaian }}</td>
                        </tr>
                        <tr>
                            <td>Bidang Kepakaran</td>
                            <td>{{ $expertises->bidang_kepakaran }}</td>
                        </tr>
                        <tr>
                            <td>Golongan</td>
                            <td>{{ $expertises->golongan }}</td>
                        </tr>
                        <tr>
                            <td>Kemampuan Bahasa</td>
                            <td style="white-space:pre-line">{{ $expertises->bahasa }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $expertises->email }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td style="white-space:pre-line">{{ $expertises->pendidikan }}</td>
                        </tr>
                        <tr>
                            <td>Pengalaman</td>
                            <td style="white-space:pre-line">{{ $expertises->pengalaman }}</td>
                        </tr>
                        <tr>
                            <td>Kegiatan</td>
                            <td style="white-space:pre-line">{{ $expertises->kegiatan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>                  
    </div>
        
@endsection