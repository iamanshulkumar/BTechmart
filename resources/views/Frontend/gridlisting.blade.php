@extends('frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">


                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ All Property ================================== -->
    <section class="over-top micler gray-simple">

        <div class="container">

            <div class="row">

                <!-- property Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="page-sidebar p-0">
                        <a class="filter_links" data-bs-toggle="collapse" href="#fltbox" role="button"
                            aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i
                                class="fa fa-sliders-h ml-2"></i></a>
                        <div class="collapse" id="fltbox">
                            <!-- Find New Property -->
                            <div class="sidebar-widgets p-4">

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Neighborhood">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>

                                <div class="form-group">
                                    <select id="city" class="select-normal">
                                        <option value="0">Choose City</option>
                                        <option value="1">California</option>
                                        <option value="2">Denver</option>
                                        <option value="3">New York</option>
                                        <option value="4">Washington</option>
                                        <option value="5">Canada</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="status" class="select-normal">
                                        <option value="0">Property Types</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Condo</option>
                                        <option value="3">Houses</option>
                                        <option value="4">Villa</option>
                                        <option value="5">Land</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="select-normal">
                                        <option value="0">Min Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="bathrooms" class="select-normal">
                                        <option value="0">Min Bathrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="garage" class="select-normal">
                                        <option value="0">Garage Choose</option>
                                        <option value="1">Any Type</option>
                                        <option value="2">Yes</option>
                                        <option value="3">No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="built" class="select-normal">
                                        <option value="0">Built Year</option>
                                        <option value="1">2010</option>
                                        <option value="2">2011</option>
                                        <option value="3">2012</option>
                                        <option value="4">2013</option>
                                        <option value="5">2014</option>
                                        <option value="6">2015</option>
                                        <option value="7">2016</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="simple-input">
                                                <input type="text" class="form-control" placeholder="Min Area">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="simple-input">
                                                <input type="text" class="form-control" placeholder="Max Area">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                                        <h6>Choose Price</h6>
                                        <div class="rg-slider">
                                            <input type="text" class="js-range-slider" name="my_range" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                        <h6>Advance Features</h6>
                                        <ul class="row p-0 m-0">
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-1" class="form-check-input" name="ao-1"
                                                        type="checkbox">
                                                    <label for="ao-1" class="form-check-label">Air Condition</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-2" class="form-check-input" name="ao-2"
                                                        type="checkbox">
                                                    <label for="ao-2" class="form-check-label">Bedding</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-3" class="form-check-input" name="ao-3"
                                                        type="checkbox">
                                                    <label for="ao-3" class="form-check-label">Heating</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-4" class="form-check-input" name="ao-4"
                                                        type="checkbox">
                                                    <label for="ao-4" class="form-check-label">Internet</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-5" class="form-check-input" name="ao-5"
                                                        type="checkbox">
                                                    <label for="ao-5" class="form-check-label">Microwave</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-6" class="form-check-input" name="ao-6"
                                                        type="checkbox">
                                                    <label for="ao-6" class="form-check-label">Smoking Allow</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-7" class="form-check-input" name="ao-7"
                                                        type="checkbox">
                                                    <label for="ao-7" class="form-check-label">Terrace</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-8" class="form-check-input" name="ao-8"
                                                        type="checkbox">
                                                    <label for="ao-8" class="form-check-label">Balcony</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-9" class="form-check-input" name="ao-9"
                                                        type="checkbox">
                                                    <label for="ao-9" class="form-check-label">Icon</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                        <button class="btn btn-primary rounded full-width font--medium">Submit
                                            Search</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column">
                                        <h4 class="m-0"><span>207</span> Results Found of 612</h4>
                                    </div>
                                </div>
                                <div class="item-shorting-box-right">
                                    <div class="shorting-by">
                                        <select>
                                            <option value="0">Shorting By:</option>
                                            <option value="1">Low Price</option>
                                            <option value="2">High Price</option>
                                            <option value="3">Most Popular</option>
                                        </select>
                                    </div>
                                    <ul class="shorting-list">
                                        <li><a href="grid-style-3.html" class="active"><i
                                                    class="fas fa-table-cells-large"></i></a></li>
                                        <li><a href="list-style-2.html"><i class="fas fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start All List -->
                    <div class="row justify-content-start gx-3 gy-4">

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
                                                        src="{{ asset('assets/frontend-assets/img/prt-1.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-9.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-8.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$7,500<span
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
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
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
                                <div class="veshm-type fr-sale"><span>For sale</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-2.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$100,400</h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Banyan Real Estate Group</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg"') }}
                                                        width="16"
                                                        class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>1800 Sft</li>
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
                                                        src="{{ asset('assets/frontend-assets/img/prt-3.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$8,599<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Allen Tate Real Company</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg"') }}
                                                        width="16"
                                                        class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>2 Ba
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
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-4.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-14.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-15.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$9,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">510 Knob and Key Realty</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg"') }}
                                                        width="16"
                                                        class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>5 Bed</li>
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
                                                        src="{{ asset('assets/frontend-assets/img/prt-5.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>'assets/frontend-assets/
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$8,499<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">10/310 Dream Big Real Estate</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>2 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>2 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>1700 Sft</li>
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
                                                        src="{{ asset('assets/frontend-assets/img/prt-9') }}.png"
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
                                                <h4 class="rlhc-price-name theme-cl">$7,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Select Brick Builders</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
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
                                <div class="veshm-type fr-sale"><span>For sale</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-6') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11') }}.png"
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
                                                <h4 class="rlhc-price-name theme-cl">$89,990</h4>
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
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>2 Ba
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
                                                        src="{{ asset('assets/frontend-assets/img/prt-8') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10') }}.png"
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
                                                <h4 class="rlhc-price-name theme-cl">$7,549<span
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
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
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
                                                        src="{{ asset('assets/frontend-assets/img/prt-7') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-9') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-8') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$7,500<span
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
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
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
                                <div class="veshm-type fr-sale"><span>For sale</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-10') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-block">
                                    <div class="veshm-list-head">
                                        <div class="veshm-list-head-caption">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">$100,400</h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">Banyan Real Estate Group</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba
                                                </li>
                                                <li><span class="area-inf"><i
                                                            class="fa-solid fa-vector-square"></i></span>1800 Sft</li>
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
                                                        src="{{ asset('assets/frontend-assets/img/prt-13') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12') }}.png"
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
                                                <h4 class="rlhc-price-name theme-cl">$8,599<span
                                                        class="monthly">/Months</span></h4>
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
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
                                                <li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>2 Ba
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
                                <div class="veshm-type"><span>For rent</span></div>

                                <div class="veshm-list-thumb">
                                    <button type="button" class="compare-btn"><i
                                            class="fa-solid fa-repeat"></i>Compare</button>
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-15') }}.png"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="single-property-1.html"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-14') }}.png"
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
                                                <h4 class="rlhc-price-name theme-cl">$9,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                            <div class="listing-short-detail-flex">
                                                <h5 class="rlhc-title-name verified"><a href="single-property-1.html"
                                                        class="prt-link-detail">510 Knob and Key Realty</a></h5>
                                                <div class="rlhc-prt-location"><img
                                                        src="{{ asset('assets/frontend-assets/img/pin.svg') }}"
                                                        width="16" class="me-1" alt="">210 Zirak Road,
                                                    Canada</div>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>

                                    <div class="veshm-list-availabilty">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal"
                                            data-bs-target="#availability" class="btn btn-avalability">Check
                                            Availabilty</a>
                                    </div>
                                    <div class="veshm-list-footer">
                                        <div class="veshm-list-circls">
                                            <ul>
                                                <li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>5 Bed</li>
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

                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ All Property ================================== -->

    <!-- Availability Modal -->
    <div class="modal fade" id="availability" tabindex="-1" role="dialog" aria-labelledby="availabilitymodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered availability-pop-form" role="document">
            <div class="modal-content" id="availabilitymodal">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
                <div class="modal-body">
                    <div class="text-center">
                        <h2 class="mb-0">CONTACT</h2>
                        <h4 class="mb-0">5689 Resot Relly, Canada</h4>
                        <a class="text-success font--bold" href="tel:4048651904">(404) 865-1904</a>
                    </div>
                    <div class="availability-form">
                        <form>

                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control ht-60">I'm interested in 5689 Resot Relly, Canada. Please send me current availability and additional details.</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control">
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
                                <button type="submit" class="btn full-width btn-primary">Submit Request</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection
