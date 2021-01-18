@extends('layout/main')
    
@section('title', 'Pengabdian')

@section('container')
    <section class="hero-banner d-flex align-items-center">
        <div class="container text-center">
            <h2>Pengabdian<br>Kepada Masyarakat</h2>
        </div>
    </section>

    <section class="blog_area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">                        
                        @foreach( $comserv as $cs )
                        <article class="blog_item">
                            <div class="blog_item_img">
                                @if ($cs->thumbnail)
                                    <img class="card-img rounded-0" src="img/pengabdian/{{ $cs->thumbnail }}" alt="">
                                @else
                                    <img class="card-img rounded-0" src="img/blog/causes/causes-2.jpg" alt="">
                                @endif
                                
                                <a href="/pengabdian/{{ $cs->slug }}" class="blog_item_date">
                                    <h3>{{ $cs->date }}</h3>
                                    <!-- <p>Jan</p> -->
                                </a>
                            </div>
                        
                            <div class="blog_details">
                                <a class="d-inline-block" href="/pengabdian/{{ $cs->slug }}">
                                    <h2>{{ $cs->title }}</h2>
                                </a>
                                <p>{{ $cs->description }} <a href="/pengabdian/{{ $cs->slug }}" class="blog_item_date">read more</a></p>
                                <ul class="blog-info-link">
                                    <li><i class="far fa-user"></i> {{ $cs->author }}</li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                    
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    {{ $comserv->links() }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="{{ url('/penelitian') }}" class="d-flex">
                                        <p>Penelitian</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/pengabdian') }}" class="d-flex">
                                        <p>Pengabdian Kepada Masyarakat</p>
                                    </a>
                                </li>
                                <li>
                                    <!-- <a href="{{ url('/forkomil-dan-conferences') }}" class="d-flex"> -->
                                        <p>Forum Komunikasi Ilmiah dan Conferences</p>
                                    <!-- </a> -->
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h4 class="widget_title">e-Jurnal Universitas Ma Chung</h4>
                            <div class="media post_item">
                                <!-- <img src="img/blog/popular-post/post1.jpg" alt="post"> -->
                                <div class="media-body">
                                    <a href="https://jurnal.machung.ac.id/index.php/kurawal">
                                        <h5>Kurawal - Jurnal Teknologi, Informasi dan Industri</h5>
                                    </a>
                                    <!-- <p>2020-03-10</p> -->
                                </div>
                            </div>
                            <div class="media post_item">
                                <!-- <img src="img/blog/popular-post/post2.jpg" alt="post">                               -->
                                <div class="media-body">
                                    <a href="https://jurnal.machung.ac.id/index.php/parsimonia">
                                        <h5>Parsimonia - Jurnal Ekonomi dan Bisnis</h5>
                                    </a>
                                    <!-- <p>2018-08-12</p> -->
                                </div>
                            </div>
                            <div class="media post_item">
                                <!-- <img src="img/blog/popular-post/post2.jpg" alt="post">                               -->
                                <div class="media-body">
                                    <a href="https://ejournal.mrcpp.machung.ac.id/index.php/ijnp">
                                        <h5>IJNP - Indonesian Journal of Natural Pigments</h5>
                                    </a>
                                    <!-- <p>2019-11-04</p> -->
                                </div>
                            </div>
                            <div class="media post_item">
                                <!-- <img src="img/blog/popular-post/post2.jpg" alt="post">                               -->
                                <div class="media-body">
                                    <a href="https://jurnal.machung.ac.id/index.php/klausa">
                                        <h5>KLAUSA (Kajian Linguistik, Pembelajaran Bahasa, dan Sastra)</h5>
                                    </a>
                                    <!-- <p>2019-11-04</p> -->
                                </div>
                            </div>
                            <div class="media post_item">
                                <!-- <img src="img/blog/popular-post/post2.jpg" alt="post">                               -->
                                <div class="media-body">
                                    <a href="https://jurnal.machung.ac.id/index.php/citradirga">
                                        <h5>Citradirga - Jurnal Desain Komunikasi Visual dan Intermedia</h5>
                                    </a>
                                    <!-- <p>2019-11-04</p> -->
                                </div>
                            </div>
                            <div class="media post_item">
                                <!-- <img src="img/blog/popular-post/post2.jpg" alt="post">                               -->
                                <div class="media-body">
                                    <a href="https://jacips.machung.ac.id/">
                                        <h5>JACIPS - Journal of Community Practice and Social Welfare</h5>
                                    </a>
                                    <!-- <p>2019-11-04</p> -->
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection