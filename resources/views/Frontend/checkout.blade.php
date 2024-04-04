@extends('frontend.website')
@section('content')

    <!-- ============================ Page Title Start================================== -->
			<div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Checkout</h2>
							<span class="ipn-subtitle">Complete your checkout and proceed</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Our Story Start ================================== -->
			<section>
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="alert alert-success text-center" role="alert">
								Hi Dear, Have you already an account? <a href="#" data-bs-toggle="collapse" data-bs-target="#login-frm">Please Login</a>
							</div>
						</div>
						
						<div class="col-lg-12 col-md-12">	
							<div id="login-frm" class="collapse mb-5">
								<div class="row">
									
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control border" placeholder="Username">
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control border" placeholder="*******">
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary full-width">Submit</button>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row Start -->
					<div class="row form-submit">
						<div class="col-lg-8 col-md-12 col-sm-12">
						
							<!-- row -->
							<div class="row m-0">
								<div class="submit-page">
									<div class="row">
									
										<div class="col-lg-12 col-md-12 col-sm-12">
											<h3>Billing Detail</h3>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Name<i class="req">*</i></label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Email<i class="req">*</i></label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Company Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Country<i class="req">*</i></label>
												<select id="country" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">United State</option>
													<option value="2">United kingdom</option>
													<option value="3">India</option>
													<option value="4">Canada</option>
												</select>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Street<i class="req">*</i></label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Apartment</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Town/City<i class="req">*</i></label>
												<select id="town" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Punjab</option>
													<option value="2">Chandigarh</option>
													<option value="3">Allahabad</option>
													<option value="4">Lucknow</option>
												</select>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>State<i class="req">*</i></label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Postcode/Zip<i class="req">*</i></label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Phone<i class="req">*</i></label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Landline</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Additional Information</label>
												<textarea class="form-control ht-50"></textarea>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input id="al-2" class="form-check-input" name="al-2" type="checkbox">
												<label for="al-2" class="form-check-label">Create An Account</label>
											</div>
										</div>
								
									</div>
								</div>
							</div>
							<!--/row -->
							
							<div class="panel-group pay_opy980" id="payaccordion">
									
								<!-- Pay By Paypal -->
								<div class="panel panel-default">
									<div class="panel-heading" id="pay">
										<h4 class="panel-title">
											<a data-bs-toggle="collapse" role="button" data-bs-parent="#payaccordion" href="#payPal"  aria-controls="payPal" class="">PayPal<img src="{{ asset('assets/frontend-assets/img/paypal.html')}}" class="img-fluid" alt=""></a>
										</h4>
									</div>
									<div id="payPal" class="panel-collapse collapse show" aria-labelledby="pay" data-bs-parent="#payaccordion">
										<div class="panel-body">
											<form>
												<div class="form-group">
													<label>PayPal Email</label>
													<input type="text" class="form-control simple" placeholder="paypal@gmail.com">
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary full-width">Pay 400.00 USD</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								
								<!-- Pay By Strip -->
								<div class="panel panel-default">
									<div class="panel-heading" id="stripes">
										<h4 class="panel-title">
											<a data-bs-toggle="collapse" role="button" data-bs-parent="#payaccordion" href="#stripePay"  aria-controls="stripePay" class="">Stripe<img src="{{ asset('assets/frontend-assets/img/strip.html')}}" class="img-fluid" alt=""></a>
										</h4>
									</div>
									<div id="stripePay" class="collapse" aria-labelledby="stripes" data-bs-parent="#payaccordion">
										<div class="panel-body">
											<form>
										
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label>Card Holder Name</label>
															<input type="text" class="form-control">
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label>Card Number</label>
															<input type="text" class="form-control">
														</div>
													</div>									
												
													<div class="col-lg-5 col-md-5 col-sm-6">
														<div class="form-group">
															<label>Expire Month</label>
															<input type="text" class="form-control">
														</div>
													</div>
													
													<div class="col-lg-5 col-md-5 col-sm-6">
														<div class="form-group">
															<label>Expire Year</label>
															<input type="text" class="form-control">
														</div>
													</div>
													
													<div class="col-lg-2 col-md-2 col-sm-12">
														<div class="form-group">
															<label>CVC</label>
															<input type="text" class="form-control">
														</div>
													</div>										
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<input id="am-2" class="form-check-input" name="am-2" type="checkbox">
															<label for="am-2" class="form-check-label">By Continuing, you ar'e agree to conditions</label>
														</div>
													</div>
													
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group text-center">
															<a href="#" class="btn btn-primary full-width">Pay 202.00 USD</a>
														</div>
													</div>
													
												</div>
											
											</form>
										</div>
									</div>
								</div>
								
								<!-- Pay By Debit or credtit -->
								<div class="panel panel-default">
									<div class="panel-heading" id="dabit">
										<h4 class="panel-title">
											<a data-bs-toggle="collapse" role="button" href="#payaccordion" data-bs-target="#debitPay"  aria-controls="debitPay" class="">Debit Or Credit<img src="{{ asset('assets/frontend-assets/img/debit.html')}}" class="img-fluid" alt=""></a>
										</h4>
									</div>
									<div id="debitPay" class="panel-collapse collapse" aria-labelledby="dabit" data-bs-parent="#payaccordion">
									<div class="panel-body">
										<form>
										
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label>Card Holder Name</label>
															<input type="text" class="form-control">
														</div>
													</div>
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label>Card Number</label>
															<input type="text" class="form-control">
														</div>
													</div>									
												
													<div class="col-lg-5 col-md-5 col-sm-6">
														<div class="form-group">
															<label>Expire Month</label>
															<input type="text" class="form-control">
														</div>
													</div>
													
													<div class="col-lg-5 col-md-5 col-sm-6">
														<div class="form-group">
															<label>Expire Year</label>
															<input type="text" class="form-control">
														</div>
													</div>
													
													<div class="col-lg-2 col-md-2 col-sm-12">
														<div class="form-group">
															<label>CVC</label>
															<input type="text" class="form-control">
														</div>
													</div>										
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<input id="aj-2" class="form-check-input" name="aj-2" type="checkbox">
															<label for="aj-2" class="form-check-label">By Continuing, you ar'e agree to conditions</label>
														</div>
													</div>
													
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group text-center">
															<a href="#" class="btn btn-primary full-width">Pay 202.00 USD</a>
														</div>
													</div>
													
												</div>
											
											</form>
									</div>
								  </div>
								</div>
								
							</div>
						
						</div>
						
						<!-- Col-lg 4 -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							<div class="check-ourio-wrap">
								<div class="check-ourio-head"><h5>Order Summary</h5></div>
								<div class="check-ourio-caption">
									<div class="check-ourio-single">
										<div class="check-ourio-first">
											<img src="{{ asset('assets/frontend-assets/img/prt-1')}}.png" class="img-fluid rounded" alt="">
										</div>
										<div class="check-ourio-last">
											<h5>302/40 Jannat Enclave</h5>
											<div class="rlhc-prt-location"><img src="{{ asset('assets/frontend-assets/img/pin.svg')}}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
											<div class="prt-jhio-price"><h4>₹87,000</h4></div>
										</div>
									</div>
									<div class="check-ourio-single">
										<div class="check-ourio-first">
											<img src="{{ asset('assets/frontend-assets/img/prt-2')}}.png" class="img-fluid rounded" alt="">
										</div>
										<div class="check-ourio-last">
											<h5>302/40 Jannat Enclave</h5>
											<div class="rlhc-prt-location"><img src="{{ asset('assets/frontend-assets/img/pin.svg')}}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
											<div class="prt-jhio-price"><h4>₹95,000</h4></div>
										</div>
									</div>
									
									<div class="booking-info-try rounded bg-light-success border border-success mb-4">
										<ul>
											<li><h6>#125469</h6><span>₹87,000</span></li>
											<li><h6>#125492</h6><span>₹95,000</span></li>
											<li><h6>GST</h6><span>₹12,417</span></li>
											<li><h6>Tax</h6><span>₹72,000</span></li>
											<li><h6 class="total-title">Total</h6><span class="total-price">₹₹2,14570</span></li>
										</ul>
									</div>
									<button class="btn btn-theme font--medium full-width">Confirm Payment</button>
								</div>
								
							</div>
							
						</div>
						<!-- /col-lg-4 -->
						
					</div>
					<!-- /row -->					
					
				</div>
						
			</section>
			<!-- ============================ Our Story End ================================== -->
    
@endsection