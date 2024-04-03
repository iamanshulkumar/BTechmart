<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/frontend-assets/img/faviconbtech.png') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/front-styles.css') }}">

</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    {{-- <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div> --}}
    <div id="main-wrapper">
        <!-- Start Navigation -->

        <header>
            <div class="header header-light head-shadow">
                <div class="container">
                    <nav id="navigation" class="navigation navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand" href="/">
                                <img src="{{ asset('assets/frontend-assets/img/btechmart-logo.png') }}" class="logo"
                                    alt="website-logo" />
                            </a>
                            <div class="nav-toggle"></div>

                            {{-- mopbiloe navigation --}}
                            <div class="mobile_nav">
                                <ul>
                                    <li class="list-buttons">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                                                class="fas fa-sign-in-alt me-2"></i>Log In</a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <ul class="mobile_nav dhsbrd">
								<li>
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa-regular fa-bell"></i><span class="noti-status"></span>
										</button>
										<div class="dropdown-menu pull-right animated fadeIn">
											<div class="drp_menu_headr">
												<h4>Notifications</h4>
											</div>
											<div class="ntf-list-groups">
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-purple"><i class="fa-solid fa-house-medical-circle-check"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Hi, Nothan your <strong>Vesh</strong> property uploaded successfully</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-warning"><i class="fa-solid fa-envelope"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">You have got 2 message from <strong class="text-success">Daniel</strong> 2 days ago</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-success"><i class="fa-solid fa-sack-dollar"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Hi Nothan, Your fund <strong>$70,540</strong> transfer successfully in your account</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-danger"><i class="fa-solid fa-comments"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">2 New agent send you report messages 5 days ago</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<div class="ntf-list-groups-icon text-info"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
													<div class="ntf-list-groups-caption"><p class="small">Your payment for <strong class="text-danger">Resido</strong> proerty are cancelled due to server error</p></div>
												</div>
												<div class="ntf-list-groups-single">
													<a href="#" class="ntf-more">View All Notifications</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="btn-group account-drop">
										<button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img src="{{ asset('assets/frontend-assets/img/user-5.png')}}" class="img-fluid circle" alt="">
										</button>
										<div class="dropdown-menu pull-right animated fadeIn">
											<div class="drp_menu_headr">
												<h4>Hi, Dhananjay</h4>
												<div class="drp_menu_headr-right"><button type="button" class="btn btn-whites">Logout</button></div>
											</div>
											<ul>
												<li><a href="dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>                                  
												<li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
												<li><a href="bookmark-list.html"><i class="fa fa-bookmark"></i>Saved Property<span class="notti_coun style-2">7</span></a></li>
												<li><a href="my-property.html"><i class="fa fa-tasks"></i>My Properties</a></li>
												<li><a href="messages.html"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
												<li><a href="choose-package.html"><i class="fa fa-gift"></i>Choose Package</a></li>
												<li><a href="submit-property-dashboard.html"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
												<li><a href="change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul> --}}
                        </div>

                        {{-- desktop navigation --}}
                        <div class="nav-menus-wrapper" style="transition-property: none">
                            <ul class="nav-menu">
                                <li class="active">
                                    <a href="/">Home<span class="submenu-indicator"></span></a>
                                </li>

                                <li>
                                    <a href="/grid-listing">Listing<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li>
                                            <a href="/singleproperty">Property</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="/agentgrid">All Agents</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li>
                                            <a href="/agentdetails">Agent Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="/frontdashboard">My Account<span class="submenu-indicator"></span></a>
                                </li>
                                <li>
                                    <a href="/addproperty">Submit Property</a>
                                </li>

                                <li>
                                    <a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="/aboutus">About Us</a></li>
                                        <li><a href="/error404">Error Page</a></li>
                                        <li><a href="/checkout">Checkout</a></li>
                                        <li><a href="/blogs">Blogs Page</a></li>
                                        <li><a href="/blogdetail">Blog Detail</a></li>
                                        <li><a href="/privacypolicy">Terms & Privacy</a></li>
                                        <li><a href="/pricingpage">Pricing</a></li>
                                        <li><a href="/faqs">FAQ's</a></li>
                                        <li><a href="/contactus">Contacts</a></li>
                                    </ul>
                                </li>
                            </ul>

                            {{-- loggedout user --}}
                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li class="list-buttons border">
                                    <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                                            class="fas fa-sign-in-alt me-2"></i>Log In</a>
                                </li>
                                <li class="list-buttons ms-2">
                                    <a href="/signup"><i class="fas fa-user-alt me-2"></i>Sign Up</a>
                                </li>
                            </ul>

                            {{-- logged in user --}}
                            <ul class="nav-menu nav-menu-social align-to-right dhsbrd me-3">
                                <li>
                                    <div class="btn-group account-drop">
                                        <button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-regular fa-bell"></i><span class="noti-status"></span>
                                        </button>
                                        <div class="dropdown-menu pull-right animated fadeIn">
                                            <div class="drp_menu_headr">
                                                <h4>Notifications</h4>
                                            </div>
                                            <div class="ntf-list-groups">
                                                <div class="ntf-list-groups-single">
                                                    <div class="ntf-list-groups-icon text-purple"><i
                                                            class="fa-solid fa-house-medical-circle-check"></i></div>
                                                    <div class="ntf-list-groups-caption">
                                                        <p class="small">Hi, Nothan your <strong>Vesh</strong> property
                                                            uploaded successfully</p>
                                                    </div>
                                                </div>
                                                <div class="ntf-list-groups-single">
                                                    <div class="ntf-list-groups-icon text-warning"><i
                                                            class="fa-solid fa-envelope"></i></div>
                                                    <div class="ntf-list-groups-caption">
                                                        <p class="small">You have got 2 message from <strong
                                                                class="text-success">Daniel</strong> 2 days ago</p>
                                                    </div>
                                                </div>
                                                <div class="ntf-list-groups-single">
                                                    <div class="ntf-list-groups-icon text-success"><i
                                                            class="fa-solid fa-sack-dollar"></i></div>
                                                    <div class="ntf-list-groups-caption">
                                                        <p class="small">Hi Nothan, Your fund <strong>$70,540</strong>
                                                            transfer successfully in your account</p>
                                                    </div>
                                                </div>
                                                <div class="ntf-list-groups-single">
                                                    <div class="ntf-list-groups-icon text-danger"><i
                                                            class="fa-solid fa-comments"></i></div>
                                                    <div class="ntf-list-groups-caption">
                                                        <p class="small">2 New agent send you report messages 5 days
                                                            ago</p>
                                                    </div>
                                                </div>
                                                <div class="ntf-list-groups-single">
                                                    <div class="ntf-list-groups-icon text-info"><i
                                                            class="fa-solid fa-circle-dollar-to-slot"></i></div>
                                                    <div class="ntf-list-groups-caption">
                                                        <p class="small">Your payment for <strong
                                                                class="text-danger">Resido</strong> proerty are
                                                            cancelled due to server error</p>
                                                    </div>
                                                </div>
                                                <div class="ntf-list-groups-single">
                                                    <a href="#" class="ntf-more">View All Notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="btn-group account-drop">
                                        <button type="button" class="btn btn-order-by-filt"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('assets/frontend-assets/img/user-5.png') }}"
                                                class="img-fluid circle" alt="">
                                        </button>
                                        <div class="dropdown-menu pull-right animated fadeIn">
                                            <div class="drp_menu_headr">
                                                <h4>Hi, Dhananjay</h4>
                                                <div class="drp_menu_headr-right"><button type="button"
                                                        class="btn btn-whites">Logout</button></div>
                                            </div>
                                            <ul>
                                                <li><a href="/frontdashboard"><i
                                                            class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                                                <li><a href="/frontuserprofile"><i class="fa fa-user-tie"></i>My
                                                        Profile</a></li>
                                                <li><a href="/frontbookmarks"><i class="fa fa-bookmark"></i>Saved
                                                        Property</a></li>
                                                <li><a href="/frontmyproperty"><i class="fa fa-tasks"></i>My
                                                        Properties</a></li>
                                                <li><a href="/frontmessages"><i
                                                            class="fa fa-envelope"></i>Messages</a></li>
                                                <li><a href="choose-package.html"><i class="fa fa-gift"></i>Choose
                                                        Package</a></li>
                                                <li><a href="/frontsubmitproperty"><i
                                                            class="fa fa-pen-nib"></i>Submit New Property</a></li>
                                                <li><a href="/frontchangepassword"><i
                                                            class="fa fa-unlock-alt"></i>Change Password</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <div class="main">
            @yield('content')
        </div>
        <!-- ============================ Call To Action ================================== -->
        <section class="bg-cover call-action-container dark"
            style="background: #065eb5 url(assets/frontend-assets/img/footer-bg-dark.png) no-repeat">
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
        <!-- ============================ Footer Start ================================== -->
        <footer class="skin-light-footer">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <img src="{{ asset('assets/frontend-assets/img/btechmart-logo.png') }}"
                                    class="img-footer" alt="" />
                                <div class="footer-add">
                                    <p>Collins Street West, Victoria 8007, Australia.</p>
                                    <p>
                                        <span class="ftp-info"><i class="fa fa-phone" aria-hidden="true"></i>+1
                                            246-345-0695</span>
                                    </p>
                                    <p>
                                        <span class="ftp-info"><i class="fa fa-envelope"
                                                aria-hidden="true"></i>info@example.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">Navigations</h4>
                                <ul class="footer-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="faq.html">FAQs Page</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">The Highlights</h4>
                                <ul class="footer-menu">
                                    <li><a href="JavaScript:Void(0);">Apartment</a></li>
                                    <li><a href="JavaScript:Void(0);">My Houses</a></li>
                                    <li><a href="JavaScript:Void(0);">Restaurant</a></li>
                                    <li><a href="JavaScript:Void(0);">Nightlife</a></li>
                                    <li><a href="JavaScript:Void(0);">Villas</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="footer-menu">
                                    <li><a href="JavaScript:Void(0);">My Profile</a></li>
                                    <li><a href="JavaScript:Void(0);">My account</a></li>
                                    <li><a href="JavaScript:Void(0);">My Property</a></li>
                                    <li><a href="JavaScript:Void(0);">Favorites</a></li>
                                    <li><a href="JavaScript:Void(0);">Cart</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">Download Apps</h4>
                                <div class="app-wrap">
                                    <p>
                                        <a href="JavaScript:Void(0);"><img
                                                src="{{ asset('assets/frontend-assets/img/light-play.png') }}"
                                                class="img-fluid" alt="" /></a>
                                    </p>
                                    <p>
                                        <a href="JavaScript:Void(0);"><img
                                                src="{{ asset('assets/frontend-assets/img/light-ios.png') }}"
                                                class="img-fluid" alt="" /></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <p class="mb-0">
                                © 2024 Btech Mart. Designd By
                                <a href="https://yuvmedia.in/">Yuvmedia</a> All Rights
                                Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <!-- Message Modal -->
        <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messagemodal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered message-pop-form" role="document">
                <div class="modal-content" id="messagemodal">
                    <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i
                            class="fas fa-close"></i></span>
                    <div class="modal-body">
                        <div class="text-center">
                            <h2 class="mb-0">Say Hi,</h2>
                            <h4 class="mb-0">Mr. Dhananjay Preet</h4>
                            <a class="text-success font--bold" href="tel:4048651904">(404) 865-1904</a>
                        </div>
                        <div class="message-form">
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
                                            <input class="form-check-input" type="checkbox" id="msg"
                                                value="option1">
                                            <label class="form-check-label small font--medium" for="msg">By
                                                submitting this form, you agree to our <a href="JavaScript:Void(0);"
                                                    title="Terms of Service" class="theme-cl font--medium">Terms of
                                                    Service</a> and <a href="JavaScript:Void(0);"
                                                    title="Privacy Policy" class="theme-cl font--medium">Privacy
                                                    Policy</a>.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn full-width btn-danger">Send Message</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- Log In Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i
                            class="fas fa-close"></i></span>
                    <div class="modal-header">
                        <div class="mdl-thumb">
                            <img src="{{ asset('assets/frontend-assets/img/faviconbtech.png') }}" class="img-fluid"
                                width="25" alt="" />
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
                                    <button type="submit" class="btn btn-danger full-width font--bold btn-lg">
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
                            Don't have an account yet?<a href="/signup" class="theme-cl font--bold ms-1">Sign
                                Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

    </div>


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/frontend-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/datedropper-javascript.js') }}"></script>

    {{-- <script src="{{ asset('assets/frontend-assets/js/custom/dashboard.js') }}"></script> --}}


    <script src="{{ asset('assets/frontend-assets/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <!-- Morris.js charts -->
    {{-- <script src="{{ asset('assets/frontend-assets/js/raphael/raphael.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend-assets/js/morris.js/morris.min.js') }}"></script>  --}}
    <!-- Custom Chart JavaScript -->
    {{-- this causes issues in frontend dropdowns and graphs --}}
    {{-- <script src="{{ asset('assets/frontend-assets/js/custom/dashboard.js') }}"></script> --}}
</body>

</html>
