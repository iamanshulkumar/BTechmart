@extends('frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url({{ asset('assets/frontend-assets/img/page-title.png')}}) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">All Agents</h2>
                    <span class="ipn-subtitle">Lists of our all expert agents</span>

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
                                    <select id="price" class="select-normal">
                                        <option value="0">Choose Price Range</option>
                                        <option value="1">Less Then ₹1000</option>
                                        <option value="2">₹1000 - ₹2000</option>
                                        <option value="3">₹2000 - ₹3000</option>
                                        <option value="4">₹3000 - ₹4000</option>
                                        <option value="5">Above ₹5000</option>
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
                                            <input type="text" class="js-range-slider" name="my_range"
                                                value="">
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

                <!-- All Lists -->
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="p-3 bg-white rounded border d-flex align-items-center justify-content-between">
                                <div class="plc-vert-1 font--bold">
                                    <span class="small">102 Agents Found</span>
                                </div>
                                <ul class="shorting-list">
                                    <li class="border rounded "><a href="agentgrid"><i
                                                class="fas fa-table-cells-large"></i></a></li>
                                    <li class="border rounded "><a href="agentlist" class="active"><i class="fas fa-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row gx-3 gy-4">
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-1.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">32 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Mr. Kumar Dhananjay</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->

                        <!-- Single Agents Start -->
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-2.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">16 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Ramona G. Wieczorek</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->

                        <!-- Single Agents Start -->
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-3.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">20 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Beverly S. Romero</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->

                        <!-- Single Agents Start -->
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-4.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">18 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Mr. Bertie K. Robey</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->

                        <!-- Single Agents Start -->
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-5.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">40 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Virginia P. Grace</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->

                        <!-- Single Agents Start -->
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-6.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">19 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Mr. Gyan Pratap Patel</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->

                        <!-- Single Agents Start -->
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-7.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">28 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Mrs. Bharti Patel</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->

                        <!-- Single Agents Start -->
                        <div class="col-lg-12">
                            <div class="agent-list-block border">
                                <div class="agent-list-fliop">
                                    <div class="agent-list-thumb">
                                        <a href="/agentdetails"><img src="{{ asset('assets/frontend-assets/img/team-8.jpg')}}"
                                                class="img-fluid rounded" alt=""></a>
                                        <span class="verify-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="agent-list-caption">
                                    <div class="agent-eliops mb-2"><span
                                            class="label py-2 font--medium label-light-success me-2">10 Properties</span>
                                    </div>
                                    <div class="agent-title-uio mb-2">
                                        <h5 class="mb-0"><a href="/agentdetails">Mr. Janice A. Bianchi</a></h5>
                                        <span class="font--medium small"><i
                                                class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                                    </div>
                                    <div class="agent-yytr small font--medium mb-3">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form.</p>
                                    </div>
                                    <div class="single-button">
                                        <button type="button" class="btn btn-md font--bold btn-light-warning me-2"><i
                                                class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                        <button type="button" class="btn btn-md font--bold btn-light-success"
                                            data-bs-toggle="modal" data-bs-target="#message"><i
                                                class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Property End -->
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Agent List End ================================== -->
@endsection
