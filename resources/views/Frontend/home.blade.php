@extends('frontend.website')
@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero-header" style="background: url(assets/forntend-assets/img/banner-5.jpg) no-repeat" data-overlay="6">
        <div class="container">
            <div class="inner-banner-text text-center">
                <h1>Discover A Beautiful<br />Place With Us</h1>
                <p class="text-light">
                    Would you explore nature paradise in the world, let't find the
                    best property in California withusss.
                </p>
            </div>

            <div class="full-search-2 mt-5">
                <div class="hero-search-content colored">
                    <div class="row classic-search-box m-0 gx-2">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                            <div class="form-group briod">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Ex. villa, town etc." />
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                            <div class="form-group briod">
                                <div class="input-with-icon">
                                    <select class="form-control">
                                        <option value="1">Property types</option>
                                        <option value="2">Townhome</option>
                                        <option value="3">Office & Studio</option>
                                        <option value="4">Apartments</option>
                                        <option value="5">Condos</option>
                                        <option value="6">Bungalow</option>
                                        <option value="7">Farmhouse</option>
                                        <option value="8">Tiny House</option>
                                    </select>
                                    <i class="fa-solid fa-house-crack"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <select class="form-control">
                                        <option value="1">Select City</option>
                                        <option value="2">Huntingdon</option>
                                        <option value="3">Fenland</option>
                                        <option value="4">Aylesbury</option>
                                        <option value="5">Amersham</option>
                                        <option value="6">Macclesfield</option>
                                        <option value="7">Congleton</option>
                                        <option value="8">UNantwich</option>
                                    </select>
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                            <div class="fliox-search-wiop">
                                <div class="form-group me-2">
                                    <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#filter"
                                        class="btn btn-filter-search"><i class="fa-solid fa-filter"></i>Filter</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary full-width">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================= Explore Categories =============================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2>Browse More category</h2>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos
                            dolores
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gx-3 gy-4">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>26 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-chimney-crack abs"></i><i
                                    class="fa-solid fa-house-chimney-crack"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Townhome</h4>
                                <div class="vesh-prt-location">06 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>20 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-vihara abs"></i><i class="fa-solid fa-vihara"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Bungalow</h4>
                                <div class="vesh-prt-location">04 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>19 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-chimney abs"></i><i class="fa-solid fa-house-chimney"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Condos</h4>
                                <div class="vesh-prt-location">07 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>22 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-tents abs"></i><i class="fa-solid fa-tents"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Container</h4>
                                <div class="vesh-prt-location">05 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>42 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-ship abs"></i><i class="fa-solid fa-ship"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Houseboat</h4>
                                <div class="vesh-prt-location">08 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>16 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-laptop abs"></i><i class="fa-solid fa-house-laptop"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Office & Studio</h4>
                                <div class="vesh-prt-location">03 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>14 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-medical abs"></i><i class="fa-solid fa-house-medical"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Mediterranean</h4>
                                <div class="vesh-prt-location">05 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>17 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-school-flag abs"></i><i class="fa-solid fa-school-flag"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Tiny House</h4>
                                <div class="vesh-prt-location">06 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>32 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-user abs"></i><i class="fa-solid fa-house-user"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Apartments</h4>
                                <div class="vesh-prt-location">07 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>28 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-landmark-flag abs"></i><i class="fa-solid fa-landmark-flag"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Farmhouse</h4>
                                <div class="vesh-prt-location">10 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>18 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-dungeon abs"></i><i class="fa-solid fa-dungeon"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Cape Cod</h4>
                                <div class="vesh-prt-location">04 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="vesh-categ-box light">
                        <a href="search-property.html" class="vesh-categ-links">
                            <div class="veshm-list-098"><span>12 List</span></div>
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-warehouse abs"></i><i class="fa-solid fa-warehouse"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <h4 class="vesh-content-title">Split Level</h4>
                                <div class="vesh-prt-location">02 Locations</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================= End Explore Categories =============================== -->

    <!-- ============================ Valuable Step Start ================================== -->
    <section class="classic-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center light">
                        <h2>Choose What You Need</h2>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos
                            dolores
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center gx-4 gy-4">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-posted-box-y78">
                        <div class="veshm-posted-head-y78">
                            <div class="veshm-posted-figure">
                                <img src="{{ asset('assets/forntend-assets/img/hs-1.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="veshm-posted-body-y78">
                            <h2>Buy A Property</h2>
                            <p>
                                Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae
                            </p>
                        </div>
                        <div class="veshm-posted-footer-y78">
                            <a href="JavaScript:Void(0);" class="btn btn-start">Get Start</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-posted-box-y78 active">
                        <div class="veshm-posted-head-y78">
                            <div class="veshm-posted-figure">
                                <img src="{{ asset('assets/forntend-assets/img/hs-3.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="veshm-posted-body-y78">
                            <h2>Sell A Property</h2>
                            <p>
                                Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae
                            </p>
                        </div>
                        <div class="veshm-posted-footer-y78">
                            <a href="JavaScript:Void(0);" class="btn btn-start">Get Start</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="veshm-posted-box-y78">
                        <div class="veshm-posted-head-y78">
                            <div class="veshm-posted-figure">
                                <img src="{{ asset('assets/forntend-assets/img/hs-2.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="veshm-posted-body-y78">
                            <h2>Rent A Property</h2>
                            <p>
                                Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae
                            </p>
                        </div>
                        <div class="veshm-posted-footer-y78">
                            <a href="JavaScript:Void(0);" class="btn btn-start">Get Start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Valuable Step End ================================== -->

    <!-- ============================ Why Choose Us Start ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                    <div class="side-thumber-wrap">
                        <div class="side-effect"></div>
                        <div class="side-thumber-img">
                            <figure>
                                <img src="{{ asset('assets/forntend-assets/img/side-1.png')}}" class="img-fluid rounded" alt="" />
                            </figure>
                        </div>
                        <div class="side-thumber-caption">
                            <div class="single-side-thumber">
                                <div class="single-side-icon">
                                    <i class="fa-solid fa-snowflake"></i>
                                </div>
                                <div class="single-side-text">
                                    <h6>We have more than 12 years of experience</h6>
                                </div>
                            </div>
                            <div class="single-side-thumber">
                                <div class="single-side-icon">
                                    <i class="fa-solid fa-snowflake"></i>
                                </div>
                                <div class="single-side-text">
                                    <h6>We have worked with more than 25K agents</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="choose-us-head">
                        <div class="choose-us-wriops mb-2">
                            <span class="font--bold label-light-success px-3 py-2 rounded">Choose Us</span>
                        </div>
                        <div class="choose-title">
                            <h2>Why Choose Us For Your House<br />Needs?</h2>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores
                            </p>
                        </div>
                        <div class="veshm-icon-box-list mt-4">
                            <ul>
                                <li>
                                    <div class="vib-list-wrap21">
                                        <div class="vib-list-icon">
                                            <i class="fa-solid fa-house-circle-check"></i>
                                        </div>
                                        <div class="vib-list-caption">
                                            <h5>Comfirtable House Designs</h5>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos
                                                ducimus qui blanditiis praesentium voluptatum
                                                deleniti atque corrupti quos dolores
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="vib-list-wrap21">
                                        <div class="vib-list-icon">
                                            <i class="fa-solid fa-user-clock"></i>
                                        </div>
                                        <div class="vib-list-caption">
                                            <h5>Professional & Friendly Developers</h5>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos
                                                ducimus qui blanditiis praesentium voluptatum
                                                deleniti atque corrupti quos dolores
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="vib-list-wrap21">
                                        <div class="vib-list-icon">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div class="vib-list-caption">
                                            <h5>Fully & Fast Response</h5>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos
                                                ducimus qui blanditiis praesentium voluptatum
                                                deleniti atque corrupti quos dolores
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="vib-list-wrap21">
                                        <div class="vib-list-icon">
                                            <i class="fa-regular fa-comments"></i>
                                        </div>
                                        <div class="vib-list-caption">
                                            <h5>Free Chat Supports</h5>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos
                                                ducimus qui blanditiis praesentium voluptatum
                                                deleniti atque corrupti quos dolores
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Why Choose Us End ====================== -->

    <!-- ============================ What Happening ================================== -->
    <section class="image-cover" style="background: url(assets/forntend-assets/img/banner-2.jpg) no-repeat" data-overlay="1">
        <div class="ht-30"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center light">
                        <h2 class="mb-3">What Happening in Veshm</h2>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos
                            dolores
                        </p>
                    </div>
                    <div class="caption-wrap-content text-center">
                        <a href="half-map.html" class="btn btn-theme btn-lg rounded font--bold">Explore More
                            Property</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ht-60"></div>
    </section>
    <!-- ============================ What Happening End ================================== -->

    <!-- ============================ Achievements End ================================== -->
    <section class="p-0">
        <div class="container ovr-top">
            <div class="row g-xl-4 g-lg-3 g-md-3 g-3">
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="veshm-achivement">
                        <div class="veshm-achivement-icons">
                            <i class="fa-solid fa-house-fire"></i>
                        </div>
                        <div class="veshm-achivement-content">
                            <h2>200<span class="theme-cl">M+</span></h2>
                            <p>Property Sales</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="veshm-achivement">
                        <div class="veshm-achivement-icons">
                            <i class="fa-solid fa-city"></i>
                        </div>
                        <div class="veshm-achivement-content">
                            <h2>37<span class="theme-cl">K+</span></h2>
                            <p>Home For Rent</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="veshm-achivement">
                        <div class="veshm-achivement-icons">
                            <i class="fa-solid fa-house-circle-check"></i>
                        </div>
                        <div class="veshm-achivement-content">
                            <h2>10<span class="theme-cl">K+</span></h2>
                            <p>Recently Sold</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="veshm-achivement">
                        <div class="veshm-achivement-icons">
                            <i class="fa-solid fa-face-laugh-wink"></i>
                        </div>
                        <div class="veshm-achivement-content">
                            <h2>07<span class="theme-cl">K</span></h2>
                            <p>Happy Agents</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Achievements End ================================== -->

    <!-- ================================= Recently Property ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2>Recent Property For You</h2>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos
                            dolores
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gx-3 gy-4">
                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type fr-sale"><span>For Sale</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-1.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-8.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-9.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">1907,549</h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Agile Real
                                                Estate Group</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>6 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>4 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>2600 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type"><span>For rent</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-2.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-10.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-11.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">
                                            $8,800<span class="monthly">/Months</span>
                                        </h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Goldfinch Real
                                                Property</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>2 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>2 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>1800 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type"><span>For rent</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-3.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-12.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-13.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">
                                            $6,990<span class="monthly">/Months</span>
                                        </h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Hearthstone
                                                Real Property</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>4 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>2 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>2100 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type fr-sale"><span>For Sale</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-4.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-14.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-15.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">$170,840</h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Dream Big Real
                                                Estate</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>5 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>3 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>2250 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type"><span>For rent</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-5.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-15.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-10.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">
                                            $9,400<span class="monthly">/Months</span>
                                        </h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Allen Tate Real
                                                Company</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>4 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>2 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>1900 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type"><span>For rent</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-6.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-11.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-14.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">
                                            $10,500<span class="monthly">/Months</span>
                                        </h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Banyan Real
                                                Estate Group</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>3 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>3 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>2300 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type fr-sale"><span>For Sale</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-7.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-13.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-11.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">$80,700</h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Agile Real
                                                Estate Group</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>4 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>3 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>2150 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="veshm-list-wraps">
                        <div class="veshm-type"><span>For rent</span></div>

                        <div class="veshm-list-thumb">
                            <button type="button" class="compare-btn">
                                <i class="fa-solid fa-repeat"></i>Compare
                            </button>
                            <div class="veshm-list-img-slide">
                                <div class="veshm-list-click">
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-8.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-12.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                    <div>
                                        <a href="single-property-1.html"><img src="{{ asset('assets/forntend-assets/img/prt-9.png')}}"
                                                class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="veshm-list-block">
                            <div class="veshm-list-head">
                                <div class="veshm-list-head-caption">
                                    <div class="rlhc-price">
                                        <h4 class="rlhc-price-name theme-cl">
                                            $9,890<span class="monthly">/Months</span>
                                        </h4>
                                    </div>
                                    <div class="listing-short-detail-flex">
                                        <h5 class="rlhc-title-name verified">
                                            <a href="single-property-1.html" class="prt-link-detail">Catbird Realty
                                                Advisors</a>
                                        </h5>
                                    </div>
                                    <div class="veshm-list-icons">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-bed"></i><span>3 Bed</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bath"></i><span>3 Ba</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-vector-square"></i><span>2500 Sqft</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="veshm-list-footer">
                                <div class="prty-veryfy">
                                    <i class="fa-solid fa-circle-check"></i>Property & Email
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Property -->
            </div>
        </div>
    </section>
    <!-- ================= Recent Property End ================= -->

    <!-- ============================ Call To Action ================================== -->
    <section class="bg-cover call-action-container dark"
        style="background: #065eb5 url(assets/img/footer-bg-dark.png) no-repeat">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
                    <div class="call-action-wrap">
                        <div class="call-action-caption">
                            <h2 class="text-light">Are You Already Working With Us?</h2>
                            <p class="text-light">
                                At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque
                                corrupti quos dolores et quas molestias
                            </p>
                        </div>
                        <div class="call-action-form">
                            <form>
                                <div class="newsltr-form">
                                    <input type="text" class="form-control" placeholder="Enter Your email" />
                                    <button type="button" class="btn btn-subscribe">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->



    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
                <div class="modal-header">
                    <div class="mdl-thumb">
                        <img src="{{ asset('assets/forntend-assets/img/ico.png')}}" class="img-fluid" width="70" alt="" />
                    </div>
                    <div class="mdl-title">
                        <h4 class="modal-header-title">Hello, Again</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="modal-login-form">
                        <form>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="name@example.com" />
                                <label>User Name</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" placeholder="Password" />
                                <label>Password</label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary full-width font--bold btn-lg">
                                    Log In
                                </button>
                            </div>

                            <div class="modal-flex-item mb-3">
                                <div class="modal-flex-first">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="savepassword"
                                            value="option1" />
                                        <label class="form-check-label" for="savepassword">Save Password</label>
                                    </div>
                                </div>
                                <div class="modal-flex-last">
                                    <a href="JavaScript:Void(0);">Forget Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="social-login">
                        <ul>
                            <li>
                                <a href="JavaScript:Void(0);" class="btn connect-fb"><i
                                        class="fa-brands fa-facebook"></i>Facebook</a>
                            </li>
                            <li>
                                <a href="JavaScript:Void(0);" class="btn connect-google"><i
                                        class="fa-brands fa-google"></i>Google+</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <p>
                        Don't have an account yet?<a href="signup.html" class="theme-cl font--bold ms-1">Sign
                            Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Filter Modal -->
    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filtermodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered filter-popup" role="document">
            <div class="modal-content" id="filtermodal">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
                <div class="modal-header">
                    <h4 class="modal-header-sub-title">
                        Start Your <span class="theme-cl">Filter</span>
                    </h4>
                </div>
                <div class="modal-body p-0">
                    <div class="filter-header">
                        <ul class="nav nav-tabs" id="filTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="buy-tab" data-bs-toggle="tab"
                                    data-bs-target="#buy" type="button" role="tab" aria-controls="buy"
                                    aria-selected="true">
                                    Buy
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent"
                                    type="button" role="tab" aria-controls="rent" aria-selected="false">
                                    Rent
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sold-tab" data-bs-toggle="tab" data-bs-target="#sold"
                                    type="button" role="tab" aria-controls="sold" aria-selected="false">
                                    Sold
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-content">
                        <div class="tab-content" id="filTabContent">
                            <div class="tab-pane fade show active" id="buy" role="tabpanel"
                                aria-labelledby="buy-tab">
                                <div class="full-tabs-group">
                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Select Property Types</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-1" class="form-check-input" name="a-1"
                                                            type="checkbox" />
                                                        <label for="a-1" class="form-check-label">All
                                                            types</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-2" class="form-check-input" name="a-2"
                                                            type="checkbox" />
                                                        <label for="a-2" class="form-check-label">House</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-3" class="form-check-input" name="a-3"
                                                            type="checkbox" />
                                                        <label for="a-3" class="form-check-label">Apartment &
                                                            Unit</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-4" class="form-check-input" name="a-4"
                                                            type="checkbox" />
                                                        <label for="a-4" class="form-check-label">Townhouse</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-5" class="form-check-input" name="a-5"
                                                            type="checkbox" />
                                                        <label for="a-5" class="form-check-label">Villa</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-6" class="form-check-input" name="a-6"
                                                            type="checkbox" />
                                                        <label for="a-6" class="form-check-label">Land</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-7" class="form-check-input" name="a-7"
                                                            type="checkbox" />
                                                        <label for="a-7" class="form-check-label">Acreage</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-8" class="form-check-input" name="a-8"
                                                            type="checkbox" />
                                                        <label for="a-8" class="form-check-label">Rural</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-9" class="form-check-input" name="a-9"
                                                            type="checkbox" />
                                                        <label for="a-9" class="form-check-label">Block Of
                                                            Units</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a-10" class="form-check-input" name="a-10"
                                                            type="checkbox" />
                                                        <label for="a-10" class="form-check-label">Retirement
                                                            Living</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Choose Price</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">$50,000</option>
                                                            <option value="2">$75,000</option>
                                                            <option value="3">$1000,000</option>
                                                            <option value="4">$125,000</option>
                                                            <option value="5">$150,000</option>
                                                            <option value="6">$175,000</option>
                                                            <option value="7">$2000,000</option>
                                                            <option value="8">$225,000</option>
                                                            <option value="9">$250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">$50,000</option>
                                                            <option value="2">$75,000</option>
                                                            <option value="3">$1000,000</option>
                                                            <option value="4">$125,000</option>
                                                            <option value="5">$150,000</option>
                                                            <option value="6">$175,000</option>
                                                            <option value="7">$2000,000</option>
                                                            <option value="8">$225,000</option>
                                                            <option value="9">$250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Bedrooms</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Bathrooms</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Outdoor features</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-1" class="form-check-input" name="s-1"
                                                            type="checkbox" />
                                                        <label for="s-1" class="form-check-label">Swimming
                                                            pool</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-2" class="form-check-input" name="s-2"
                                                            type="checkbox" />
                                                        <label for="s-2" class="form-check-label">Garage</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-3" class="form-check-input" name="s-3"
                                                            type="checkbox" />
                                                        <label for="s-3" class="form-check-label">Balcony</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-4" class="form-check-input" name="s-4"
                                                            type="checkbox" />
                                                        <label for="s-4" class="form-check-label">Outdoor
                                                            area</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-5" class="form-check-input" name="s-5"
                                                            type="checkbox" />
                                                        <label for="s-5" class="form-check-label">Undercover
                                                            parking</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-6" class="form-check-input" name="s-6"
                                                            type="checkbox" />
                                                        <label for="s-6" class="form-check-label">Shed</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-7" class="form-check-input" name="s-7"
                                                            type="checkbox" />
                                                        <label for="s-7" class="form-check-label">Fully
                                                            fenced</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-8" class="form-check-input" name="s-8"
                                                            type="checkbox" />
                                                        <label for="s-8" class="form-check-label">Outdoor
                                                            spa</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-9" class="form-check-input" name="s-9"
                                                            type="checkbox" />
                                                        <label for="s-9" class="form-check-label">Tennis
                                                            court</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s-10" class="form-check-input" name="s-10"
                                                            type="checkbox" />
                                                        <label for="s-10" class="form-check-label">Car
                                                            Parking</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Indoor features</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-1" class="form-check-input" name="r-1"
                                                            type="checkbox" />
                                                        <label for="r-1" class="form-check-label">Ensuite</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-2" class="form-check-input" name="r-2"
                                                            type="checkbox" />
                                                        <label for="r-2"
                                                            class="form-check-label">Dishwasher</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-3" class="form-check-input" name="r-3"
                                                            type="checkbox" />
                                                        <label for="r-3" class="form-check-label">Study</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-4" class="form-check-input" name="r-4"
                                                            type="checkbox" />
                                                        <label for="r-4" class="form-check-label">Built in
                                                            robes</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-5" class="form-check-input" name="r-5"
                                                            type="checkbox" />
                                                        <label for="r-5" class="form-check-label">Alarm
                                                            system</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-6" class="form-check-input" name="r-6"
                                                            type="checkbox" />
                                                        <label for="r-6" class="form-check-label">Broadband</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-7" class="form-check-input" name="r-7"
                                                            type="checkbox" />
                                                        <label for="r-7"
                                                            class="form-check-label">Floorboards</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-8" class="form-check-input" name="r-8"
                                                            type="checkbox" />
                                                        <label for="r-8" class="form-check-label">Gym</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-9" class="form-check-input" name="r-9"
                                                            type="checkbox" />
                                                        <label for="r-9" class="form-check-label">Rumpus
                                                            room</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r-10" class="form-check-input" name="r-10"
                                                            type="checkbox" />
                                                        <label for="r-10" class="form-check-label">Workshop</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Keywords</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Air con, pool, garage, solar, ensuite..." />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                <div class="full-tabs-group">
                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Select Property Types</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-1" class="form-check-input" name="a1-1"
                                                            type="checkbox" />
                                                        <label for="a1-1" class="form-check-label">All
                                                            types</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-2" class="form-check-input" name="a1-2"
                                                            type="checkbox" />
                                                        <label for="a1-2" class="form-check-label">House</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-3" class="form-check-input" name="a1-3"
                                                            type="checkbox" />
                                                        <label for="a1-3" class="form-check-label">Apartment &
                                                            Unit</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-4" class="form-check-input" name="a1-4"
                                                            type="checkbox" />
                                                        <label for="a1-4" class="form-check-label">Townhouse</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-5" class="form-check-input" name="a1-5"
                                                            type="checkbox" />
                                                        <label for="a1-5" class="form-check-label">Villa</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-6" class="form-check-input" name="a1-6"
                                                            type="checkbox" />
                                                        <label for="a1-6" class="form-check-label">Land</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-7" class="form-check-input" name="a1-7"
                                                            type="checkbox" />
                                                        <label for="a1-7" class="form-check-label">Acreage</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-8" class="form-check-input" name="a1-8"
                                                            type="checkbox" />
                                                        <label for="a1-8" class="form-check-label">Rural</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-9" class="form-check-input" name="a1-9"
                                                            type="checkbox" />
                                                        <label for="a1-9" class="form-check-label">Block Of
                                                            Units</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a1-10" class="form-check-input" name="a1-10"
                                                            type="checkbox" />
                                                        <label for="a1-10" class="form-check-label">Retirement
                                                            Living</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Choose Price</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">$50,000</option>
                                                            <option value="2">$75,000</option>
                                                            <option value="3">$1000,000</option>
                                                            <option value="4">$125,000</option>
                                                            <option value="5">$150,000</option>
                                                            <option value="6">$175,000</option>
                                                            <option value="7">$2000,000</option>
                                                            <option value="8">$225,000</option>
                                                            <option value="9">$250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">$50,000</option>
                                                            <option value="2">$75,000</option>
                                                            <option value="3">$1000,000</option>
                                                            <option value="4">$125,000</option>
                                                            <option value="5">$150,000</option>
                                                            <option value="6">$175,000</option>
                                                            <option value="7">$2000,000</option>
                                                            <option value="8">$225,000</option>
                                                            <option value="9">$250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Bedrooms</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Bathrooms</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Outdoor features</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-1" class="form-check-input" name="s1-1"
                                                            type="checkbox" />
                                                        <label for="s1-1" class="form-check-label">Swimming
                                                            pool</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-2" class="form-check-input" name="s1-2"
                                                            type="checkbox" />
                                                        <label for="s1-2" class="form-check-label">Garage</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-3" class="form-check-input" name="s1-3"
                                                            type="checkbox" />
                                                        <label for="s1-3" class="form-check-label">Balcony</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-4" class="form-check-input" name="s1-4"
                                                            type="checkbox" />
                                                        <label for="s1-4" class="form-check-label">Outdoor
                                                            area</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-5" class="form-check-input" name="s1-5"
                                                            type="checkbox" />
                                                        <label for="s1-5" class="form-check-label">Undercover
                                                            parking</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-6" class="form-check-input" name="s1-6"
                                                            type="checkbox" />
                                                        <label for="s1-6" class="form-check-label">Shed</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-7" class="form-check-input" name="s1-7"
                                                            type="checkbox" />
                                                        <label for="s1-7" class="form-check-label">Fully
                                                            fenced</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-8" class="form-check-input" name="s1-8"
                                                            type="checkbox" />
                                                        <label for="s1-8" class="form-check-label">Outdoor
                                                            spa</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-9" class="form-check-input" name="s1-9"
                                                            type="checkbox" />
                                                        <label for="s1-9" class="form-check-label">Tennis
                                                            court</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s1-10" class="form-check-input" name="s1-10"
                                                            type="checkbox" />
                                                        <label for="s1-10" class="form-check-label">Car
                                                            Parking</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Indoor features</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-1" class="form-check-input" name="r1-1"
                                                            type="checkbox" />
                                                        <label for="r1-1" class="form-check-label">Ensuite</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-2" class="form-check-input" name="r1-2"
                                                            type="checkbox" />
                                                        <label for="r1-2"
                                                            class="form-check-label">Dishwasher</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-3" class="form-check-input" name="r1-3"
                                                            type="checkbox" />
                                                        <label for="r1-3" class="form-check-label">Study</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-4" class="form-check-input" name="r1-4"
                                                            type="checkbox" />
                                                        <label for="r1-4" class="form-check-label">Built in
                                                            robes</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-5" class="form-check-input" name="r1-5"
                                                            type="checkbox" />
                                                        <label for="r1-5" class="form-check-label">Alarm
                                                            system</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-6" class="form-check-input" name="r1-6"
                                                            type="checkbox" />
                                                        <label for="r1-6" class="form-check-label">Broadband</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-7" class="form-check-input" name="r1-7"
                                                            type="checkbox" />
                                                        <label for="r1-7"
                                                            class="form-check-label">Floorboards</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-8" class="form-check-input" name="r1-8"
                                                            type="checkbox" />
                                                        <label for="r1-8" class="form-check-label">Gym</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-9" class="form-check-input" name="r1-9"
                                                            type="checkbox" />
                                                        <label for="r1-9" class="form-check-label">Rumpus
                                                            room</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r1-10" class="form-check-input" name="r1-10"
                                                            type="checkbox" />
                                                        <label for="r1-10" class="form-check-label">Workshop</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Keywords</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Air con, pool, garage, solar, ensuite..." />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                                <div class="full-tabs-group">
                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Select Property Types</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-1" class="form-check-input" name="a2-1"
                                                            type="checkbox" />
                                                        <label for="a2-1" class="form-check-label">All
                                                            types</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-2" class="form-check-input" name="a2-2"
                                                            type="checkbox" />
                                                        <label for="a2-2" class="form-check-label">House</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-3" class="form-check-input" name="a2-3"
                                                            type="checkbox" />
                                                        <label for="a2-3" class="form-check-label">Apartment
                                                            &
                                                            Unit</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-4" class="form-check-input" name="a2-4"
                                                            type="checkbox" />
                                                        <label for="a2-4" class="form-check-label">Townhouse</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-5" class="form-check-input" name="a2-5"
                                                            type="checkbox" />
                                                        <label for="a2-5" class="form-check-label">Villa</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-6" class="form-check-input" name="a2-6"
                                                            type="checkbox" />
                                                        <label for="a2-6" class="form-check-label">Land</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-7" class="form-check-input" name="a2-7"
                                                            type="checkbox" />
                                                        <label for="a2-7" class="form-check-label">Acreage</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-8" class="form-check-input" name="a2-8"
                                                            type="checkbox" />
                                                        <label for="a2-8" class="form-check-label">Rural</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-9" class="form-check-input" name="a2-9"
                                                            type="checkbox" />
                                                        <label for="a2-9" class="form-check-label">Block Of
                                                            Units</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="a2-10" class="form-check-input" name="a2-10"
                                                            type="checkbox" />
                                                        <label for="a2-10" class="form-check-label">Retirement
                                                            Living</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Choose Price</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">$50,000</option>
                                                            <option value="2">$75,000</option>
                                                            <option value="3">$1000,000</option>
                                                            <option value="4">$125,000</option>
                                                            <option value="5">$150,000</option>
                                                            <option value="6">$175,000</option>
                                                            <option value="7">$2000,000</option>
                                                            <option value="8">$225,000</option>
                                                            <option value="9">$250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">$50,000</option>
                                                            <option value="2">$75,000</option>
                                                            <option value="3">$1000,000</option>
                                                            <option value="4">$125,000</option>
                                                            <option value="5">$150,000</option>
                                                            <option value="6">$175,000</option>
                                                            <option value="7">$2000,000</option>
                                                            <option value="8">$225,000</option>
                                                            <option value="9">$250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Bedrooms</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Bathrooms</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Outdoor features</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-1" class="form-check-input" name="s2-1"
                                                            type="checkbox" />
                                                        <label for="s2-1" class="form-check-label">Swimming
                                                            pool</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-2" class="form-check-input" name="s2-2"
                                                            type="checkbox" />
                                                        <label for="s2-2" class="form-check-label">Garage</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-3" class="form-check-input" name="s2-3"
                                                            type="checkbox" />
                                                        <label for="s2-3" class="form-check-label">Balcony</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-4" class="form-check-input" name="s2-4"
                                                            type="checkbox" />
                                                        <label for="s2-4" class="form-check-label">Outdoor
                                                            area</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-5" class="form-check-input" name="s2-5"
                                                            type="checkbox" />
                                                        <label for="s2-5" class="form-check-label">Undercover
                                                            parking</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-6" class="form-check-input" name="s2-6"
                                                            type="checkbox" />
                                                        <label for="s2-6" class="form-check-label">Shed</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-7" class="form-check-input" name="s2-7"
                                                            type="checkbox" />
                                                        <label for="s2-7" class="form-check-label">Fully
                                                            fenced</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-8" class="form-check-input" name="s2-8"
                                                            type="checkbox" />
                                                        <label for="s2-8" class="form-check-label">Outdoor
                                                            spa</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-9" class="form-check-input" name="s2-9"
                                                            type="checkbox" />
                                                        <label for="s2-9" class="form-check-label">Tennis
                                                            court</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="s2-10" class="form-check-input" name="s2-10"
                                                            type="checkbox" />
                                                        <label for="s2-10" class="form-check-label">Car
                                                            Parking</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Indoor features</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <ul class="row p-0 m-0">
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-1" class="form-check-input" name="r2-1"
                                                            type="checkbox" />
                                                        <label for="r2-1" class="form-check-label">Ensuite</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-2" class="form-check-input" name="r2-2"
                                                            type="checkbox" />
                                                        <label for="r2-2"
                                                            class="form-check-label">Dishwasher</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-3" class="form-check-input" name="r2-3"
                                                            type="checkbox" />
                                                        <label for="r2-3" class="form-check-label">Study</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-4" class="form-check-input" name="r2-4"
                                                            type="checkbox" />
                                                        <label for="r2-4" class="form-check-label">Built in
                                                            robes</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-5" class="form-check-input" name="r2-5"
                                                            type="checkbox" />
                                                        <label for="r2-5" class="form-check-label">Alarm
                                                            system</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-6" class="form-check-input" name="r2-6"
                                                            type="checkbox" />
                                                        <label for="r2-6" class="form-check-label">Broadband</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-7" class="form-check-input" name="r2-7"
                                                            type="checkbox" />
                                                        <label for="r2-7"
                                                            class="form-check-label">Floorboards</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-8" class="form-check-input" name="r2-8"
                                                            type="checkbox" />
                                                        <label for="r2-8" class="form-check-label">Gym</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-9" class="form-check-input" name="r2-9"
                                                            type="checkbox" />
                                                        <label for="r2-9" class="form-check-label">Rumpus
                                                            room</label>
                                                    </div>
                                                </li>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <div class="form-check form-check-inline">
                                                        <input id="r2-10" class="form-check-input" name="r2-10"
                                                            type="checkbox" />
                                                        <label for="r2-10" class="form-check-label">Workshop</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-tabs-group">
                                        <div class="single-tabs-group-header">
                                            <h5>Keywords</h5>
                                        </div>

                                        <div class="single-tabs-group-content">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Air con, pool, garage, solar, ensuite..." />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="filt-buttons-updates">
                        <button type="button" class="btn btn-dark">Clear Filter</button>
                        <button type="button" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection
