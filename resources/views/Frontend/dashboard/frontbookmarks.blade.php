@extends('frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Hi, Harshvardhan</h2>
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
                            <img src="{{ asset('assets/frontend-assets/img/team-3.jpg') }}" class="img-fluid avater"
                                alt="">
                            <h4>Adam Harshvardhan</h4>
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
                                <li  class="active"><a href="/frontbookmarks"><i class="fa fa-bookmark"></i>Saved Property</a></li>
                                <li><a href="/frontmyproperty"><i class="fa fa-tasks"></i>My Properties</a></li>
                                <li><a href="/frontmessages"><i class="fa fa-envelope"></i>Messages</a></li> 
                                <li><a href="/frontchoosepackage"><i class="fa fa-gift"></i>Choose Package</a></li>
                                <li><a href="/frontsubmitproperty"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
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

                            <!-- Bookmark Property -->
                            <div class="frm_submit_block">
                                <h4>Bookmark Property</h4>
                            </div>

                            <table class="property-table-wrap responsive-table bkmark">

                                <tbody>
                                    <tr>
                                        <th><i class="fa fa-file-text"></i> Property</th>
                                        <th></th>
                                    </tr>

                                    <!-- Item #1 -->
                                    <tr>
                                        <td class="dashboard_propert_wrapper">
                                            <img src="{{ asset('assets/frontend-assets/img/prt-2.png') }}" alt="">
                                            <div class="title">
                                                <h4><a href="#">11/15 Owr Tree Town</a></h4>
                                                <span>6 Bishop Ave. Perkasie, PA </span>
                                                <span class="table-property-price">₹900 / monthly</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="JavaScript:Void(0);" class="delete"><i
                                                    class="fa-solid fa-xmark me-1"></i>Delete</a>
                                        </td>
                                    </tr>

                                    <!-- Item #2 -->
                                    <tr>
                                        <td class="dashboard_propert_wrapper">
                                            <img src="{{ asset('assets/frontend-assets/img/prt-3.png') }}" alt="">
                                            <div class="title">
                                                <h4><a href="#">310 Jannat Enclave</a></h4>
                                                <span>71 Lower River Dr. Bronx, NY</span>
                                                <span class="table-property-price">₹535,000</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="JavaScript:Void(0);" class="delete"><i
                                                    class="fa-solid fa-xmark me-1"></i>Delete</a>
                                        </td>
                                    </tr>

                                    <!-- Item #3 -->
                                    <tr>
                                        <td class="dashboard_propert_wrapper">
                                            <img src="{{ asset('assets/frontend-assets/img/prt-4.png') }}" alt="">
                                            <div class="title">
                                                <h4><a href="#">405 New Shiwalay Villas</a></h4>
                                                <span>33 William St. Northbrook, IL </span>
                                                <span class="table-property-price">₹420,000</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="JavaScript:Void(0);" class="delete"><i
                                                    class="fa-solid fa-xmark me-1"></i>Delete</a>
                                        </td>
                                    </tr>

                                    <!-- Item #4 -->
                                    <tr>
                                        <td class="dashboard_propert_wrapper">
                                            <img src="{{ asset('assets/frontend-assets/img/prt-5.png') }}" alt="">
                                            <div class="title">
                                                <h4><a href="#">33/450 Okhla Green Apartment</a></h4>
                                                <span> 7843 Durham Avenue, MD </span>
                                                <span class="table-property-price">₹420,000</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="JavaScript:Void(0);" class="delete"><i
                                                    class="fa-solid fa-xmark me-1"></i>Delete</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ User Dashboard End ================================== -->

@endsection
