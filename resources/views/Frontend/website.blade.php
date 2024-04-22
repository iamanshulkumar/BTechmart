<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Btech Mart') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/lightfaviconbtech.png') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/front-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/front-responsive.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                                <img src="{{ asset('assets/frontend-assets/img/btechmart-logo.png') }}" class="logo"
                                    alt="website-logo" />
                            </a>
                            <div class="nav-toggle"></div>

                            {{-- mopbiloe navigation --}}
                            <div class="mobile_nav">
                                <ul>
                                    <li class="list-buttons ">
                                        <a href="/addproperty" class="rounded shadow-lg">
                                            Add Listing
                                            <div class="fre__outerwrap">FREE <div class="fre__innerwrap"></div></div>
                                        </a>
                                    </li>
                                    <li class="list-buttons hideInMobile ">
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
													<div class="ntf-list-groups-caption"><p class="small">Hi Nothan, Your fund <strong>₹70,540</strong> transfer successfully in your account</p></div>
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
												<h4>Hi, Btechmart</h4>
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
                                    <a href="/propertylisting">Listing<span class="submenu-indicator"></span></a>
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
                                <li class="list-buttons  border">
                                    <a href="/addproperty" class="text-success">
                                        <i class="fa-solid fa-plus me-2"></i>
                                        Add Listing 
                                        <div class="fre__outerwrap">FREE <div class="fre__innerwrap"></div></div>
                                    </a>
                                </li>
                                <li class="list-buttons ms-2">
                                    <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i
                                            class="fas fa-sign-in-alt me-2"></i>Log In</a>
                                </li>
                                {{-- <li class="list-buttons ms-2">
                                    <a href="/signup"><i class="fas fa-user-alt me-2"></i>Sign Up</a>
                                </li> --}}
                            </ul>

                            {{-- logged in user --}}
                            {{-- <ul class="nav-menu nav-menu-social align-to-right dhsbrd me-3">
                                <li>
                                    <div class="btn-group account-drop">
                                        <button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown1"
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
                                                        <p class="small">Hi Nothan, Your fund <strong>₹70,540</strong>
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
                                        <button type="button" class="btn btn-order-by-filt "
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('assets/frontend-assets/img/user-5.png') }}"
                                                class="img-fluid circle" alt="">
                                        </button>
                                        <div class="dropdown-menu pull-right animated fadeIn">
                                            <div class="drp_menu_headr">
                                                <h4>Hi, Btechmart</h4>
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
                            </ul> --}}
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
        <section class="bg-cover call-action-container dark py-4"
            style="background: #065eb5 url(assets/frontend-assets/img/footer-bg-dark.png) no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
                        <div class="call-action-wrap">
                            <div class="call-action-caption">
                                <h4 class="text-light">Are You Already Working With Us?</h4>
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
                                <img src="{{ asset('assets/frontend-assets/img/lightlogo.png') }}" class="img-footer"
                                    alt="" />
                                <div class="footer-add">
                                    <p>India.</p>
                                    <p>
                                        <span class="ftp-info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>(+91) 0000000000</span>
                                    </p>
                                    <p>
                                        <span class="ftp-info"><i class="fa fa-envelope"
                                                aria-hidden="true"></i>info@btechmart.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 hideInMobile">
                            <div class="footer-widget">
                                <h4 class="widget-title">Navigations</h4>
                                <ul class="footer-menu">
                                    <li><a href="/aboutus">About Us</a></li>
                                    <li><a href="/faqs">FAQs Page</a></li>
                                    <li><a href="/checkout">Checkout</a></li>
                                    <li><a href="/contactus">Contact</a></li>
                                    <li><a href="/blogs">Blog</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 hideInMobile">
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

                        <div class="col-lg-2 col-md-6 hideInMobile">
                            <div class="footer-widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="footer-menu">
                                    <li><a href="/frontuserprofile">My Profile</a></li>
                                    <li><a href="JavaScript:Void(0);">Careers</a></li>
                                    <li><a href="/frontmyproperty">My Property</a></li>
                                    <li><a href="JavaScript:Void(0);">Favorites</a></li>
                                    <li><a href="JavaScript:Void(0);">Cart</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="col-lg-3 col-md-6">
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
                        </div> --}}
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


        <!-- ============================ Mobile Navigation ================================== -->
        <div class="nav-body hideInDesktop">
            <nav class="mobile-footer" role="menulist">
                <a href="#!" role="menuitem" class="active" aria-describedby="nav-current">
                    <svg aria-hidden="true">
                        <use xlink:href="#home-icon"></use>
                    </svg> Home
                </a>
                <a href="#!" role="menuitem">
                    <svg>
                        <use xlink:href="#insight"></use>
                    </svg> Insights
                </a>
                <a href="#!" role="menuitem">
                    <svg aria-hidden="true">
                        <use xlink:href="#bookmark-icon"></use>
                    </svg> Shortlist
                </a>
                <a href="#!" role="menuitem">
                    <svg aria-hidden="true">
                        <use xlink:href="#activity"></use>
                    </svg> Activity
                </a>
                <a href="#!" role="menuitem">
                    <svg aria-hidden="true">
                        <use xlink:href="#user-icon"></use>
                    </svg> Profile
                </a>
                <i class="line" id="nav-current">current item</i>
            </nav>


            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="insight" viewBox="0 0 384 512">
                    <path
                        d="M297.2 248.9C311.6 228.3 320 203.2 320 176c0-70.7-57.3-128-128-128S64 105.3 64 176c0 27.2 8.4 52.3 22.8 72.9c3.7 5.3 8.1 11.3 12.8 17.7l0 0c12.9 17.7 28.3 38.9 39.8 59.8c10.4 19 15.7 38.8 18.3 57.5H109c-2.2-12-5.9-23.7-11.8-34.5c-9.9-18-22.2-34.9-34.5-51.8l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C27.6 247.9 16 213.3 16 176C16 78.8 94.8 0 192 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0c-12.3 16.8-24.6 33.7-34.5 51.8c-5.9 10.8-9.6 22.5-11.8 34.5H226.4c2.6-18.7 7.9-38.6 18.3-57.5c11.5-20.9 26.9-42.1 39.8-59.8l0 0 0 0 0 0c4.7-6.4 9-12.4 12.7-17.7zM192 128c-26.5 0-48 21.5-48 48c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-44.2 35.8-80 80-80c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0 384c-44.2 0-80-35.8-80-80V416H272v16c0 44.2-35.8 80-80 80z" />
                </symbol>
                <symbol id="home-icon" viewBox="0 0 9 9">
                    <path
                        d="M7.7 8.5c.3 0 .5-.2.5-.5V3.5c0-.1-.1-.3-.2-.4L4.8.6c-.2-.1-.5-.1-.7 0L1 3.1c-.1.1-.2.3-.2.4V8c0 .3.2.5.5.5h6.4zm-4.8-1h-1V3.8l2.6-2.1 2.6 2.1v3.7H2.9z" />
                </symbol>
                <symbol id="favorites-icon" viewBox="0 0 9 9">
                    <path
                        d="M4.2 8.4C3.8 8 .5 5.2.5 3 .5 1.6 1.6.5 2.9.5c.6 0 1.2.3 1.6.6.4-.4 1-.6 1.6-.6C7.4.5 8.5 1.6 8.5 3c0 2.2-3.3 5-3.7 5.3-.2.2-.5.2-.6.1zM2.9 1.5c-.7 0-1.4.7-1.4 1.5 0 1.1 1.8 3.1 3 4.3 1.1-1 3-3 3-4.3 0-.8-.6-1.5-1.4-1.5-.5 0-.9.3-1.2.7-.2.3-.6.3-.8 0-.3-.4-.7-.7-1.2-.7z" />
                </symbol>
                <symbol id="activity" viewBox="0 0 576 512">
                    <path
                        d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H512c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm96 64a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm104 0c0-13.3 10.7-24 24-24H448c13.3 0 24 10.7 24 24s-10.7 24-24 24H224c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24H448c13.3 0 24 10.7 24 24s-10.7 24-24 24H224c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24H448c13.3 0 24 10.7 24 24s-10.7 24-24 24H224c-13.3 0-24-10.7-24-24zm-72-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM96 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                </symbol>
                <symbol id="plus-icon" viewBox="0 0 9 9">
                    <path
                        d="M4.9 2.5h-.8v1.6H2.5v.8h1.6v1.6h.8V4.9h1.6v-.8H4.9V2.5zm-.4-2c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4zm0 7.2c-1.8 0-3.2-1.4-3.2-3.2s1.4-3.2 3.2-3.2 3.2 1.4 3.2 3.2-1.4 3.2-3.2 3.2z" />
                </symbol>
                <symbol id="bookmark-icon" viewBox="0 0 9 9">
                    <path
                        d="M2.3.5h4.4c.5 0 .9.4.9.9v7.1L4.5 7.2 1.4 8.5V1.4c0-.5.4-.9.9-.9zm2.2 5.7l2.2 1V1.4H2.3v5.8l2.2-1z" />
                </symbol>
                <symbol id="user-icon" viewBox="0 0 9 9">
                    <path
                        d="M5.9 5.3c-.4 0-.7.3-1.4.3s-1-.3-1.4-.3c-1.2 0-2.1.9-2.1 2v.4c0 .4.3.8.8.8h5.5c.4 0 .7-.3.7-.7v-.5c0-1.1-.9-2-2.1-2zm1.4 2.5H1.8v-.5c0-.7.6-1.3 1.3-1.3.2 0 .6.3 1.4.3.8 0 1.2-.3 1.4-.3.7 0 1.3.6 1.3 1.3v.5zM4.5 5c1.2 0 2.3-1 2.3-2.3S5.8.4 4.5.4s-2.3 1-2.3 2.3S3.3 5 4.5 5zm0-3.7c.8 0 1.5.6 1.5 1.5s-.7 1.5-1.5 1.5S3 3.6 3 2.8s.7-1.5 1.5-1.5z" />
                </symbol>
            </svg>
        </div>
        <!-- ============================ Mobile Navigation End ================================== -->


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
                            <h4 class="mb-0">Mr. Btechmart</h4>
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
                            Don't have an account yet?<a href="/signup" class="theme-cl font--bold ms-1">Sign
                                Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- Availability Modal -->
        <div class="modal fade" id="availability" tabindex="-1" role="dialog" aria-labelledby="availabilitymodal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered availability-pop-form" role="document">
                <div class="modal-content" id="availabilitymodal">
                    <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i
                            class="fas fa-close"></i></span>
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
                                            <input class="form-check-input" type="checkbox" id="terms"
                                                value="option1">
                                            <label class="form-check-label small font--medium" for="terms">By
                                                submitting
                                                this form, you agree to our <a href="JavaScript:Void(0);"
                                                    title="Terms of Service" class="theme-cl font--medium">Terms of
                                                    Service</a> and <a href="JavaScript:Void(0);"
                                                    title="Privacy Policy" class="theme-cl font--medium">Privacy
                                                    Policy</a>.</label>
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

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i
                class="fa-solid fa-angle-up"></i></a>

        {{-- offcanvas bottom footer --}}
        <div class="offcanvas offcanvas-bottom insight-offcanvas" tabindex="-1" id="offcanvasBottom"
            aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Looking to invest in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
                <div class="availability-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>City*</label>
                                    <input type="text" class="form-control" placeholder="eg: Delhi" >
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group budget">
                                    <label>Your Budget*</label>
                                    <div class="d-flex justify-content-evenly align-content-center  ">
                                        <div class="form-group w-100">
                                            <select id="low-range" class="select-normal price-range">
                                                <option value="0">₹ 0</option>
                                                <option value="1">California</option>
                                                <option value="2">Denver</option>
                                                <option value="3">New York</option>
                                                <option value="4">Washington</option>
                                                <option value="5">Canada</option>
                                            </select>
                                        </div>
                                        <label class="mx-2 align-content-center d-grid">
                                            to
                                        </label>
                                        <div class="form-group w-100">
                                            <select id="high-range" class="select-normal price-range">
                                                <option value="0">₹ 100+ Cr</option>
                                                <option value="1">California</option>
                                                <option value="2">Denver</option>
                                                <option value="3">New York</option>
                                                <option value="4">Washington</option>
                                                <option value="5">Canada</option>
                                            </select>
                                        </div>
                                    </div>
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
                                        <input type="text" class="form-control" placeholder="Btechmart">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control"
                                            placeholder="Btechmart@gmail.com">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Offer</label>
                                        <input type="text" class="form-control" placeholder="₹47,500">
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
    <script src="{{ asset('assets/frontend-assets/js/mob-nav.js') }}"></script>
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
