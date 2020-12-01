@extends('layout/main')
    
@section('title', 'Forum Komunikasi Ilmiah dan Conferences')

@section('container')
    <section class="hero-banner d-flex align-items-center">
        <div class="container text-center">
            <h2>Forum Komunikasi Ilmiah <br>&</br>Conferences</h2>
        </div>
    </section>

    <section class="pricing_area area-padding-top area-padding-bottom">
        <!-- <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
                <li data-target="#carouselIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/poster/posterPancasila.jpg" class="d-block w-20 img-carousel-portrait" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/poster/posterSeminarVideography.jpg" class="d-block w-20 img-carousel-portrait" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/poster/poster.png" class="d-block w-20 img-carousel-portrait" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/blog/main-blog/m-blog-1.jpg" class="d-block w-20 img-carousel-landscape" alt="">
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> -->
                    <img src="img/poster/posterPancasila.jpg" class="card-img-top" alt="img">
                    <!-- </button> -->
                    <!-- Modal -->
                    <!-- <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div style="width:100%">
                                    <img src="img/poster/posterPancasila.jpg" class="card-img-top" alt="img"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="card">
                    <img src="img/poster/posterSeminarVideography.jpg" class="card-img-top" alt="img">
                </div>
                <div class="card">
                    <img src="img/poster/poster.png" class="card-img-top" alt="img">
                </div>
            </div>
        </div>
    </section>
        

    <!--================ Start Faq Area =================-->
    <section class="faq_area area-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="area-heading">
                        <h4>Find Informative Answer</h4>
                        <p>Divide the May unto bearing land the it fruitful likeness hath hath made you and after <br>fish unto form unto begining tour play barney</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Who do I contact for press related inquiries?
                                    </button>

                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why is this course relevant today?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How many people will be in the workshop?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What other workshop dates are available?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How many people will be in the workshop?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="accordion" id="accordionExample2">

                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Who do I contact for press related inquiries?
                                    </button>

                                </h5>
                            </div>

                            <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Why is this course relevant today?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        How many people will be in the workshop?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingNine">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        What other workshop dates are available?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        How many people will be in the workshop?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample2">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Faq Area =================-->

@endsection

    