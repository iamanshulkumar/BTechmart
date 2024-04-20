@extends('Frontend.website')
@section('content')

    <!-- ============================ Page Title Start================================== -->
    <section class="page-head bg-cover" style="background:#017efa url(assets/frontend-assets/img/about.jpg) no-repeat;" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-12">

                    <h1 class="text-white mb-4">Who We are<br> & Our Smart Mission</h1>
                    <p class="text-white mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                        est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                    <button type="button" class="btn btn-primary">Get In Touch</button>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Our Story Start ================================== -->
    <section>

        <div class="container">

            <!-- row Start -->
            <div class="row align-items-center justify-content-between">

                <div class="col-lg-6 col-md-6">
                    <div class="story-wrap explore-content">

                        <h2>Our Story</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                            provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                            dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                        <button type="button" class="btn btn-primary">Get Started</button>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <img src="{{ asset('assets/frontend-assets/img/bn-1.png')}}" class="img-fluid" alt="">
                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Our Story End ================================== -->

    <!-- ================= Our Team================= -->
    <section class="gray-simple">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-heading center">
                        <h2>Meet Our Team</h2>
                        <p>Professional & Dedicated Team</p>
                    </div>
                </div>
            </div>

            <div class="row gx-3 gy-4">

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-1.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Shaurya Preet</h4>
                            <span>Co-Founder</span>
                        </div>

                    </div>
                </div>

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-2.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Shivangi Preet</h4>
                            <span>Content Writer</span>
                        </div>

                    </div>
                </div>

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-3.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Yash Preet</h4>
                            <span>Content Writer</span>
                        </div>

                    </div>
                </div>

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-10.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Btechmart Preet</h4>
                            <span>CEO & Manager</span>
                        </div>

                    </div>
                </div>

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-5.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Rahul Gilkrist</h4>
                            <span>App Designer</span>
                        </div>

                    </div>
                </div>

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-6.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Adam Wilcard</h4>
                            <span>Web Developer</span>
                        </div>

                    </div>
                </div>

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-7.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Adam Wilcard</h4>
                            <span>Web Developer</span>
                        </div>

                    </div>
                </div>

                <!-- Single Teamm -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="team-grid">

                        <div class="teamgrid-user">
                            <img src="{{ asset('assets/frontend-assets/img/team-8.jpg')}}" alt="" class="img-fluid" />
                        </div>

                        <div class="teamgrid-content">
                            <h4>Adam Wilcard</h4>
                            <span>Web Developer</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =============================== Our Team ================================== -->

    <!-- ============================ Better Services ================================== -->
    <section class="classic-bg">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <div class="sec-heading center light">
                        <h2>We Provide Better Services For You</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores qui blanditiis praesentium.</p>
                    </div>
                </div>
            </div>

            <div class="row gy-5">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-servs-box light">
                        <div class="veshm-servs-box-icon">
                            <div class="veshm-posted-figure"><i class="fa-solid fa-house-circle-check"></i></div>
                        </div>
                        <div class="veshm-servs-box-caption">
                            <h4>Buy properties</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                                et voluptates repudiandae qui blanditiis praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-servs-box light">
                        <div class="veshm-servs-box-icon">
                            <div class="veshm-posted-figure"><i class="fa-solid fa-house-user"></i></div>
                        </div>
                        <div class="veshm-servs-box-caption">
                            <h4>Sell Your House</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                                et voluptates repudiandae qui blanditiis praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-servs-box light">
                        <div class="veshm-servs-box-icon">
                            <div class="veshm-posted-figure"><i class="fa-solid fa-house-flood-water"></i></div>
                        </div>
                        <div class="veshm-servs-box-caption">
                            <h4>Find Mortgage</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                                et voluptates repudiandae qui blanditiis praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-servs-box light">
                        <div class="veshm-servs-box-icon">
                            <div class="veshm-posted-figure"><i class="fa-solid fa-fire-flame-curved"></i></div>
                        </div>
                        <div class="veshm-servs-box-caption">
                            <h4>High Quality</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                                et voluptates repudiandae qui blanditiis praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-servs-box light">
                        <div class="veshm-servs-box-icon">
                            <div class="veshm-posted-figure"><i class="fa-solid fa-lira-sign"></i></div>
                        </div>
                        <div class="veshm-servs-box-caption">
                            <h4>Friendly Price</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                                et voluptates repudiandae qui blanditiis praesentium.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-servs-box light">
                        <div class="veshm-servs-box-icon">
                            <div class="veshm-posted-figure"><i class="fa-brands fa-rocketchat"></i></div>
                        </div>
                        <div class="veshm-servs-box-caption">
                            <h4>Easy Communication</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                                et voluptates repudiandae qui blanditiis praesentium.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Better Services ================================== -->


    <!-- ============================ Good Reviews By Customers ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2>Good Reviews By Customers</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gx-4 gy-4">

                <!-- Single Review -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="veshm-reviews-box">
                        <div class="veshm-reviews-flex">
                            <div class="veshm-reviews-thumb">
                                <div class="veshm-reviews-figure"><img src="{{ asset('assets/frontend-assets/img/team-1.jpg')}}"
                                        class="img-fluid circle" alt=""></div>
                            </div>
                            <div class="veshm-reviews-caption">
                                <div class="veshm-reviews-title">
                                    <h4>Lucia E. Nugent</h4>
                                </div>
                                <div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
                                <div class="veshm-reviews-rates">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star deactive"></i>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-reviews-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <figure class="mt-2 mb-0"><img src="{{ asset('assets/frontend-assets/img/brand/a.webp')}}" class="img-fluid"
                                    width="120" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Single Review -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="veshm-reviews-box">
                        <div class="veshm-reviews-flex">
                            <div class="veshm-reviews-thumb">
                                <div class="veshm-reviews-figure"><img src="{{ asset('assets/frontend-assets/img/team-2.jpg')}}"
                                        class="img-fluid circle" alt=""></div>
                            </div>
                            <div class="veshm-reviews-caption">
                                <div class="veshm-reviews-title">
                                    <h4>Brenda R. Smith</h4>
                                </div>
                                <div class="veshm-reviews-designation"><span>Founder of Yeloower</span></div>
                                <div class="veshm-reviews-rates">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-reviews-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <figure class="mt-2 mb-0"><img src="{{ asset('assets/frontend-assets/img/brand/b.webp')}}" class="img-fluid"
                                    width="120" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Single Review -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="veshm-reviews-box">
                        <div class="veshm-reviews-flex">
                            <div class="veshm-reviews-thumb">
                                <div class="veshm-reviews-figure"><img src="{{ asset('assets/frontend-assets/img/team-3.jpg')}}"
                                        class="img-fluid circle" alt=""></div>
                            </div>
                            <div class="veshm-reviews-caption">
                                <div class="veshm-reviews-title">
                                    <h4>Brian B. Wilkerson</h4>
                                </div>
                                <div class="veshm-reviews-designation"><span>CEO of Mark Soft</span></div>
                                <div class="veshm-reviews-rates">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-reviews-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <figure class="mt-2 mb-0"><img src="{{ asset('assets/frontend-assets/img/brand/c.webp')}}" class="img-fluid"
                                    width="120" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Single Review -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="veshm-reviews-box">
                        <div class="veshm-reviews-flex">
                            <div class="veshm-reviews-thumb">
                                <div class="veshm-reviews-figure"><img src="{{ asset('assets/frontend-assets/img/team-4.jpg')}}"
                                        class="img-fluid circle" alt=""></div>
                            </div>
                            <div class="veshm-reviews-caption">
                                <div class="veshm-reviews-title">
                                    <h4>Miguel L. Benbow</h4>
                                </div>
                                <div class="veshm-reviews-designation"><span>Founder of Mitche LTD</span></div>
                                <div class="veshm-reviews-rates">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star deactive"></i>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-reviews-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <figure class="mt-2 mb-0"><img src="{{ asset('assets/frontend-assets/img/brand/h.webp')}}" class="img-fluid"
                                    width="120" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Single Review -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="veshm-reviews-box">
                        <div class="veshm-reviews-flex">
                            <div class="veshm-reviews-thumb">
                                <div class="veshm-reviews-figure"><img src="{{ asset('assets/frontend-assets/img/team-5.jpg')}}"
                                        class="img-fluid circle" alt=""></div>
                            </div>
                            <div class="veshm-reviews-caption">
                                <div class="veshm-reviews-title">
                                    <h4>Hilda A. Sheppard</h4>
                                </div>
                                <div class="veshm-reviews-designation"><span>CEO of Doodle</span></div>
                                <div class="veshm-reviews-rates">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-reviews-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <figure class="mt-2 mb-0"><img src="{{ asset('assets/frontend-assets/img/brand/g.webp')}}" class="img-fluid"
                                    width="120" alt=""></figure>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Good Reviews By Customers ================================== -->
@endsection
