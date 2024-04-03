@extends('frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Pricing Page</h2>
                    <span class="ipn-subtitle">View our latest package</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Price Table Start ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2>See our packages</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>

            <div class="row gx-4 gy-4">

                <!-- Single Package -->
                <div class="col-xl-4 collg-4 col-md-4 col-sm-12 col-12">
                    <div class="veshm-pricing-box">
                        <div class="veshm-pricing-header">
                            <div class="vesh-prc-icon">
                                <i class="fa-solid fa-fire"></i>
                            </div>
                            <div class="vesh-prc-icon-caption">
                                <span class="standard">For Personal</span>
                                <h5>Standard Plan</h5>
                            </div>
                        </div>
                        <div class="veshm-pricing-middle">
                            <div class="veshm-prc-title">
                                <h2><sup>$</sup>49<sub>/ Month</sub></h2>
                            </div>
                        </div>
                        <div class="veshm-pricing-content">
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i>5+ Listings</li>
                                <li><i class="fa-solid fa-circle-check"></i>3 Month Validity</li>
                                <li><i class="fa-solid fa-circle-check"></i>10 GB Space</li>
                                <li><i class="fa-solid fa-circle-check"></i>Contact With Agent</li>
                                <li class="deactive"><i class="fa-solid fa-circle-xmark"></i>24x7 Fully Support</li>
                                <li class="deactive"><i class="fa-solid fa-circle-xmark"></i>Admin Dashboard</li>
                            </ul>
                        </div>
                        <div class="veshm-pricing-footer">
                            <button class="btn btn-subscribe" type="button">Subscribe Now</button>
                        </div>
                    </div>
                </div>

                <!-- Single Package -->
                <div class="col-xl-4 collg-4 col-md-4 col-sm-12 col-12">
                    <div class="veshm-pricing-box featured">
                        <div class="veshm-pricing-header">
                            <div class="vesh-prc-icon">
                                <i class="fa-solid fa-bahai"></i>
                            </div>
                            <div class="vesh-prc-icon-caption">
                                <span class="golden">For Team</span>
                                <h5>Golden Plan</h5>
                            </div>
                        </div>
                        <div class="veshm-pricing-middle">
                            <div class="veshm-prc-title">
                                <h2><sup>$</sup>79<sub>/ Month</sub></h2>
                            </div>
                        </div>
                        <div class="veshm-pricing-content">
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i>5+ Listings</li>
                                <li><i class="fa-solid fa-circle-check"></i>3 Month Validity</li>
                                <li><i class="fa-solid fa-circle-check"></i>10 GB Space</li>
                                <li><i class="fa-solid fa-circle-check"></i>Contact With Agent</li>
                                <li class="deactive"><i class="fa-solid fa-circle-xmark"></i>24x7 Fully Support</li>
                                <li class="deactive"><i class="fa-solid fa-circle-xmark"></i>Admin Dashboard</li>
                            </ul>
                        </div>
                        <div class="veshm-pricing-footer">
                            <button class="btn btn-subscribe" type="button">Subscribe Now</button>
                        </div>
                    </div>
                </div>

                <!-- Single Package -->
                <div class="col-xl-4 collg-4 col-md-4 col-sm-12 col-12">
                    <div class="veshm-pricing-box">
                        <div class="veshm-pricing-header">
                            <div class="vesh-prc-icon">
                                <i class="fa-solid fa-gem"></i>
                            </div>
                            <div class="vesh-prc-icon-caption">
                                <span class="platinum">For Organization</span>
                                <h5>Platinum Plan</h5>
                            </div>
                        </div>
                        <div class="veshm-pricing-middle">
                            <div class="veshm-prc-title">
                                <h2><sup>$</sup>99<sub>/ Month</sub></h2>
                            </div>
                        </div>
                        <div class="veshm-pricing-content">
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i>5+ Listings</li>
                                <li><i class="fa-solid fa-circle-check"></i>3 Month Validity</li>
                                <li><i class="fa-solid fa-circle-check"></i>10 GB Space</li>
                                <li><i class="fa-solid fa-circle-check"></i>Contact With Agent</li>
                                <li class="deactive"><i class="fa-solid fa-circle-xmark"></i>24x7 Fully Support</li>
                                <li class="deactive"><i class="fa-solid fa-circle-xmark"></i>Admin Dashboard</li>
                            </ul>
                        </div>
                        <div class="veshm-pricing-footer">
                            <button class="btn btn-subscribe" type="button">Subscribe Now</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Price Table End ================================== -->
@endsection
