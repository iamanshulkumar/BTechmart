<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/frontend-assets/img/favicon.png') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/front-styles.css') }}">

</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div>
    <div id="main-wrapper">
        <!-- Start Navigation -->

        <header>
            <div class="header header-light head-shadow">
                <div class="container">
                    <nav id="navigation" class="navigation navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand" href="/">
                                <img src="{{ asset('assets/frontend-assets/img/logo.png') }}" class="logo"
                                    alt="website-logo" />
                            </a>
                            <div class="nav-toggle"></div>
                            <div class="mobile_nav">
                                <ul>
                                    <li class="list-buttons">
                                        <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                                                class="fas fa-sign-in-alt me-2"></i>Log In</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none">
                            <ul class="nav-menu">
                                <li class="active">
                                    <a href="/">Home<span class="submenu-indicator"></span></a>
                                    {{-- <ul class="nav-dropdown nav-submenu">
                                        <li>
                                            <a class="active" href="index-2.html">Home Layout 1</a>
                                        </li>
                                        <li><a href="home-2.html">Home Layout 2</a></li>
                                        <li><a href="home-3.html">Home Layout 3</a></li>
                                        <li><a href="home-4.html">Home Layout 4</a></li>
                                        <li><a href="home-5.html">Home Layout 5</a></li>
                                        <li><a href="home-6.html">Home Layout 6</a></li>
                                        <li><a href="home-7.html">Home Layout 7</a></li>
                                    </ul> --}}
                                </li>

                                <li>
                                    <a href="/gridlisting">Listing<span class="submenu-indicator"></span></a>
                                    {{-- <ul class="nav-dropdown nav-submenu">
                                        <li>
                                            <a href="JavaScript:Void(0);">Grid Layout<span
                                                    class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="grid-style-1.html">Grid Style 1</a></li>
                                                <li><a href="grid-style-2.html">Grid Stle 2</a></li>
                                                <li><a href="grid-style-3.html">Grid Style 3</a></li>
                                                <li>
                                                    <a href="grid-full-style-1.html">Grid Full Style 1</a>
                                                </li>
                                                <li>
                                                    <a href="grid-full-style-2.html">Grid Full Style 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="JavaScript:Void(0);">List Layout<span
                                                    class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="list-style-1.html">List Style 1</a></li>
                                                <li><a href="list-style-2.html">List Style 2</a></li>
                                                <li>
                                                    <a href="list-full-style-1.html">List Full Style 1</a>
                                                </li>
                                                <li>
                                                    <a href="list-full-style-2.html">List Full Style 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="JavaScript:Void(0);">Search With Map<span
                                                    class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="half-map.html">Half Map Style 1</a></li>
                                                <li><a href="half-map-2.html">Half Map Style 2</a></li>
                                                <li><a href="half-map-3.html">Half Map Style 3</a></li>
                                                <li>
                                                    <a href="half-map-list.html">Half Map List Search 1</a>
                                                </li>
                                                <li>
                                                    <a href="half-map-list-2.html">Half Map List Search 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="/singleproperty">Property</a>
                                </li>

                                <li>
                                    <a href="JavaScript:Void(0);">Features<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li>
                                            <a href="JavaScript:Void(0);">Single Property<span
                                                    class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li>
                                                    <a href="single-property-1.html">Single Property 1</a>
                                                </li>
                                                <li>
                                                    <a href="single-property-2.html">Single Property 2</a>
                                                </li>
                                                <li>
                                                    <a href="single-property-3.html">Single Property 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="JavaScript:Void(0);">Agencies & Agents<span
                                                    class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li>
                                                    <a href="agent-grid.html">Agents Search Grid</a>
                                                </li>
                                                <li><a href="agent-list.html">Agent Search List</a></li>
                                                <li>
                                                    <a href="agency-grid.html">Agency Search Grid</a>
                                                </li>
                                                <li>
                                                    <a href="agency-list.html">Agency Search List</a>
                                                </li>
                                                <li><a href="agent-detail.html">Agent Detail</a></li>
                                                <li><a href="agency-detail.html">Agency Detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="JavaScript:Void(0);">My Account<span
                                                    class="submenu-indicator"></span></a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <li><a href="dashboard.html">User Dashboard</a></li>
                                                <li>
                                                    <a href="submit-property-dashboard.html">Submit Property</a>
                                                </li>
                                                <li><a href="my-profile.html">My Profile</a></li>
                                                <li><a href="my-property.html">Property List</a></li>
                                                <li>
                                                    <a href="bookmark-list.html">Bookmarked Listings</a>
                                                </li>
                                                <li>
                                                    <a href="change-password.html">Change Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="compare-property.html">Compare Property</a>
                                        </li>
                                        <li>
                                            <a href="submit-property.html">Submit Property</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="404.html">Error Page</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="blog.html">Blogs Page</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                        <li><a href="privacy.html">Terms & Privacy</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="contact.html">Contacts</a></li>
                                    </ul>
                                </li>

                                
                                <li>
                                    <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/"
                                        target="_blank">Help</a>
                                </li>
                            </ul>

                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li class="list-buttons border">
                                    <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                                            class="fas fa-sign-in-alt me-2"></i>Log In</a>
                                </li>
                                <li class="list-buttons ms-2">
                                    <a href="/signup"><i class="fas fa-user-alt me-2"></i>Sign Up</a>
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
        <!-- ============================ Footer Start ================================== -->
        <footer class="skin-dark-footer black">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <img src="{{ asset('assets/frontend-assets/img/logo-light.png') }}" class="img-footer"
                                    alt="" />
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
                                © 2023 Veshm. Designd By
                                <a href="https://themezhub.com/">Themez Hub</a> All Rights
                                Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

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

    <script src="{{ asset('assets/frontend-assets/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
</body>

</html>
