@extends('Frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Hello, Dhananjay</h2>
                    <span class="ipn-subtitle">View Dhananjay's profile and get in touch</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agent List Start ================================== -->
    <section>

        <div class="container">
            <div class="row">

                <!-- Side Search -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="adgt-wriop-block border rounded">
                        <div class="adgt-wriop-head">
                            <div class="adgt-wriop-bg"
                                style="background:red url(assets/frontend-assets/img/gallery-1.jpg) no-repeat"></div>
                        </div>
                        <div class="adgt-wriop-header-info px-3">
                            <div class="adgt-wriop-img">
                                <div class="adgt-wriop-img-fig">
                                    <img src="{{ asset('assets/frontend-assets/img/team-1') }}.jpg" class="img-fluid circle"
                                        alt="">
                                    <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                            <div class="adgt-wriop-cription">
                                <h5 class="mb-0"><a href="agent-detail.html">Mr. Kumar Dhananjay</a></h5>
                                <span class="font--medium small"><i class="fa-solid fa-location-dot me-2"></i>Liverpool,
                                    USA</span>
                            </div>
                            <div class="adgt-wriop-social">
                                <ul>
                                    <li><a href="JavaScript:Void(0);" class="bg--facebook"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" class="bg--twitter"><i
                                                class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" class="bg--googleplus"><i
                                                class="fa-brands fa-google-plus-g"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" class="bg--linkedin"><i
                                                class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="adgt-wriop-caption px-3 py-4">
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Call Us</h6>
                                    <p>+91 856 457 5243</p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-regular fa-envelope"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Drop A Mail</h6>
                                    <p>paythemezhub@gmail.com</p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-brands fa-whatsapp"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>WhatsApp</h6>
                                    <p>987 563 214</p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-brands fa-skype"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Skype</h6>
                                    <p>Dhananjay.preet</p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-solid fa-globe"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Website</h6>
                                    <p>Https://themezhub.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="adgt-wriop-footer py-3 px-3">
                            <div class="single-button d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-md font--bold btn-light-primary me-2 full-width"><i
                                        class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#offer"
                                    class="btn btn-md font--bold btn-light-success full-width"><i
                                        class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->
                </div>

                <!-- All Lists -->
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="p-3 bg-white rounded border">
                                <h6>About Agent</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga.</p>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                                    quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                    repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                    saepe eveniet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row gx-3 gy-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                            <h6>Featured Properties</h6>
                        </div>
                    </div>

                    <div class="row gx-3 gy-4">
                        <!-- Single Property -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="veshm-list-prty">
                                <div class="veshm-list-prty-figure">
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-6') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-7') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-8') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-prty-caption">
                                    <div class="veshm-list-kygf">
                                        <div class="veshm-list-kygf-flex">
                                            <div class="veshm-list-typess rent"><span>For Rent</span></div>
                                            <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                    class="prt-link-detail">Hearthstone Real Property</a></h5>
                                            <div class="vesh-aget-rates">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span class="resy-98">210 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>
                                    <div class="veshm-list-middle">
                                        <div class="veshm-list-icons">
                                            <ul>
                                                <li><i class="fa-solid fa-bed"></i><span>4 Bed</span></li>
                                                <li><i class="fa-solid fa-bath"></i><span>2 Ba</span></li>
                                                <li><i class="fa-solid fa-vector-square"></i><span>3200 Sqft</span></li>
                                                <li><i class="fa-solid fa-calendar-days"></i><span>Built 2020</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="veshm-list-footers">
                                        <div class="veshm-list-ftr786">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$10,590<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                        </div>
                                        <div class="veshm-list-ftr1707">
                                            <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer"
                                                class="btn btn-md btn-primary font--medium">Send Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Property -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="veshm-list-prty">
                                <div class="veshm-list-prty-figure">
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-7') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-2') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-9') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-prty-caption">
                                    <div class="veshm-list-kygf">
                                        <div class="veshm-list-kygf-flex">
                                            <div class="veshm-list-typess rent"><span>For Rent</span></div>
                                            <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                    class="prt-link-detail">The Goldfinch Real Property</a></h5>
                                            <div class="vesh-aget-rates">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span class="resy-98">452 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>
                                    <div class="veshm-list-middle">
                                        <div class="veshm-list-icons">
                                            <ul>
                                                <li><i class="fa-solid fa-bed"></i><span>3 Bed</span></li>
                                                <li><i class="fa-solid fa-bath"></i><span>3 Ba</span></li>
                                                <li><i class="fa-solid fa-vector-square"></i><span>2100 Sqft</span></li>
                                                <li><i class="fa-solid fa-calendar-days"></i><span>Built 2021</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="veshm-list-footers">
                                        <div class="veshm-list-ftr786">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$8,999<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                        </div>
                                        <div class="veshm-list-ftr1707">
                                            <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer"
                                                class="btn btn-md btn-primary font--medium">Send Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Property -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="veshm-list-prty">
                                <div class="veshm-list-prty-figure">
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-14') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-1') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-8') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-prty-caption">
                                    <div class="veshm-list-kygf">
                                        <div class="veshm-list-kygf-flex">
                                            <div class="veshm-list-typess rent"><span>For Rent</span></div>
                                            <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                    class="prt-link-detail">Dream Big Real Estate</a></h5>
                                            <div class="vesh-aget-rates">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span class="resy-98">340 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>
                                    <div class="veshm-list-middle">
                                        <div class="veshm-list-icons">
                                            <ul>
                                                <li><i class="fa-solid fa-bed"></i><span>4 Bed</span></li>
                                                <li><i class="fa-solid fa-bath"></i><span>3 Ba</span></li>
                                                <li><i class="fa-solid fa-vector-square"></i><span>2700 Sqft</span></li>
                                                <li><i class="fa-solid fa-calendar-days"></i><span>Built 2022</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="veshm-list-footers">
                                        <div class="veshm-list-ftr786">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$9,649<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                        </div>
                                        <div class="veshm-list-ftr1707">
                                            <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer"
                                                class="btn btn-md btn-primary font--medium">Send Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gx-3 gy-4 mt-4">
                        <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                            <h6>Recently Properties</h6>
                        </div>
                    </div>

                    <div class="row gx-3 gy-4">
                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-1') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-9') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-tags trending"><span><i
                                                class="fa-solid fa-meteor"></i>Trending</span></div>
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$7,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Goldfinch Real Property</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>2 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>2200 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-2') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$8,540<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Great Apex Realty Group</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>1 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>2150 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type fr-sale"><span>For Sale</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-3') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-tags featured"><span><i class="fa-solid fa-star"></i>Featured</span>
                                    </div>
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$50,752</h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Hearthstone Real Property</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>2 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>2500 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-4') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-15') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$10,890<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">The Select Brick Builders</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>1 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>2000 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-5') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-14') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$7,999<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Dream Big Real Estate Group</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>2300 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type fr-sale"><span>For Sale</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-6') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-14') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-tags featured"><span><i class="fa-solid fa-star"></i>Featured</span>
                                    </div>
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$80,750</h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Allen Tate Real Company</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>5 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>2800 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-7') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$9,540<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Arroyo Blue Real Property</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>2100 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-8') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-15') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-tags trending"><span><i
                                                class="fa-solid fa-meteor"></i>Trending</span></div>
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$8,570<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Catbird Realty Advisors</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>3000 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Agent List End ================================== -->

    <!-- Bid Offer Modal -->
    <div class="modal fade" id="offer" tabindex="-1" role="dialog" aria-labelledby="offermodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered offer-pop-form" role="document">
            <div class="modal-content" id="offermodal">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
                <div class="modal-body">
                    <div class="text-center">
                        <h2 class="mb-0">Bid Your Offer</h2>
                        <h4 class="mb-0">For 5689 Resot Relly, Canada</h4>
                        <a class="text-success font--bold" href="tel:4048651904">(404) 865-1904</a>
                    </div>
                    <div class="offer-form">
                        <form>

                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Dhananjay Preet">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control"
                                            placeholder="dhananjaypreet@gmail.com">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Offer</label>
                                        <input type="text" class="form-control" placeholder="$47,500">
                                    </div>
                                </div>

                            </div>

                            <div class="default-terms_wrap mb-3">
                                <div class="default-terms_flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="terms" value="option1">
                                        <label class="form-check-label small font--medium" for="terms">By submitting
                                            this form, you agree to our <a href="JavaScript:Void(0);"
                                                title="Terms of Service" class="theme-cl font--medium">Terms of
                                                Service</a> and <a href="JavaScript:Void(0);" title="Privacy Policy"
                                                class="theme-cl font--medium">Privacy Policy</a>.</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn full-width btn-primary">Submit Offer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

@endsection
