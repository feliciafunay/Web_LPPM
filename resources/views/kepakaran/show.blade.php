@extends('layout/kepakaran')

@section('container')
    <div class="container">
        <h2 class="mb-5">Profil Dosen/Peneliti Universitas Ma Chung</h2>
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
                            <td style="width:30%"><b style="color:black">NIP</b></td>
                            @if ($expertises->nip)
                                <td>{{ $expertises->nip }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Satuan Kerja</b></td>
                            @if ($expertises->satuan_kerja)
                                <td>{{ $expertises->satuan_kerja }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Status Kepegawaian</b></td>
                            @if ($expertises->status_kepegawaian)
                                <td>{{ $expertises->status_kepegawaian }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Bidang Kepakaran</b></td>
                            @if ($expertises->bidang_kepakaran)
                                <td>{{ $expertises->bidang_kepakaran }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Golongan</b></td>
                            @if ($expertises->golongan)
                                <td>{{ $expertises->golongan }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Kemampuan Bahasa</b></td>
                            @if ($expertises->bahasa)
                                <td style="white-space:pre-line">{{ $expertises->bahasa }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Email</b></td>
                            <td>{{ $expertises->email }}</td>
                        </tr>
                        <tr>
                            <td><b style="color:black">Pendidikan</b></td>
                            @if ($expertises->pendidikan)
                                <td style="white-space:pre-line">{{ $expertises->pendidikan }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Pengalaman</b></td>
                            @if ($expertises->pengalaman)
                                <td style="white-space:pre-line">{{ $expertises->pengalaman }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                        <tr>
                            <td><b style="color:black">Kegiatan</b></td>
                            @if ($expertises->kegiatan)
                                <td style="white-space:pre-line">{{ $expertises->kegiatan }}</td>
                            @else
                                <td>-</td>
                            @endif 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>                  
    </div>
        
@endsection