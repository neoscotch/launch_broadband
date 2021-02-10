<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
	<title>Launch Broadband - MDU/Commercial Networking</title><?php include 'meta.php'; ?>
</head>
<body>
	<!--[if lt IE 9]>
                <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
        <![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div><!-- search modal -->
	<div aria-labelledby="search_modal" class="modal" id="search_modal" role="dialog" tabindex="-1">
		<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
		<div class="widget widget_search">
			<form action="/" class="searchform search-form" method="get">
				<div class="form-group">
					<input class="form-control" id="modal-search-input" name="search" placeholder="Search keyword" type="text" value="">
				</div><button class="btn" type="submit">Search</button>
			</form>
		</div>
	</div>
	<div aria-labelledby="search_modal" class="modal" id="register_modal" role="dialog" tabindex="-1">
		<div class="container">
			<div class="row c-gutter-0 modal_register_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form action="/" class="contact-form sign-in c-mb-10 c-gutter-10" method="post">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign Up</span> / Sign In</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signupname">Full Name <span class="required">*</span></label> <input aria-required="true" class="form-control" id="signupname" name="name" placeholder="Full Name" size="30" type="text" value="">
								</div>
								<div class="form-group has-placeholder">
									<label for="signuppassword">Password<span class="required">*</span></label> <input aria-required="true" class="form-control" id="signuppassword" name="password" placeholder="Password" size="30" type="password" value="">
								</div>
								<div class="form-group has-placeholder">
									<label for="signupemail">Email<span class="required">*</span></label> <input aria-required="true" class="form-control" id="signupemail" name="email" placeholder="Email" size="30" type="email" value="">
								</div>
								<div>
									<input class="checkbox" id="signupcheckbox" type="checkbox"> <label for="signupcheckbox">I agree with all the text in the agreement</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btn-outline-darkgrey" id="contact_signupform_submit" name="contact_submit" type="submit">Email Us</button>
								</div>
							</div><a aria-label="Close" class="phone_modal_button register_modal close-modal" data-dismiss="modal" href="#sign_in_modal"><span aria-hidden="true">I am already Member</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right"><img alt="" src="images/sing-in-modal.jpg"></div>
			</div>
		</div>
	</div>
	<div aria-labelledby="search_modal" class="modal" id="login_modal" role="dialog" tabindex="-1">
		<div class="container">
			<div class="row c-gutter-0 modal_login_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form action="/" class="contact-form sign-in c-mb-10 c-gutter-10" method="post">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign In</span> / Sign Up</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signname">Full Name <span class="required">*</span></label> <input aria-required="true" class="form-control" id="signname" name="name" placeholder="Full Name" size="30" type="text" value="">
								</div>
								<div class="form-group has-placeholder">
									<label for="signpassword">Password<span class="required">*</span></label> <input aria-required="true" class="form-control" id="signpassword" name="password" placeholder="Password" size="30" type="password" value="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btn-outline-darkgrey" id="contact_signinform_submit" name="contact_submit" type="submit">Email Us</button>
								</div>
							</div><a aria-label="Close" class="register_modal close-modal" data-dismiss="modal" href="#register_modal"><span aria-hidden="true">Forgot Password?</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right"><img alt="" src="images/sing-in-modal.jpg"></div>
			</div>
		</div>
	</div><!-- Unyson messages modal -->
	<div class="modal fade" id="messages_modal" role="dialog" tabindex="-1">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
                <ul class="list-unstyled">
                        <li>Message To User</li>
                </ul>
                -->
		</div>
	</div><!-- eof .modal -->
	<!--noindex--><svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg">
	<defs>
		<symbol id="icon-1" viewbox="0 0 226 32">
			<title>1</title>
			<path d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z"></path>
		</symbol>
		<symbol id="icon-2" viewbox="0 0 248 32">
			<title>2</title>
			<path d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z"></path>
		</symbol>
		<symbol id="icon-aim" viewbox="0 0 32 32">
			<title>aim</title>
			<path d="M29.776 13.776h-1.393c-0.265-6.424-5.442-11.601-11.866-11.866v-1.393c0-0.286-0.232-0.517-0.517-0.517s-0.517 0.232-0.517 0.517v1.393c-6.424 0.265-11.601 5.442-11.866 11.866h-1.393c-0.286 0-0.517 0.232-0.517 0.517s0.232 0.517 0.517 0.517h1.393c0.265 6.424 5.442 11.601 11.866 11.866v4.806c0 0.286 0.232 0.517 0.517 0.517s0.517-0.232 0.517-0.517v-4.806c6.424-0.265 11.601-5.442 11.866-11.866h1.393c0.286 0 0.517-0.232 0.517-0.517s-0.232-0.517-0.517-0.517zM15.483 25.641c-5.853-0.264-10.567-4.977-10.831-10.831h4.53c0.252 3.359 2.942 6.049 6.301 6.301v4.53zM15.483 20.072c-2.788-0.247-5.014-2.474-5.262-5.262h2.979c0.213 1.156 1.126 2.070 2.283 2.283v2.979zM15.483 16.031c-0.585-0.174-1.046-0.636-1.221-1.221h1.221v1.221zM14.262 13.776c0.174-0.585 0.636-1.046 1.221-1.221v1.221h-1.221zM13.2 13.776h-2.979c0.248-2.788 2.474-5.014 5.262-5.262v2.979h0c-1.156 0.213-2.069 1.126-2.283 2.283zM15.483 7.475c-3.359 0.252-6.049 2.942-6.301 6.301h-4.53c0.264-5.853 4.977-10.567 10.831-10.831v4.53zM16.517 8.514c2.788 0.248 5.014 2.474 5.262 5.262l-2.979 0c-0.213-1.156-1.126-2.070-2.283-2.283v-2.979zM16.517 12.555c0.585 0.174 1.046 0.636 1.221 1.221h-1.221v-1.221zM16.517 14.81h1.221c-0.174 0.585-0.636 1.046-1.221 1.221v-1.221zM18.8 14.81h2.979c-0.247 2.788-2.474 5.014-5.262 5.262v-2.979h-0c1.156-0.213 2.070-1.126 2.283-2.283zM16.517 25.641v-4.53c3.359-0.252 6.049-2.942 6.301-6.301h4.53c-0.264 5.853-4.977 10.567-10.831 10.831zM22.818 13.776c-0.252-3.359-2.942-6.049-6.301-6.301v-4.53c5.853 0.264 10.567 4.977 10.831 10.831h-4.53z"></path>
		</symbol>
	</defs></svg> <!--/noindex-->
	 <!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<!--topline section visible only on small screens|-->
			<section class="page_topline s-border ls s-borderbottom s-overlay">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-12 col-xl-3 text-center text-xl-left">
							<ul>
								<li>
									<p></p>
								</li>
							</ul>
						</div>
						<div class="col-lg-12 col-xl-9 text-center text-xl-right">
							<ul class="top-line-includes-first top-includes">
								<li>
									<p class="address_top"><i class="ico icon-placeholder"></i> 1035 Putman Dr NW, Suite B, Huntsville, AL 35816</p>
								</li>
								<li>
									<p class="email_top"><a href="mailto:sales@launchbroadband.com"><i class="fa fa-envelope"></i> sales@launchbroadband.com</a></p>
								</li>
								<li>
									<p class="phone_number"><i class="ico icon-icon"></i><a href="tel:8882244071">888-224-4071</a></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section><!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
			<?php include 'nav.php'; ?>
			<section class="page_slider static_layer">
				<div class="flexslider">
					<ul class="slides">
						<li class="ds cover-image flex-slide">
							<img alt="" src="images/slider/slide01.jpg">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h6 class="special-heading"><span class="above">Launch broadband</span></h6>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<h4 class="special-heading"><span>MDU/Commercial Networking</span></h4>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<p>Launch Broadband specializes in building fiber-optic gigabit capable networks that provide the highest speeds available Apartment Complexes and Commercial Developments.</p>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="price-wrap">
														<span class="plan-decimals">Call Now 888-224-4071</span>
													</div>
												</div>
												<div class="intro_layer" data-animation="fadeInRight">
													<a class="btn btn-maincolor" href="mailto:sales@launchbroadband.com">Request A Quote</a>
												</div>
											</div><!-- eof .intro_layers -->
										</div><!-- eof .intro_layers_wrapper -->
									</div><!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
					</ul>
				</div><!-- eof flexslider -->
			</section>
			<section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="col-md-12 text-center">
							<h6 class="special-heading"><span class="above">launch broadband internet</span></h6>
							<h4 class="special-heading"><span>Network Solutions from launch broadband</span></h4>
							<div class="divider-30 divider-sm-50"></div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="icon-box text-center home-style">
								<div class="icon-styled color-main">
									<i class="ico icon-conversation"></i>
								</div>
								<h5><a href="#">Design</a></h5>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="icon-box text-center home-style">
								<div class="icon-styled color-main">
									<i class="ico icon-wifi"></i>
								</div>
								<h5><a href="#">Build</a></h5>
							</div>
						</div>
						<div class="divider-40 d-lg-none"></div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="icon-box text-center home-style">
								<div class="icon-styled color-main">
									<i class="ico icon-worldwide"></i>
								</div>
								<h5><a href="#">Operate</a></h5>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="icon-box text-center home-style">
								<div class="icon-styled color-main">
									<i class="ico icon-headphones"></i>
								</div>
								<h5><a href="#">Support</a></h5>
							</div>
						</div>
						<div class="col-md-12 text-center">
							<div class="divider-30 divider-sm-60"></div><a class="btn btn-outline-secondary" href="tel:888-224-4071">Request a Quote</a>
						</div>
						<div class="col-md-12 text-center">
							<div class="divider-30 divider-sm-50"></div>
							<p class="text-dark">For more information call us at <a href="tel:888-224-4071">888-224-4071</a> and chat with Launch Broadband representative.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="s-pt-100 s-pt-md-70 s-pt-xl-230 s-pb-60 s-pb-md-80 s-pb-xl-150 ls" id="internet-service">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="divider-30 divider-sm-50 divider-md-190"></div>
						<div class="col-xl-8 offset-xl-2 text-center">
							<h6 class="special-heading"><span class="above">Launch internet services</span></h6>
							<h4 class="special-heading"><span>Why Launch Broadband is Right for You?</span></h4>
							<div class="divider-30"></div>
							<p></p>
							<div class="divider-40"></div><a class="btn btn-maincolor" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</section>
			<section class="s-pt-50 s-pt-md-70 s-pt-xl-80 s-pb-60 s-pb-md-80 s-pb-xl-90">
				<div class="container">
					<div class="row c-gutter-30 vertical-center">
						<div class="col-12 col-md-6"><img alt="" src="images/about-img.png"></div>
						<div class="divider-30 d-md-none"></div>
						<div class="col-12 col-md-6">
							<h6 class="special-heading"><span class="above">Launch Broadband benefits</span></h6>
							<h4 class="special-heading"><span>Unique revenue generation model for apartment complexes with no upfront costs</span></h4>
							<div class="divider-30"></div>
							<p>Launch Broadband specializes in building fiber-optic gigabit capable networks that provide the highest speeds available Apartment Complexes and Commercial Developments.</p>
							<div class="divider-25"></div>
							<ul class="list-styled-circle">
								<li>Gigabit network design and installation</li>
								<li>Fiber-optic network installation, splicing and testing</li>
								<li>CAT6, Cat5e, and Rg6 installation</li>
								<li>Reliable managed networks</li>
								<li>Secure Networks for residential and businesses</li>
							</ul>
							<div class="divider-40"></div><a class="btn btn-maincolor" href="tel:888-224-4071">"&gt;Request A Quote</a>
						</div>
					</div>
				</div>
			</section>
			<section class="ds" id="icon-bg-gradient">
				<div class="container">
					<div class="row">
						<div class="divider-50 divider-md-70 divider-xl-140"></div>
						<div class="col-sm-12">
							<h6 class="special-heading text-center"><span class="above">need help now?</span></h6>
							<h4 class="special-heading text-center"><span>Superior Customer Service</span></h4>
						</div>
						<div class="divider-40"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-darkgrey icon-bordered">
									<i class="ico icon-headphones fs-36"></i>
								</div>
								<h5><a href="tel:888-224-4071">Talk to an Agent</a></h5>
								<p>Get a Call</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-darkgrey icon-bordered">
									<i class="ico icon-chat fs-36"></i>
								</div>
								<h5><a href="tel:888-224-4071">Chat with an Agent</a></h5>
								<p>Chat Now</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-main3 icon-bordered">
									<i aria-hidden="true" class="ico icon-map fs-36"></i>
								</div>
								<h5><a href="tel:888-224-4071">Visit US</a></h5>
								<p>Find a Service Center</p>
							</div>
						</div>
						<div class="divider-60 divider-md-80 divider-xl-150"></div>
					</div>
				</div>
			</section><?php include 'footer.php'; ?>
		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->
	<script src="js/compressed.js">
	</script> 
	<script src="js/main.js">
	</script>
</body>
</html>