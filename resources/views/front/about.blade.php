@extends('front.master')

@section('title', 'About Us')
@section('about-active', 'active')

@section('hero')

    <x-hero-section title="About Us" subtitle="About"></x-hero-section>

@endsection

@section('content')
    <!-- About Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('assets-front') }}/img/about.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">About Us</div>
                    <h2 class="mb-4">Award Wining Consultancy Agency For Your Business</h2>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu
                        diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem
                        sit. Sanctus clita duo justo et tempor eirmod</p>
                    <div class="mb-4 row g-3">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="text-white fa fa-user-tie"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Business Planning</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem
                                    et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="text-white fa fa-chart-line"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Financial Analaysis</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem
                                    et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                    </div>
                    <a class="px-5 py-3 mt-2 btn btn-primary rounded-pill" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Features</div>
                    <h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
                    <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata
                        amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea
                        accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd
                    </p>
                    <a class="px-5 py-3 mt-2 btn btn-primary rounded-pill" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-cubes"></i>
                                </div>
                                <h6 class="mb-0">Best In Industry</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-percent"></i>
                                </div>
                                <h6 class="mb-0">99% Success Rate</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-award"></i>
                                </div>
                                <h6 class="mb-0">Award Winning</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-smile-beam"></i>
                                </div>
                                <h6 class="mb-0">100% Happy Client</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-user-tie"></i>
                                </div>
                                <h6 class="mb-0">Professional Advisors</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-headset"></i>
                                </div>
                                <h6 class="mb-0">24/7 Customer Support</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- Team Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Our Team</div>
                <h2 class="mb-5">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('assets-front') }}/img/team-1.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('assets-front') }}/img/team-2.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('assets-front') }}/img/team-3.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('assets-front') }}/img/team-4.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
