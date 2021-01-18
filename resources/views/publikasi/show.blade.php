@extends('layout/publikasi')

@section('container')
    <div class="col-lg-8 posts-list">
        <div class="single-post">
            <div class="feature-img">
                <img class="img-fluid" src="img/blog/main-blog/m-blog-1.jpg" alt="">
            </div>
            <div class="blog_details">
                <h2>{{ $publications->title }}</h2>
                <ul class="blog-info-link mt-3 mb-4">
                    <li><i class="far fa-user"></i> {{ $publications->author }}</li>
                    <li><i class="far fa-calendar"></i> {{ $publications->date }}</li>
                </ul>
                <p class="excert">{{ $publications->abstract }}</p>
            </div>
        </div>


        <!-- <div class="blog-author">
            <div class="media align-items-center">
                <img src="img/blog/author.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Harvard milan</h4>
                    </a>
                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
                </div>
            </div>
        </div> -->

        <!-- <div class="comments-area">
            <h4>05 Comments</h4>
            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="img/blog/c1.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                            </p>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>

                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="img/blog/c2.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                            </p>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>

                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="img/blog/c3.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                            </p>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>

                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" action="#" id="commentForm">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button button-contactForm">Send Message</button>
                </div>
            </form>
        </div> -->
            
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
        
@endsection