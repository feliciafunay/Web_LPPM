@extends('layout/main')
    
@section('title', 'Publikasi Lembaga Penelitian dan Pengabdian Kepada Masyarakat Universitas Ma Chung')

@section('container')
    <section class="hero-banner d-flex align-items-center">
        <div class="container text-center">
            <h2>Publikasi Penelitian</h2>
        </div>
    </section>

    <section class="container mt-5 mb-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Abstrak</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publications as $publication)
                <tr>
                    <td>{{ $publication->title }}</td>
                    <td>{{ $publication->author }}</td>
                    <td>{{ $publication->date }}</td>
                    <td>{{ $publication->abstract }}</td>
                    <td>
                    <a href="/publikasi/{{ $publication->slug }}" class="badge btn-info">detail</a> <br>
                    <a href="/publikasi/download/{{ $publication->title }}" class="badge btn-success">download</a></td>
                </tr>
                @endforeach
                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Judul Penelitian2</td>
                    <td>Donita Agustina</td>
                    <td>2019</td>
                    <td>Ini adalah abstrak 2.</td>
                    <td>
                    <a href="#" class="badge btn-info">detail</a> <br>
                    <a href="#" class="badge btn-success">download</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                    <td>Judul Penelitian3</td>
                    <td>Rey Tinus</td>
                    <td>2018</td>
                    <td>Ini adalah abstrak 3.</td>
                    <td>
                    <a href="#" class="badge btn-info">detail</a> <br>
                    <a href="#" class="badge btn-success">download</a></td>
                </tr> -->
            </tbody>
        </table>
        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    {{ $publications->links() }}
                </li>
            </ul>
        </nav>
    </section>

@endsection