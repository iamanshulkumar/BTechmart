@extends('Frontend.website')
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
                        <img src="{{ asset('assets/frontend-assets/img/team-3.jpg')}}" class="img-fluid avater" alt="">
                        <h4>Adam Harshvardhan</h4>
                        <span class="font--medium small"><i class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span>
                    </div>
                    
                    <div class="adgt-wriop-social">
                        <ul>
                            <li><a href="JavaScript:Void(0);" class="bg--facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="JavaScript:Void(0);" class="bg--twitter"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="JavaScript:Void(0);" class="bg--googleplus"><i class="fa-brands fa-google-plus-g"></i></a></li>
                            <li><a href="JavaScript:Void(0);" class="bg--linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    
                    <div class="adgt-wriop-footer py-3 px-3">
                        <div class="single-button d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-md font--bold btn-light-primary me-2 full-width"><i class="fa-solid fa-phone me-2"></i>856 742 672</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#message" class="btn btn-md font--bold btn-light-success full-width"><i class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                        </div>
                    </div>
                    
                    <div class="dash_user_menues">
                        <ul>
                            <li><a href="/frontdashboard"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                            <li><a href="/frontuserprofile"><i class="fa fa-user-tie"></i>My Profile</a></li>
                            <li><a href="/frontbookmarks"><i class="fa fa-bookmark"></i>Saved Property</a></li>
                            <li><a href="/frontmyproperty"><i class="fa fa-tasks"></i>My Properties</a></li>
                            <li class="active"><a href="/frontmessages"><i class="fa fa-envelope"></i>Messages</a></li> 
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
                <!-- Convershion -->
                <div class="messages-container margin-top-0">
                    <div class="messages-headline">
                        <h4>Connor Griffin</h4>
                        <a href="#" class="message-action"><i class="ti-trash"></i> Delete Conversation</a>
                    </div>

                    <div class="messages-container-inner">

                        <!-- Messages -->
                        <div class="dash-msg-inbox">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-1.jpg')}}" alt=""><span class="_user_status online"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Tilly Bartlett</h5>
                                                <span>36 min ago</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year.. </p>
                                        </div>
                                    </a>
                                </li>

                                <li class="active-message">
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-2.jpg')}}" alt=""><span class="_user_status offline"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>George Howarth</h5>
                                                <span>2 hours ago</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-3.jpg')}}" alt=""><span class="_user_status busy"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Harriet Ball</h5>
                                                <span>Yesterday</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-4.jpg')}}" alt=""><span class="_user_status online"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Sienna Bruce</h5>
                                                <span>02.01.2020</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-5.jpg')}}" alt=""><span class="_user_status busy"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Leo Stewart</h5>
                                                <span>03.01.2020</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-1.jpg')}}" alt=""><span class="_user_status online"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Shaurya Preet</h5>
                                                <span>05.01.2020</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-2.jpg')}}" alt=""><span class="_user_status offline"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Dan Preet</h5>
                                                <span>04.01.2020</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-3.jpg')}}" alt=""><span class="_user_status online"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Maddison</h5>
                                                <span>31.05.2019</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-4.jpg')}}" alt=""><span class="_user_status busy"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Maddison</h5>
                                                <span>27.05.2019</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-5.jpg')}}" alt=""><span class="_user_status busy"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Eleanor Lloyd</h5>
                                                <span>24.05.2019</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-1.jpg')}}" alt=""><span class="_user_status offline"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Anna Curtis</h5>
                                                <span>05.01.2020</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/team-2.jpg')}}" alt=""><span class="_user_status online"></span></div>

                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Tyler Fraser</h5>
                                                <span>07.01.2020</span>
                                            </div>
                                            <p>Hello, I am a web designer with 5 year..</p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- Messages / End -->

                        <!-- Message Content -->
                        <div class="dash-msg-content">

                            <div class="message-plunch">
                                <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/user-5.png')}}" alt=""></div>
                                <div class="dash-msg-text"><p>Hello, Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p></div>
                            </div>

                            <div class="message-plunch me">
                                <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/user-3.png')}}" alt=""></div>
                                <div class="dash-msg-text"><p>looked up one of the more obscure Latin words, consectetur, from a Lorem</p></div>
                            </div>

                            <div class="message-plunch">
                                <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/user-5.png')}}" alt=""></div>
                                <div class="dash-msg-text"><p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p></div>
                            </div>

                            <div class="message-plunch me">
                                <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/user-3.png')}}" alt=""></div>
                                <div class="dash-msg-text"><p>please consider donating a small sum to help pay for the hosting and bandwidth bill.</p></div>
                            </div>

                            <div class="message-plunch">
                                <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/user-5.png')}}" alt=""></div>
                                <div class="dash-msg-text"><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p></div>
                            </div>

                            <div class="message-plunch me">
                                <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/user-3.png')}}" alt=""></div>
                                <div class="dash-msg-text"><p>numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p></div>
                            </div>

                            <div class="message-plunch">
                                <div class="dash-msg-avatar"><img src="{{ asset('assets/frontend-assets/img/user-5.png')}}" alt=""></div>
                                <div class="dash-msg-text"><p>But I must explain to you how all this mistaken idea of denouncing pleasure</p></div>
                            </div>
                            
                            <!-- Reply Area -->
                            <div class="clearfix"></div>
                            <div class="message-reply">
                                <textarea cols="40" rows="3" class="form-control with-light" placeholder="Your Message"></textarea>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                            
                        </div>
                        <!-- Message Content -->

                    </div>

                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->


@endsection