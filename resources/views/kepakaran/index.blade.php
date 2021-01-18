@extends('layout/main')
    
@section('title', 'Kepakaran Lembaga Penelitian dan Pengabdian Kepada Masyarakat Universitas Ma Chung')

@section('container')
    <section class="hero-banner d-flex align-items-center">
        <div class="container text-center">
            <h2>Data Kepakaran</h2>
        </div>
    </section>

    <section class="container mt-5 mb-5">
        <table class="table">
            <thead>
                <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Bidang Kepakaran</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $expertises as $expertise )
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td>{{ $expertise->name }}</td>
                    @if ($expertise->nip)
                        <td>{{ $expertise->nip }}</td>
                    @else
                        <td>-</td>
                    @endif
                    <td>{{ $expertise->email }}</td>
                    @if ($expertise->bidang_kepakaran)
                        <td>{{ $expertise->bidang_kepakaran }}</td>
                    @else
                        <td>-</td>
                    @endif
                    <td><a href="/kepakaran/detail/{{ $expertise->slug }}" class="badge btn-info">detail</a></td>
                </tr>
                @endforeach
                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob Thornton</td>
                    <td>1020200994</td>
                    <td>jacob@gmail.com</td>
                    <td>Penjaminan Mutu</td>
                    <td><a href="#" class="badge btn-info">detail</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                    <td>Larry</td>
                    <td>1620203994</td>
                    <td>larry@gmail.com</td>
                    <td>Bioteknologi</td>
                    <td><a href="#" class="badge btn-info">detail</a></td>
                </tr> -->
            </tbody>
        </table>
    </section>

@endsection