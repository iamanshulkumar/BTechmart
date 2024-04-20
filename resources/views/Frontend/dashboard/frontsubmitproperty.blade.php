@extends('Frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Hi, Btechmart</h2>
                    <span class="ipn-subtitle">Manage your profile and view property</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ User Dashboard ================================== -->
    <section class="gray pt-5 pb-5">
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="property_dashboard_navbar">

                        <div class="dash_user_avater">
                            <img src="{{ asset('assets/frontend-assets/img/team-3.jpg')}}" class="img-fluid avater" alt="">
                            <h4>Btechmart</h4>
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

                        <div class="adgt-wriop-footer py-3 px-3">
                            <div class="single-button d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-md font--bold btn-light-primary me-2 full-width"><i
                                        class="fa-solid fa-phone me-2"></i>856 742 672</button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#message"
                                    class="btn btn-md font--bold btn-light-success full-width"><i
                                        class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                            </div>
                        </div>

                        <div class="dash_user_menues">
                            <ul>
                                <li><a href="/frontdashboard"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                                <li><a href="/frontuserprofile"><i class="fa fa-user-tie"></i>My Profile</a></li>
                                <li><a href="/frontbookmarks"><i class="fa fa-bookmark"></i>Saved Property</a></li>
                                <li><a href="/frontmyproperty"><i class="fa fa-tasks"></i>My Properties</a></li>
                                <li><a href="/frontmessages"><i class="fa fa-envelope"></i>Messages</a></li> 
                                <li><a href="/frontchoosepackage"><i class="fa fa-gift"></i>Choose Package</a></li>
                                <li class="active"><a href="/frontsubmitproperty"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                                <li><a href="/frontchangepassword"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                            </ul>
                        </div>

                        <div class="dash_user_footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-power-off"></i></a></li>
                                <li><a href="/frontmessages"><i class="fa fa-comment"></i></a></li>
                                <li><a href="/frontuserprofile"><i class="fa fa-cog"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="dashboard-body">

                        <div class="dashboard-wraper">
                            <div class="row">

                                <!-- Submit Form -->
                                <div class="col-lg-12 col-md-12">

                                    <div class="submit-page">

                                        <!-- Basic Information -->
                                        <div class="frm_submit_block">
                                            <h3>Basic Information</h3>
                                            <div class="frm_submit_wrap">
                                                <div class="row">

                                                    <div class="form-group col-md-12">
                                                        <label>Property Title<a href="#" class="tip-topdata"
                                                                data-tip="Property Title"><i
                                                                    class="fa-solid fa-info"></i></a></label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Status</label>
                                                        <select id="status" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">For Rent</option>
                                                            <option value="2">For Sale</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Property Type</label>
                                                        <select id="ptypes" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">Houses</option>
                                                            <option value="2">Apartment</option>
                                                            <option value="3">Villas</option>
                                                            <option value="4">Commercial</option>
                                                            <option value="5">Offices</option>
                                                            <option value="6">Garage</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Price</label>
                                                        <input type="text" class="form-control" placeholder="USD">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Area</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Bedrooms</label>
                                                        <select class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Bathrooms</label>
                                                        <select id="bathrooms" class="form-control">
                                                            <option value="">&nbsp;</option>
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

                                        <!-- Gallery -->
                                        <div class="frm_submit_block">
                                            <h3>Gallery</h3>
                                            <div class="frm_submit_wrap">
                                                <div class="row">

                                                    <div class="form-group col-md-12">
                                                        <label>Upload Gallery</label>
                                                        <form action="#"
                                                            class="dropzone dz-clickable primary-dropzone">
                                                            <div class="dz-default dz-message">
                                                                <i class="fa-solid fa-images"></i>
                                                                <span>Drag & Drop To Change Logo</span>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Location -->
                                        <div class="frm_submit_block">
                                            <h3>Location</h3>
                                            <div class="frm_submit_wrap">
                                                <div class="row">

                                                    <div class="form-group col-md-6">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>City</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>State</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Zip Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Detailed Information -->
                                        <div class="frm_submit_block">
                                            <h3>Detailed Information</h3>
                                            <div class="frm_submit_wrap">
                                                <div class="row">

                                                    <div class="form-group col-md-12">
                                                        <label>Description</label>
                                                        <textarea class="form-control h-120"></textarea>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label>Building Age (optional)</label>
                                                        <select id="bage" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">0 - 5 Years</option>
                                                            <option value="2">0 - 10Years</option>
                                                            <option value="3">0 - 15 Years</option>
                                                            <option value="4">0 - 20 Years</option>
                                                            <option value="5">20+ Years</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label>Garage (optional)</label>
                                                        <select id="garage" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label>Rooms (optional)</label>
                                                        <select id="rooms" class="form-control">
                                                            <option value="">&nbsp;</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <strong>Other Features (optional)</strong>
                                                        <div class="o-features mt-2">
                                                            <ul class="no-ul-list row">
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-1" class="form-check-input"
                                                                        name="a-1" type="checkbox">
                                                                    <label for="a-1" class="form-check-label">Air
                                                                        Condition</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-2" class="form-check-input"
                                                                        name="a-2" type="checkbox">
                                                                    <label for="a-2"
                                                                        class="form-check-label">Bedding</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-3" class="form-check-input"
                                                                        name="a-3" type="checkbox">
                                                                    <label for="a-3"
                                                                        class="form-check-label">Heating</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-4" class="form-check-input"
                                                                        name="a-4" type="checkbox">
                                                                    <label for="a-4"
                                                                        class="form-check-label">Internet</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-5" class="form-check-input"
                                                                        name="a-5" type="checkbox">
                                                                    <label for="a-5"
                                                                        class="form-check-label">Microwave</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-6" class="form-check-input"
                                                                        name="a-6" type="checkbox">
                                                                    <label for="a-6" class="form-check-label">Smoking
                                                                        Allow</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-7" class="form-check-input"
                                                                        name="a-7" type="checkbox">
                                                                    <label for="a-7"
                                                                        class="form-check-label">Terrace</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-8" class="form-check-input"
                                                                        name="a-8" type="checkbox">
                                                                    <label for="a-8"
                                                                        class="form-check-label">Balcony</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-9" class="form-check-input"
                                                                        name="a-9" type="checkbox">
                                                                    <label for="a-9"
                                                                        class="form-check-label">Icon</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-10" class="form-check-input"
                                                                        name="a-10" type="checkbox">
                                                                    <label for="a-10"
                                                                        class="form-check-label">Wi-Fi</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-11" class="form-check-input"
                                                                        name="a-11" type="checkbox">
                                                                    <label for="a-11"
                                                                        class="form-check-label">Beach</label>
                                                                </li>
                                                                <li class="col-xl-4 col-lg-4 col-md-6 col-6">
                                                                    <input id="a-12" class="form-check-input"
                                                                        name="a-12" type="checkbox">
                                                                    <label for="a-12"
                                                                        class="form-check-label">Parking</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Contact Information -->
                                        <div class="frm_submit_block">
                                            <h3>Contact Information</h3>
                                            <div class="frm_submit_wrap">
                                                <div class="row">

                                                    <div class="form-group col-md-4">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label>Phone (optional)</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="gdpr">
                                                <label class="form-check-label" for="gdpr">I consent to having this
                                                    website store my submitted information so they can respond to my
                                                    inquiry.</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12">
                                            <button class="btn btn-primary" type="submit">Submit & Preview</button>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- row -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ User Dashboard End ================================== -->

@endsection
