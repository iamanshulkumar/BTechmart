@extends('frontend.website')
@section('cotent')

    <!-- ============================ Page Title Start================================== -->
			<div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Our Latest News</h2>
							<span class="ipn-subtitle">Get all latest news and updates</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Blog List Start ================================== -->
			<section class="gray-simple">
				<div class="container">
				
					<!-- row Start -->
					<div class="row gx-4 gy-4">
					
						<!-- Single blog Grid -->
						<div class="col-lg-6 col-md-12">
							<div class="blog-list-block">
								
								<div class="blog-list-thumber">
									<a href="blog-detail.html"><img src="{{ asset('assets/frontend-assets/img/blog-1.jpg')}}" class="img-fluid rounded" alt=""></a>
								</div>
								<div class="blog-list-caption">
									<div class="blog-info">
										<span class="label text-success bg-light-success">Education</span>
										<h4 class="bl-title"><a href="blog-detail.html">14 Newsletters You’ll Want in Your Inbox in 2023</a></h4>
									</div>
									
									<div class="blog-body">
										<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled</p>
									</div>
									
									<div class="blg-authr d-flex align-items-center">
										<div class="blg-authr-thumb"><img src="{{ asset('assets/frontend-assets/img/team-1.jpg')}}" class="img-fluid circle" width="45" alt=""></div>
										<div class="blg-authr-caption ps-2">
											<h6 class="mb-0">Tamilore Oladipo</h6>
											<span class="text-mid">3 Days Ago</span>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-lg-6 col-md-12">
							<div class="blog-list-block">
								
								<div class="blog-list-thumber">
									<a href="blog-detail.html"><img src="{{ asset('assets/frontend-assets/img/blog-2.jpg')}}" class="img-fluid rounded" alt=""></a>
								</div>
								<div class="blog-list-caption">
									<div class="blog-info">
										<span class="label text-warning bg-light-warning">Resources</span>
										<h4 class="bl-title"><a href="blog-detail.html">How a Change in My Role Inspired Six Impactful Habits</a></h4>
									</div>
									
									<div class="blog-body">
										<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled</p>
									</div>
									
									<div class="blg-authr d-flex align-items-center">
										<div class="blg-authr-thumb"><img src="{{ asset('assets/frontend-assets/img/team-2.jpg')}}" class="img-fluid circle" width="45" alt=""></div>
										<div class="blg-authr-caption ps-2">
											<h6 class="mb-0">Angel J. Erickson</h6>
											<span class="text-mid">4 Days Ago</span>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="veshm-grid-blog">
								<div class="veshm-grid-blog-thumb">
									<img src="{{ asset('assets/frontend-assets/img/blog-3.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="veshm-grid-blog-body">
									<div class="veshm-grid-body-header">
										<div class="veshm-grid-posted"><span>26 Feb 2023</span></div>
										<div class="veshm-grid-title"><h4><a href="blog-detail.html">How To Work with Veshm Agency</a></h4></div>
									</div>
									<div class="veshm-grid-body-middle">
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
									</div>
									<div class="veshm-grid-body-footer">
										<a href="blog-detail.html" class="btn btn-blog-link">Continue Reading</a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="veshm-grid-blog">
								<div class="veshm-grid-blog-thumb">
									<img src="{{ asset('assets/frontend-assets/img/blog-4.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="veshm-grid-blog-body">
									<div class="veshm-grid-body-header">
										<div class="veshm-grid-posted"><span>10 Aug 2023</span></div>
										<div class="veshm-grid-title"><h4><a href="blog-detail.html">Want To Earn Money with Veshm?</a></h4></div>
									</div>
									<div class="veshm-grid-body-middle">
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
									</div>
									<div class="veshm-grid-body-footer">
										<a href="blog-detail.html" class="btn btn-blog-link">Continue Reading</a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="veshm-grid-blog">
								<div class="veshm-grid-blog-thumb">
									<img src="{{ asset('assets/frontend-assets/img/blog-5.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="veshm-grid-blog-body">
									<div class="veshm-grid-body-header">
										<div class="veshm-grid-posted"><span>16 Jul 2023</span></div>
										<div class="veshm-grid-title"><h4><a href="blog-detail.html">Get Credit Card from Veshm Agency</a></h4></div>
									</div>
									<div class="veshm-grid-body-middle">
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
									</div>
									<div class="veshm-grid-body-footer">
										<a href="blog-detail.html" class="btn btn-blog-link">Continue Reading</a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="veshm-grid-blog">
								<div class="veshm-grid-blog-thumb">
									<img src="{{ asset('assets/frontend-assets/img/blog-6.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="veshm-grid-blog-body">
									<div class="veshm-grid-body-header">
										<div class="veshm-grid-posted"><span>07 May 2023</span></div>
										<div class="veshm-grid-title"><h4><a href="blog-detail.html">Want To Work with Veshm Agency?</a></h4></div>
									</div>
									<div class="veshm-grid-body-middle">
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
									</div>
									<div class="veshm-grid-body-footer">
										<a href="blog-detail.html" class="btn btn-blog-link">Continue Reading</a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="veshm-grid-blog">
								<div class="veshm-grid-blog-thumb">
									<img src="{{ asset('assets/frontend-assets/img/blog-7.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="veshm-grid-blog-body">
									<div class="veshm-grid-body-header">
										<div class="veshm-grid-posted"><span>19 Dec 2023</span></div>
										<div class="veshm-grid-title"><h4><a href="blog-detail.html">How To Work with Veshm Agency</a></h4></div>
									</div>
									<div class="veshm-grid-body-middle">
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
									</div>
									<div class="veshm-grid-body-footer">
										<a href="blog-detail.html" class="btn btn-blog-link">Continue Reading</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!-- /row -->

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
			</section>
			<!-- ============================ Blog List End ================================== -->
    
@endsection