@extends('Frontend.website')
@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero-header" style="background: url(assets/frontend-assets/img/banner-5.jpg) no-repeat"
        data-overlay="6">
        <div class="container">
            <div class="inner-banner-text text-center">
                <div class="fs-3 text-white">Find A Home <b class="text-white">You Will Love</b></div>
                {{-- <p class="text-light">
                    Would you explore nature paradise in the world, let't find the
                    best property in California withusss.
                </p> --}}
            </div>
        </div>
    </div>
    {{-- search bar --}}
    <div class="container">
        <div class="sbar">
            <div class="full-search-2  search-bar">
                <div class="hero-search-content colored shadow">
                    <div class="scrollable-nav mb-2 mx-1 hideInMobile ">
                        <ul class="nav nav-underline nav-pills d-flex overflow-auto flex-nowrap">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Buy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Rent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Constructions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Interior Design</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#top-gainer">Top Gainers</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row classic-search-box m-0 gx-2">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            <div class="form-group briod">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control "
                                        placeholder="Search By City, Locality, Project" />
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                </div>
                            </div>
                        </div>

                        {{-- Property type --}}
                        {{-- <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 hideInMobile">
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
                        </div> --}}

                        {{-- Select city --}}
                        {{-- <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 hideInMobile">
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
                        </div> --}}

                        {{-- Filert & search btn --}}
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 hideInMobile">
                            <div class="fliox-search-wiop">
                                <div class="form-group me-2 ">
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

            <div class="row p-2">

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 p-0 ">
                    <div class="vesh-categ-box light">
                        <a href="JavaScript:Void(0);" class="vesh-categ-links" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            {{-- <div class="veshm-list-098"><span>26 List</span></div> --}}
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-chimney-crack abs"></i><i
                                    class="fa-solid fa-house-chimney-crack"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <div class="vesh-content-title">Buy</div>
                                {{-- <div class="vesh-prt-location">06 Locations</div> --}}
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 p-0 ">
                    <div class="vesh-categ-box light">
                        <a href="JavaScript:Void(0);" class="vesh-categ-links" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            {{-- <div class="veshm-list-098"><span>20 List</span></div> --}}
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-vihara abs"></i><i class="fa-solid fa-vihara"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <div class="vesh-content-title">Sell</div>
                                {{-- <div class="vesh-prt-location">04 Locations</div> --}}
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 p-0 ">
                    <div class="vesh-categ-box light">
                        <a href="JavaScript:Void(0);" class="vesh-categ-links" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            {{-- <div class="veshm-list-098"><span>19 List</span></div> --}}
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-chimney abs"></i><i class="fa-solid fa-house-chimney"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <div class="vesh-content-title">Rent</div>
                                {{-- <div class="vesh-prt-location">07 Locations</div> --}}
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 p-0 ">
                    <div class="vesh-categ-box light">
                        <a href="JavaScript:Void(0);" class="vesh-categ-links" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            {{-- <div class="veshm-list-098"><span>22 List</span></div> --}}
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-tents abs"></i><i class="fa-solid fa-tents"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <div class="vesh-content-title">Contructions</div>
                                {{-- <div class="vesh-prt-location">05 Locations</div> --}}
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 p-0 ">
                    <div class="vesh-categ-box light">
                        <a href="JavaScript:Void(0);" class="vesh-categ-links" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            {{-- <div class="veshm-list-098"><span>42 List</span></div> --}}
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-ship abs"></i><i class="fa-solid fa-ship"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <div class="vesh-content-title">Interior Design</div>
                                {{-- <div class="vesh-prt-location">08 Locations</div> --}}
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 p-0 ">
                    <div class="vesh-categ-box light">
                        <a href="#top-gainer" class="vesh-categ-links">
                            {{-- <div class="veshm-list-098"><span>16 List</span></div> --}}
                            <div class="vesh-categ-icons">
                                <i class="fa-solid fa-house-laptop abs"></i><i class="fa-solid fa-house-laptop"></i>
                            </div>
                            <div class="vesh-categ-content">
                                <div class="vesh-content-title">Property Insights</div>
                                {{-- <div class="vesh-prt-location">03 Locations</div> --}}
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ============================= End Explore Categories =============================== -->



    <!-- ================================= Recently Property ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading left">
                        <h2>Recently posted properties</h2>
                        <p>
                            Fresh properties, be quick before they rent out
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gx-3 gy-4">
                <!-- Property slider -->
                <div class="col-xl-12 col-lg-14 col-md-14 col-sm-12 p-0">
                    <div class="properties-slide">

                        <!-- Single Property -->
                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn">
                                        <i class="fa-regular fa-image"></i>
                                        6
                                    </button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div>
                                                <a href="/singleproperty">
                                                    <img src="{{ asset('assets/frontend-assets/img/prt-1.png') }}"
                                                        class="img-fluid mx-auto" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="/singleproperty">
                                                    <img src="{{ asset('assets/frontend-assets/img/prt-9.png') }}"
                                                        class="img-fluid mx-auto" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="/singleproperty">
                                                    <img src="{{ asset('assets/frontend-assets/img/prt-8.png') }}"
                                                        class="img-fluid mx-auto" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹7,500<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
                                                        class="prt-link-detail">Banyan Real Estate Group</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada
                                                </div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>2 Bath
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>2200 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type fr-sale"><span>For sale</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-regular fa-image"></i>5</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-2.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹100,400</h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
                                                        class="prt-link-detail">31/78 Benchmark Realty LLC</a></h5>
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

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>1800 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <!-- Single Property -->
                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-regular fa-image"></i>3</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-3.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹8,599<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
                                                        class="prt-link-detail">Blue Apogee Realty Enclave</a></h5>
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

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>4 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>2 Bath
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>2300 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Property -->

                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-regular fa-image"></i>6</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-4.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-14.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-15.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹9,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
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

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>5 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>2100 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-regular fa-image"></i>8</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-5.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹8,499<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
                                                        class="prt-link-detail">Dream Big Real Estate</a></h5>
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

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>2 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>2 Bath
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>1700 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-regular fa-image"></i>2</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-7.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-9.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-14.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹7,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
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

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>2 Bath
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>2200 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type fr-sale"><span>For sale</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-regular fa-image"></i>5</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-6.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-15.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹89,990</h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
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

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>2 Bath
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>2000 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="single-slide">
                            <div class="veshm-list-wraps">
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-regular fa-image"></i>5</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-8.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹7,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="/singleproperty"
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

                                    {{-- <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div> --}}
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class=" "><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class=" "><i class="fa-solid fa-bath"></i></span>2 Bathth
                                                </li>
                                                <li><span class=" "><i
                                                            class="fa-solid fa-vector-square"></i></span>2200 Sft</li>
                                            </ul>
                                        </div>
                                    </div>
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



    <!-- ================================= 1 News slider ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Trending News</h2>
                        <p>Related to Real Estate Investment</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="news-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->

                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= 1 News slider End ================================== -->


    <!-- ============================ Curated rental collections ================================== -->
    <section class="bg-3">
        <div class="container  p-3 rounded ">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Curated rental collections</h2>
                        <p>
                            in your city
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-xl-5 g-lg-3">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12 p-0">
                    <div class="rental-slide">
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">50+ Properties</div>
                                <a href="JavaScript:Void(0);" class="veshm-location-figure">
                                    <img src="https://www.bhadragroup.com/wp-content/uploads/2023/04/invest-in-jayanagar.jpg"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>For Family</h4>
                                    <div class="vesh-aget-rates">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span class="resy-98">322 Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">22+ Properties</div>
                                <a href="JavaScript:Void(0);" class="veshm-location-figure">
                                    <img src="https://as1.ftcdn.net/v2/jpg/04/35/45/98/1000_F_435459893_mLTyAWymbvIkJvBlQxN2NjgaCTlx366g.jpg"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>For Single Men</h4>
                                    <div class="vesh-aget-rates">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span class="resy-98">410 Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">25+ Properties</div>
                                <a href="JavaScript:Void(0);" class="veshm-location-figure">
                                    <img src="https://www.news4teachers.de/wp-content/uploads/shutterstock_1433736386-scaled-e1650461037431.jpg"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>For Single Women</h4>
                                    <div class="vesh-aget-rates">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span class="resy-98">340 Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">42+ properties</div>
                                <a href="JavaScript:Void(0);" class="veshm-location-figure">
                                    <img src="https://www.sibdom.ru/images/photo_crop_1050_700/gallery/44/4423/442333f61e81439f31b9ce4cd84966c1.jpg"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>For Tenants with Company Lease </h4>
                                    <div class="vesh-aget-rates">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span class="resy-98">512 Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            {{-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <a href="JavaScript:Void(0);" class="btn btn-outline-gray">Explore More Cities<i
                            class="fa-regular fa-circle-right ms-2"></i></a>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- ============================ End Curated rental collections ================================== -->


    <!-- ================================= 2 News slider ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Trending News</h2>
                        <p>Related to Real Estate Investment</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="news-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->

                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= 2 News slider End ================================== -->


    <!-- ================= Explore Places ================= -->
    <section class="mid bg-2">
        <div class="container">

            <div class="row justify-content-center ">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Homes by furnishing</h2>
                        <p>Choose your preferred furnishing</p>
                    </div>
                </div>
            </div>

            <div class="row g-lg-5">

                <!-- Single Property -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 p-0">
                    <div class="rental-slide">
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="vsm-stay-wrap">
                                <div class="vsm-stay-figure">
                                    <figure class="vsm-stay-thumb"><a href="/propertylisting" class="vsm-stay-link"><img
                                                src="https://static.99acres.com/universalhp/img/d_hp_furnish_1.webp"
                                                class="img-fluid rounded" alt=""></a>
                                    </figure>
                                </div>
                                <div class="vsm-stay-caption">
                                    <div class="vsm-stay-title">
                                        <h4>Furnished</h4>
                                    </div>
                                    <div class="vsm-stay-button"><a href="/propertylisting" class="vsm-stay-btn">2310
                                            Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="vsm-stay-wrap">
                                <div class="vsm-stay-figure">
                                    <figure class="vsm-stay-thumb"><a href="/propertylisting" class="vsm-stay-link"><img
                                                src="https://static.99acres.com/universalhp/img/d_hp_furnish_4.webp"
                                                class="img-fluid rounded" alt=""></a>
                                    </figure>
                                </div>
                                <div class="vsm-stay-caption">
                                    <div class="vsm-stay-title">
                                        <h4>Semifurnished </h4>
                                    </div>
                                    <div class="vsm-stay-button"><a href="/propertylisting" class="vsm-stay-btn">2310
                                            Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="vsm-stay-wrap">
                                <div class="vsm-stay-figure">
                                    <figure class="vsm-stay-thumb"><a href="/propertylisting" class="vsm-stay-link"><img
                                                src="https://static.99acres.com/universalhp/img/d_hp_furnish_2.webp"
                                                class="img-fluid rounded" alt=""></a>
                                    </figure>
                                </div>
                                <div class="vsm-stay-caption">
                                    <div class="vsm-stay-title">
                                        <h4>Unfurnished</h4>
                                    </div>
                                    <div class="vsm-stay-button"><a href="/propertylisting" class="vsm-stay-btn">2310
                                            Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ================================= End Explore Places =============================== -->


    <!-- ================================= 3 News slider ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Trending News</h2>
                        <p>Related to Real Estate Investment</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="news-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->

                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= 3 News slider End ================================== -->


    <!-- ============================ Apartments, Villas and more ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Apartments, Villas and more</h2>
                        <p>
                            in your city
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-xl-5 g-lg-3">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12 p-0">
                    <div class="apartments-slide">
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">15,000+ Properties</div>
                                <a href="JavaScript:Void(0);" class="portrait-banner">
                                    <img src="https://i.pinimg.com/originals/83/8f/cb/838fcb18636d30067ee1b9e935e2f458.jpg"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>Residential Apartment </h4>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">720+ Properties</div>
                                <a href="JavaScript:Void(0);" class="portrait-banner" style="background-color: #F0F9FF">
                                    <img src="https://static.99acres.com/universalhp/img/d_hp_property_type_3.webp"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>Residential Land </h4>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">250+ Properties</div>
                                <a href="JavaScript:Void(0);" class="portrait-banner">
                                    <img src="https://i.pinimg.com/originals/e1/45/7c/e1457cf3fc2b3ebdb1d87aa0c2e171e0.jpg"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>1 RK/ Studio Apartment </h4>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">242+ properties</div>
                                <a href="JavaScript:Void(0);" class="portrait-banner">
                                    <img src="https://i.pinimg.com/736x/e3/13/ec/e313ecdb0dfcde99a6a5481e673ee6ca--house--dream-life.jpg"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>Independent House/ Villa</h4>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">142+ properties</div>
                                <a href="JavaScript:Void(0);" class="portrait-banner">
                                    <img src="https://ekspert-kapital.ru/wp-content/uploads/2021/07/kv.png"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>Independent/ Builder Floor </h4>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">242+ properties</div>
                                <a href="JavaScript:Void(0);" class="portrait-banner">
                                    <img src="https://avatars.mds.yandex.net/i?id=bac5ad23bfa15c57c7a2148d6299de46_l-8252971-images-thumbs&ref=rim&n=13&w=1080&h=1350"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4>Farm House </h4>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-location-prt">
                                <div class="veshm-location-lists">242+ properties</div>
                                <a href="JavaScript:Void(0);" class="portrait-banner">
                                    <img src="https://avatars.mds.yandex.net/i?id=1e887da4bb7a445c22daaf87b35c2a18-4599759-images-thumbs&n=13"
                                        class="img-fluid" alt="">
                                </a>
                                <div class="veshm-location-content">
                                    <h4 class="vesh-content-title">Serviced Apartments </h4>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            {{-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <a href="/propertylisting" class="btn btn-outline-gray">Explore More<i
                            class="fa-regular fa-circle-right ms-2"></i></a>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- ============================ End Apartments, Villas and more ================================== -->


    <!-- ================================= 4 News slider ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Trending News</h2>
                        <p>Related to Real Estate Investment</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="news-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->

                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= 4 News slider End ================================== -->


    <!-- ============================ Explore Agents ================================== -->
    <section class="gray">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="sec-heading text-start">
                        <h2 class="mb-3">Browse Agents</h2>
                        <p class="text-paragraph">Get in touch with agents around you</p>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="agent-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-reviews-box pb-0">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">

                                        <div class="veshm-reviews-figure">
                                            <img src="{{ asset('assets/frontend-assets/img/user-1.png') }}"
                                                class="img-fluid circle" alt="">
                                        </div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Arturo A. Grise</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
                                    </div>
                                </div>
                                <div class="veshm-list-75"><span>23 Property</span></div>
                                <div class="veshm-agent-footer mt-2 p-2">
                                    <div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool
                                    </div>
                                    <button class="btn btn-like" type="button">
                                        <i class="fa-solid fa-heart-circle-check"></i>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-reviews-box pb-0">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">

                                        <div class="veshm-reviews-figure">
                                            <img src="{{ asset('assets/frontend-assets/img/user-2.png') }}"
                                                class="img-fluid circle" alt="">
                                        </div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Arturo A. Grise</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
                                    </div>
                                </div>
                                <div class="veshm-list-75"><span>23 Property</span></div>
                                <div class="veshm-agent-footer mt-2 p-2">
                                    <div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool
                                    </div>
                                    <button class="btn btn-like" type="button">
                                        <i class="fa-solid fa-heart-circle-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-reviews-box pb-0">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">

                                        <div class="veshm-reviews-figure">
                                            <img src="{{ asset('assets/frontend-assets/img/user-3.png') }}"
                                                class="img-fluid circle" alt="">
                                        </div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Arturo A. Grise</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
                                    </div>
                                </div>
                                <div class="veshm-list-75"><span>23 Property</span></div>
                                <div class="veshm-agent-footer mt-2 p-2">
                                    <div class="rlhc-prt-location"><i
                                            class="fa-solid fa-location-dot me-1"></i>Liverpool
                                    </div>
                                    <button class="btn btn-like" type="button">
                                        <i class="fa-solid fa-heart-circle-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-reviews-box pb-0">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">

                                        <div class="veshm-reviews-figure">
                                            <img src="{{ asset('assets/frontend-assets/img/user-4.png') }}"
                                                class="img-fluid circle" alt="">
                                        </div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Arturo A. Grise</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
                                    </div>
                                </div>
                                <div class="veshm-list-75"><span>23 Property</span></div>
                                <div class="veshm-agent-footer mt-2 p-2">
                                    <div class="rlhc-prt-location"><i
                                            class="fa-solid fa-location-dot me-1"></i>Liverpool
                                    </div>
                                    <button class="btn btn-like" type="button">
                                        <i class="fa-solid fa-heart-circle-check"></i>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-reviews-box pb-0">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">

                                        <div class="veshm-reviews-figure">
                                            <img src="{{ asset('assets/frontend-assets/img/user-5.png') }}"
                                                class="img-fluid circle" alt="">
                                        </div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Arturo A. Grise</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
                                    </div>
                                </div>
                                <div class="veshm-list-75"><span>23 Property</span></div>
                                <div class="veshm-agent-footer mt-2 p-2">
                                    <div class="rlhc-prt-location"><i
                                            class="fa-solid fa-location-dot me-1"></i>Liverpool
                                    </div>
                                    <button class="btn btn-like" type="button">
                                        <i class="fa-solid fa-heart-circle-check"></i>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-reviews-box pb-0">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">

                                        <div class="veshm-reviews-figure">
                                            <img src="{{ asset('assets/frontend-assets/img/user-6.png') }}"
                                                class="img-fluid circle" alt="">
                                        </div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Arturo A. Grise</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
                                    </div>
                                </div>
                                <div class="veshm-list-75"><span>23 Property</span></div>
                                <div class="veshm-agent-footer mt-2 p-2">
                                    <div class="rlhc-prt-location"><i
                                            class="fa-solid fa-location-dot me-1"></i>Liverpool
                                    </div>
                                    <button class="btn btn-like" type="button">
                                        <i class="fa-solid fa-heart-circle-check"></i>
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Explore Agents End ================================== -->



    <!-- ============================ Why Choose Us Start ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                    <div class="side-thumber-wrap">
                        {{-- <div class="side-effect"></div> --}}
                        <div class="side-thumber-img">
                            <figure>
                                <img src="{{ asset('assets/frontend-assets/img/side-1.png') }}"
                                    class="img-fluid rounded" alt="" />
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
                        <div class="choose-us-wriops my-4">
                            <span class="font--bold label-light-success px-3 py-2 rounded">Choose Us</span>
                        </div>
                        <div class="choose-title">
                            <h2>Why Choose Us For Your House<br />Needs?</h2>
                        </div>
                        <span id="top-gainer" class="hideInDesktop"></span>
                        
                        <div class="veshm-icon-box-list mt-4">
                            <ul class="hideInDesktop">
                                <div class="choose-slide">
                                    <!-- Single Slide -->
                                    <div class="single-slide">
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
                                    </div>
                                    <!-- Single Slide -->
                                    <div class="single-slide">
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
                                    </div>
                                    <!-- Single Slide -->
                                    <div class="single-slide">
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
                                    </div>
                                    <!-- Single Slide -->
                                    <div class="single-slide">
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
                                    </div>
                                </div>
                            </ul>

                            <ul class="hideInMobile">
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
                            <span id="top-gainer" class="hideInMobile"></span>
                        </div> 
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Why Choose Us End ====================== -->


    <!-- ============================ Explore More City For Properties Start ================================== -->
    <section >
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading" >
                        <h2>Top Gainers </h2>
                        <p>Across India with highest appreciation</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gy-4 gx-4 gx-xl-5 gx-lg-5">


                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                    <div>
                        <ul class="nav nav-pills overflow-x-auto d-flex flex-nowrap" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active text-nowrap " id="pills-2d-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2d" type="button" role="tab"
                                    aria-controls="pills-2d" aria-selected="true">Localities</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text-nowrap" id="pills-3d-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-3d" type="button" role="tab"
                                    aria-controls="pills-3d" aria-selected="false">Societies</button>
                            </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-2d" role="tabpanel"
                                aria-labelledby="pills-2d-tab" tabindex="0">

                                <div class="localities-slide">
                                    <!-- Single Slide -->
                                    <div class="single-slide">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Top 5 In Bangalore</h6>
                                                <span class="float-right">Last 1 year</span>
                                            </div>
                                            <div class="ground-client-list">
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#1 </span>Bellandur</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://static.99acres.com/images/locationREI/defaultLocality.png"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#2 </span>BTM 2nd St...</h5>
                                                            <span class="text-mid">@ ₹12,300/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 82.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20231/2/404622904M-1675102339850.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#3 </span>Jigani</h5>
                                                            <span class="text-mid">@ ₹5,250/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            {{-- <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span> --}}
                                                            <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 16.7%
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20519/7/410387622M-1677849221303.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#4 </span>Varthur</h5>
                                                            <span class="text-mid">@ ₹11,500/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#5 </span>RT Nagar</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Slide -->
                                    <div class="single-slide">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Top 5 In Bangalore</h6>
                                                <span class="float-right">Last 1 year</span>
                                            </div>
                                            <div class="ground-client-list">
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#1 </span>Bellandur</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://static.99acres.com/images/locationREI/defaultLocality.png"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#2 </span>BTM 2nd St...</h5>
                                                            <span class="text-mid">@ ₹12,300/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 82.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20231/2/404622904M-1675102339850.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#3 </span>Jigani</h5>
                                                            <span class="text-mid">@ ₹5,250/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            {{-- <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span> --}}
                                                            <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 16.7%
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20519/7/410387622M-1677849221303.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#4 </span>Varthur</h5>
                                                            <span class="text-mid">@ ₹11,500/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#5 </span>RT Nagar</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Slide -->
                                    <div class="single-slide">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Top 5 In Bangalore</h6>
                                                <span class="float-right">Last 1 year</span>
                                            </div>
                                            <div class="ground-client-list">
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#1 </span>Bellandur</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://static.99acres.com/images/locationREI/defaultLocality.png"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#2 </span>BTM 2nd St...</h5>
                                                            <span class="text-mid">@ ₹12,300/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 82.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20231/2/404622904M-1675102339850.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#3 </span>Jigani</h5>
                                                            <span class="text-mid">@ ₹5,250/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            {{-- <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span> --}}
                                                            <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 16.7%
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20519/7/410387622M-1677849221303.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#4 </span>Varthur</h5>
                                                            <span class="text-mid">@ ₹11,500/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#5 </span>RT Nagar</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-3d" role="tabpanel" aria-labelledby="pills-3d-tab"
                                tabindex="0">
                                <div class="localities-slide">
                                    <!-- Single Slide -->
                                    <div class="single-slide">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Top 5 In Bangalore</h6>
                                                <span class="float-right">Last 1 year</span>
                                            </div>
                                            <div class="ground-client-list">
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#1 </span>Bellandur</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://static.99acres.com/images/locationREI/defaultLocality.png"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#2 </span>BTM 2nd St...</h5>
                                                            <span class="text-mid">@ ₹12,300/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 82.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20231/2/404622904M-1675102339850.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#3 </span>Jigani</h5>
                                                            <span class="text-mid">@ ₹5,250/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            {{-- <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span> --}}
                                                            <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 16.7%
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20519/7/410387622M-1677849221303.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#4 </span>Varthur</h5>
                                                            <span class="text-mid">@ ₹11,500/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#5 </span>RT Nagar</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Slide -->
                                    <div class="single-slide">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Top 5 In Bangalore</h6>
                                                <span class="float-right">Last 1 year</span>
                                            </div>
                                            <div class="ground-client-list">
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#1 </span>Bellandur</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://static.99acres.com/images/locationREI/defaultLocality.png"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#2 </span>BTM 2nd St...</h5>
                                                            <span class="text-mid">@ ₹12,300/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 82.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20231/2/404622904M-1675102339850.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#3 </span>Jigani</h5>
                                                            <span class="text-mid">@ ₹5,250/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            {{-- <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span> --}}
                                                            <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 16.7%
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20519/7/410387622M-1677849221303.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#4 </span>Varthur</h5>
                                                            <span class="text-mid">@ ₹11,500/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#5 </span>RT Nagar</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Slide -->
                                    <div class="single-slide">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Top 5 In Bangalore</h6>
                                                <span class="float-right">Last 1 year</span>
                                            </div>
                                            <div class="ground-client-list">
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#1 </span>Bellandur</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://static.99acres.com/images/locationREI/defaultLocality.png"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#2 </span>BTM 2nd St...</h5>
                                                            <span class="text-mid">@ ₹12,300/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 82.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20231/2/404622904M-1675102339850.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#3 </span>Jigani</h5>
                                                            <span class="text-mid">@ ₹5,250/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            {{-- <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span> --}}
                                                            <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 16.7%
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/20519/7/410387622M-1677849221303.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#4 </span>Varthur</h5>
                                                            <span class="text-mid">@ ₹11,500/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="ground-client-single-list">
                                                    <div class="ground-client-first">
                                                        <div class="ground-client-thumb"><img
                                                                src="https://mediacdn.99acres.com/media1/14904/11/298091688M-1621496544231.jpg"
                                                                class="img-fluid circle" alt=""></div>
                                                        <div class="ground-client-caption">
                                                            <h5><span class="text-muted">#5 </span>RT Nagar</h5>
                                                            <span class="text-mid">@ ₹12,600/ sq.ft</span>
                                                        </div>
                                                    </div>
                                                    <div class="ground-client-last">
                                                        <div class="ground-btn">
                                                            <span href="JavaScript:Void(0);"
                                                                class="btns bg-light-success text-success">
                                                                <i class="fa-solid fa-square-caret-up me-1"></i> 86.7%
                                                            </span>
                                                            {{-- <span href="JavaScript:Void(0);" class="btns bg-light-danger text-danger">
                                                                <i class="fa-solid fa-square-caret-down me-1"></i> 6.7%
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
        
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Explore More City For Properties End ================================== -->


    <!-- ================================= 5 News slider ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <p>Top Cities</p>
                        <h2>Explore Real Estate in Popular Indian Cities</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="cities-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block  ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <picture>
                                            <source
                                                srcset="https://mediacdn.99acres.com/media1/11848/1/236961707D-1594715125517.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Delhi / NCR Real Estate" title="Delhi / NCR Real Estate"
                                                type="image/jpg" class="img-fluid rounded">
                                            <img src="https://mediacdn.99acres.com/media1/11848/1/236961707D-1594715125517.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Delhi / NCR Real Estate" title="Delhi / NCR Real Estate"
                                                decoding="auto" class="img-fluid rounded">
                                        </picture>
                                    </a>

                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <h4 class="bl-title"><a href="/blogdetail">Delhi / NCR</a></h4>
                                        <span class="text-mid">1,17,000+ Properties</span>
                                    </div>

                                </div>
                            </div>

                            <div class="blog-list-block mt-2 ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <picture>
                                            <source
                                                srcset="https://mediacdn.99acres.com/media1/11848/15/236975527D-1594718126587.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Mumbai Real Estate" class="img-fluid rounded"
                                                title="Mumbai Real Estate" type="image/jpg">
                                            <img src="https://mediacdn.99acres.com/media1/11848/15/236975527D-1594718126587.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Mumbai Real Estate" title="Mumbai Real Estate" decoding="auto"
                                                class="img-fluid rounded">
                                        </picture>
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Mumbai</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <picture>
                                            <source
                                                srcset="https://mediacdn.99acres.com/media1/11846/12/236932009D-1594709336922.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Bangalore Real Estate" title="Bangalore Real Estate"
                                                type="image/jpg" class="img-fluid rounded">
                                            <img src="https://mediacdn.99acres.com/media1/11846/12/236932009D-1594709336922.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Bangalore Real Estate" title="Bangalore Real Estate"
                                                decoding="auto" class="img-fluid rounded">
                                        </picture>
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Bangalore</a></h4>
                                        <span class="text-mid">26,000+ Properties</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-list-block  mt-2 ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <picture>
                                            <source
                                                srcset="https://mediacdn.99acres.com/media1/11848/7/236967665D-1594716318858.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Hyderabad Real Estate" title="Hyderabad Real Estate"
                                                type="image/jpg" class="img-fluid rounded">
                                            <img src="https://mediacdn.99acres.com/media1/11848/7/236967665D-1594716318858.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Hyderabad Real Estate" title="Hyderabad Real Estate"
                                                decoding="auto" class="img-fluid rounded">
                                        </picture>
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Hyderabad</a></h4>
                                        <span class="text-mid">19,000+ Properties</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber my-md-1">
                                    <a href="/blogdetail">
                                        <picture>
                                            <source
                                                srcset="https://mediacdn.99acres.com/media1/16807/3/336143474D-1640587363487.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Pune Real Estate" title="Pune Real Estate" type="image/jpg"
                                                class="img-fluid rounded">
                                            <img src="https://mediacdn.99acres.com/media1/16807/3/336143474D-1640587363487.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Pune Real Estate" title="Pune Real Estate" decoding="auto"
                                                class="img-fluid rounded">
                                        </picture>
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Pune</a></h4>
                                        <span class="text-mid">27,000+ Properties</span>
                                    </div>

                                </div>
                            </div>

                            <div class="blog-list-block mt-4 my-md-2 ">

                                <div class="blog-list-thumber">
                                    <picture>
                                        <source
                                            srcset="https://mediacdn.99acres.com/media1/11848/13/236973031D-1594717541096.jpg"
                                            style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                            alt="Kolkata Real Estate" title="Kolkata Real Estate" type="image/jpg"
                                            class="img-fluid rounded">
                                        <img src="https://mediacdn.99acres.com/media1/11848/13/236973031D-1594717541096.jpg"
                                            style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                            alt="Kolkata Real Estate" title="Kolkata Real Estate" decoding="auto"
                                            class="img-fluid rounded">
                                    </picture>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Kolkata</a></h4>
                                        <span class="text-mid">18,000+ Properties</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->

                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <picture>
                                            <source
                                                srcset="https://mediacdn.99acres.com/media1/11848/0/236960749D-1594714810078.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Chennai Real Estate" title="Chennai Real Estate" type="image/jpg"
                                                class="img-fluid rounded">
                                            <img src="https://mediacdn.99acres.com/media1/11848/0/236960749D-1594714810078.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Chennai Real Estate" title="Chennai Real Estate" decoding="auto"
                                                class="img-fluid rounded">
                                        </picture>
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Chennai</a></h4>
                                        <span class="text-mid">25,000+ Properties</span>
                                    </div>

                                </div>
                            </div>
                            <div class="blog-list-block mt-2 ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <picture>
                                            <source
                                                srcset="https://imagecdn.99acres.com/media1/24073/2/481462274D-1711002313632.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Ahmedabad Real Estate" title="Ahmedabad Real Estate"
                                                type="image/jpg" class="img-fluid rounded">
                                            <img src="https://imagecdn.99acres.com/media1/24073/2/481462274D-1711002313632.jpg"
                                                style="animation-name: gracefulimage; animation-duration: 0.3s; animation-iteration-count: 1; animation-timing-function: ease-in;"
                                                alt="Ahmedabad Real Estate" title="Ahmedabad Real Estate"
                                                decoding="auto" class="img-fluid rounded">
                                        </picture>
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <h4 class="bl-title"><a href="/blogdetail">Ahmedabad</a></h4>
                                        <span class="text-mid">12,000+ Properties</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= 5 News slider End ================================== -->

    <!-- ================================= 5 News slider ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Trending News</h2>
                        <p>Related to Real Estate Investment</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="news-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block ">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img
                                            src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img
                                            src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-success bg-light-success">Education</span>
                                        <h4 class="bl-title"><a href="/blogdetail">14 Newsletters You’ll Want in Your
                                                Inbox in 2023</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->

                        <div class="single-slide">
                            <div class="blog-list-block">

                                <div class="blog-list-thumber">
                                    <a href="/blogdetail"><img
                                            src="{{ asset('assets/frontend-assets/img/blog-2.jpg') }}"
                                            class="img-fluid rounded" alt=""></a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">
                                        <span class="label text-warning bg-light-warning">Resources</span>
                                        <h4 class="bl-title"><a href="/blogdetail">How a Change in My Role Inspired Six
                                                Impactful Habits</a></h4>
                                        <span class="text-mid">3 Days Ago</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= 5 News slider End ================================== -->


    <!-- ============================ Good Reviews By Customers ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Good Reviews By Customers</h2>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-6 p-0">
                    <div class="reviews-slide">
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="veshm-reviews-box">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">
                                        <div class="veshm-reviews-figure"><img
                                                src="{{ asset('assets/frontend-assets/img/team-1.jpg') }}"
                                                class="img-fluid circle" alt=""></div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Arturo A. Grise</h4>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <figure class="mt-2 mb-0"><img
                                            src="{{ asset('assets/frontend-assets/img/brand/a.webp') }}"
                                            class="img-fluid" width="80" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-reviews-box">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">
                                        <div class="veshm-reviews-figure"><img
                                                src="{{ asset('assets/frontend-assets/img/team-2.jpg') }}"
                                                class="img-fluid circle" alt=""></div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Claudia D. Watson</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>Founder of Yeloower</span></div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <figure class="mt-2 mb-0"><img
                                            src="{{ asset('assets/frontend-assets/img/brand/b.webp') }}"
                                            class="img-fluid" width="80" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-reviews-box">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">
                                        <div class="veshm-reviews-figure"><img
                                                src="{{ asset('assets/frontend-assets/img/team-3.jpg') }}"
                                                class="img-fluid circle" alt=""></div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Samantha J. Shoe</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Mark Soft</span></div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <figure class="mt-2 mb-0"><img
                                            src="{{ asset('assets/frontend-assets/img/brand/c.webp') }}"
                                            class="img-fluid" width="80" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-reviews-box">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">
                                        <div class="veshm-reviews-figure"><img
                                                src="{{ asset('assets/frontend-assets/img/team-4.jpg') }}"
                                                class="img-fluid circle" alt=""></div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Nadine S. Stewart</h4>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <figure class="mt-2 mb-0"><img
                                            src="{{ asset('assets/frontend-assets/img/brand/h.webp') }}"
                                            class="img-fluid" width="80" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="veshm-reviews-box">
                                <div class="veshm-reviews-flex">
                                    <div class="veshm-reviews-thumb">
                                        <div class="veshm-reviews-figure"><img
                                                src="{{ asset('assets/frontend-assets/img/team-5.jpg') }}"
                                                class="img-fluid circle" alt=""></div>
                                    </div>
                                    <div class="veshm-reviews-caption">
                                        <div class="veshm-reviews-title">
                                            <h4>Margarita J. Hutton</h4>
                                        </div>
                                        <div class="veshm-reviews-designation"><span>CEO of Doodle</span></div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim.</p>
                                    <figure class="mt-2 mb-0"><img
                                            src="{{ asset('assets/frontend-assets/img/brand/g.webp') }}"
                                            class="img-fluid" width="80" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Good Reviews By Customers ================================== -->



    <!-- ================================= News slider ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-start">
                    <div class="sec-heading ">
                        <h2>Newly Launched Projects</h2>
                        <p>Limited launch offers available</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <!-- Single Review -->
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="news-slide">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block border border-subtle-secondary ">

                                <div class="blog-list-thumber">
                                    <div class="label banner-label text-primary bg-light-primary">
                                        New Launch
                                    </div>
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt="blog1">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Mantram Solacia</a></h4>
                                    </div>

                                    <div class="blog-body prices">
                                        <p>Panvel, Navi Mumbai</p>

                                        <div class="d-flex">
                                            <b>₹ 43 - 72 L</b>
                                            <span class="mx-2"> | </span>
                                            <div>1, 2 BHK Apartment</div>
                                        </div>
                                        <div><span class="text-success">5.6%</span> price increase in last 3 months in
                                        </div>
                                    </div>

                                    <div class="blg-authr d-flex align-items-center news-footer ">

                                        <div class="blg-authr-caption pt-2  ">
                                            <a href="JavaScript:Void(0);"
                                                class="text-white px-2 py-1 rounded border bg-primary">
                                                <i class="fa-regular fa-circle-right"></i>
                                                Contact now
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block border border-subtle-secondary ">

                                <div class="blog-list-thumber">
                                    <div class="label banner-label text-primary bg-light-primary">
                                        New Launch
                                    </div>
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt="blog1">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Mantram Solacia</a></h4>
                                    </div>

                                    <div class="blog-body prices">
                                        <p>Panvel, Navi Mumbai</p>

                                        <div class="d-flex">
                                            <b>₹ 43 - 72 L</b>
                                            <span class="mx-2"> | </span>
                                            <div>1, 2 BHK Apartment</div>
                                        </div>
                                        <div><span class="text-success">5.6%</span> price increase in last 3 months in
                                        </div>
                                    </div>

                                    <div class="blg-authr d-flex align-items-center news-footer ">

                                        <div class="blg-authr-caption pt-2  ">
                                            <a href="JavaScript:Void(0);"
                                                class="text-white px-2 py-1 rounded border bg-primary">
                                                <i class="fa-regular fa-circle-right"></i>
                                                Contact now
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block border border-subtle-secondary ">

                                <div class="blog-list-thumber">
                                    <div class="label banner-label text-primary bg-light-primary">
                                        New Launch
                                    </div>
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt="blog1">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Mantram Solacia</a></h4>
                                    </div>

                                    <div class="blog-body prices">
                                        <p>Panvel, Navi Mumbai</p>

                                        <div class="d-flex">
                                            <b>₹ 43 - 72 L</b>
                                            <span class="mx-2"> | </span>
                                            <div>1, 2 BHK Apartment</div>
                                        </div>
                                        <div><span class="text-success">5.6%</span> price increase in last 3 months in
                                        </div>
                                    </div>

                                    <div class="blg-authr d-flex align-items-center news-footer ">

                                        <div class="blg-authr-caption pt-2  ">
                                            <a href="JavaScript:Void(0);"
                                                class="text-white px-2 py-1 rounded border bg-primary">
                                                <i class="fa-regular fa-circle-right"></i>
                                                Contact now
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <div class="blog-list-block border border-subtle-secondary ">

                                <div class="blog-list-thumber">
                                    <div class="label banner-label text-primary bg-light-primary">
                                        New Launch
                                    </div>
                                    <a href="/blogdetail">
                                        <img src="{{ asset('assets/frontend-assets/img/blog-1.jpg') }}"
                                            class="img-fluid rounded" alt="blog1">
                                    </a>
                                </div>
                                <div class="blog-list-caption">
                                    <div class="blog-info">

                                        <h4 class="bl-title"><a href="/blogdetail">Mantram Solacia</a></h4>
                                    </div>

                                    <div class="blog-body prices">
                                        <p>Panvel, Navi Mumbai</p>

                                        <div class="d-flex">
                                            <b>₹ 43 - 72 L</b>
                                            <span class="mx-2"> | </span>
                                            <div>1, 2 BHK Apartment</div>
                                        </div>
                                        <div><span class="text-success">5.6%</span> price increase in last 3 months in
                                        </div>
                                    </div>

                                    <div class="blg-authr d-flex align-items-center news-footer ">

                                        <div class="blg-authr-caption pt-2  ">
                                            <a href="JavaScript:Void(0);"
                                                class="text-white px-2 py-1 rounded border bg-primary">
                                                <i class="fa-regular fa-circle-right"></i>
                                                Contact now
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= News slider End ================================== -->



    <!-- Filter Modal -->
    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filtermodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered filter-popup" role="document">
            <div class="modal-content" id="filtermodal">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i
                        class="fas fa-close"></i></span>
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
                                                            <option value="1">₹50,000</option>
                                                            <option value="2">₹75,000</option>
                                                            <option value="3">₹1000,000</option>
                                                            <option value="4">₹125,000</option>
                                                            <option value="5">₹150,000</option>
                                                            <option value="6">₹175,000</option>
                                                            <option value="7">₹2000,000</option>
                                                            <option value="8">₹225,000</option>
                                                            <option value="9">₹250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">₹50,000</option>
                                                            <option value="2">₹75,000</option>
                                                            <option value="3">₹1000,000</option>
                                                            <option value="4">₹125,000</option>
                                                            <option value="5">₹150,000</option>
                                                            <option value="6">₹175,000</option>
                                                            <option value="7">₹2000,000</option>
                                                            <option value="8">₹225,000</option>
                                                            <option value="9">₹250,000</option>
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
                                                            <option value="1">₹50,000</option>
                                                            <option value="2">₹75,000</option>
                                                            <option value="3">₹1000,000</option>
                                                            <option value="4">₹125,000</option>
                                                            <option value="5">₹150,000</option>
                                                            <option value="6">₹175,000</option>
                                                            <option value="7">₹2000,000</option>
                                                            <option value="8">₹225,000</option>
                                                            <option value="9">₹250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">₹50,000</option>
                                                            <option value="2">₹75,000</option>
                                                            <option value="3">₹1000,000</option>
                                                            <option value="4">₹125,000</option>
                                                            <option value="5">₹150,000</option>
                                                            <option value="6">₹175,000</option>
                                                            <option value="7">₹2000,000</option>
                                                            <option value="8">₹225,000</option>
                                                            <option value="9">₹250,000</option>
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
                                                            <option value="1">₹50,000</option>
                                                            <option value="2">₹75,000</option>
                                                            <option value="3">₹1000,000</option>
                                                            <option value="4">₹125,000</option>
                                                            <option value="5">₹150,000</option>
                                                            <option value="6">₹175,000</option>
                                                            <option value="7">₹2000,000</option>
                                                            <option value="8">₹225,000</option>
                                                            <option value="9">₹250,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <select class="select-normal">
                                                            <option value="0">Any</option>
                                                            <option value="1">₹50,000</option>
                                                            <option value="2">₹75,000</option>
                                                            <option value="3">₹1000,000</option>
                                                            <option value="4">₹125,000</option>
                                                            <option value="5">₹150,000</option>
                                                            <option value="6">₹175,000</option>
                                                            <option value="7">₹2000,000</option>
                                                            <option value="8">₹225,000</option>
                                                            <option value="9">₹250,000</option>
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
