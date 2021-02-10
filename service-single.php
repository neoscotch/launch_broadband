<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Launch Broadband - MDU/Commercial Networking</title>
<?php include 'meta.php'; ?>

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>


	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="register_modal">
		<div class="container">
			<div class="row c-gutter-0 modal_register_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="/">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign Up</span> / Sign In</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signupname">Full Name <span class="required">*</span></label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="signupname" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group has-placeholder">
									<label for="signuppassword">Password<span class="required">*</span></label>
									<input type="password" aria-required="true" size="30" value="" name="password" id="signuppassword" class="form-control" placeholder="Password">
								</div>
								<div class="form-group has-placeholder">
									<label for="signupemail">Email<span class="required">*</span></label>
									<input type="email" aria-required="true" size="30" value="" name="email" id="signupemail" class="form-control" placeholder="Email">
								</div>
								<div>
									<input type="checkbox" class="checkbox" id="signupcheckbox" />
									<label for="signupcheckbox">I agree with all the text in the agreement</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" id="contact_signupform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
								</div>
							</div>
							<a class="phone_modal_button register_modal close-modal" data-dismiss="modal" aria-label="Close" href="#sign_in_modal"><span aria-hidden="true">I am already Member</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right">
					<img src="images/sing-in-modal.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="login_modal">
		<div class="container">
			<div class="row c-gutter-0 modal_login_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="/">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign In</span> / Sign Up</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signname">Full Name <span class="required">*</span></label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="signname" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group has-placeholder">
									<label for="signpassword">Password<span class="required">*</span></label>
									<input type="password" aria-required="true" size="30" value="" name="password" id="signpassword" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" id="contact_signinform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
								</div>
							</div>
							<a class="register_modal close-modal" data-dismiss="modal" aria-label="Close" href="#register_modal"><span aria-hidden="true">Forgot Password?</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right">
					<img src="images/sing-in-modal.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
		<?php include 'nav.php'; ?>

			<!--eof topline-->




			<section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
				<div class="container">
					<div class="row c-gutter-30">
						<div class="col-12 col-xl-1"></div>
						<div class="col-12 col-md-6 col-xl-5">
							<h6 class="special-heading">
								<span class="above">Effortlessly Fast Internet</span>
							</h6>
							<h4 class="special-heading fw-300">
								<span>Exclusive Download Speed</span>
							</h4>
							<div class="divider-30"></div>
							<p>Instead of offering a confusing range of download speeds, Spectrum keeps things fast and simple. With the well-priced 100 Mbps Spectrum Internet, you can stream HD movies, play online games, and have multiple devices on the same internet connection without lag.</p>
							<ul class="list-styled-circle">
								<li>Lorem ipsum dolor sit amet consectetur. </li>
								<li>Adipisicing elit, sed do eiusmod tempor incid.</li>
								<li>Idunt ut labore et dolore magna aliqua. </li>
							</ul>
						</div>
						<div class="divider-30 d-md-none"></div>
						<div class="col-12 col-md-6 col-xl-5">
							<div class="overlay-image right">
								<div class="image-back img-overlay">
									<img src="images/blog/img-overlay.jpg" alt="">
								</div>
								<div class="image-front img-overlay">
									<img alt="" src="images/internet-img1.jpg">
								</div>
							</div>
						</div>
						<div class="divider-30"></div>
					</div>
					<div class="row c-gutter-30">
						<div class="col-12 col-xl-1"></div>
						<div class="col-12 col-md-6 col-xl-5 ">
							<div class="overlay-image left">
								<div class="image-back img-overlay">
									<img src="images/blog/img-overlay.jpg" alt="">
								</div>
								<div class="image-front img-overlay">
									<img alt="" src="images/internet-img2.jpg">
								</div>
							</div>
						</div>
						<div class="divider-30 d-md-none"></div>
						<div class="col-12 col-md-6 col-xl-5 text-right">
							<h6 class="special-heading">
								<span class="above">Live Contract Free</span>
							</h6>
							<h4 class="special-heading fw-300">
								<span>Don't Pay More For Internet</span>
							</h4>
							<div class="divider-30"></div>
							<p>There are so many modems on the market, and some of them won't work with Spectrum Internet. However, you don't need to worry about finding the right modem Spectrum has one ready for you. Plus, your modem rental fee is included in the listed price, so you won't have to pay any extra fees for it.</p>
							<div class="divider-30"></div>
							<a class="btn btn-maincolor" href="/contact">Request A Quote</a>
						</div>
					</div>
				</div>
			</section>

			<section id="contact-dark" class="s-pt-50 s-pt-md-70 s-pb-60 s-pb-md-80 ds">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h6 class="special-heading">
								<span class="above">Get In Touch To</span>
							</h6>
							<h4 class="special-heading fw-300">
								<span>Order Connection Now</span>
							</h4>
							<div class="divider-30"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas<br> tristique augue sit amet ullamcorper auctor.</p>
						</div>
						<div class="divider-30 divider-sm-50 "></div>

						<div class="col-md-2">
						</div>
						<div class="col-md-8 text-center">
							<form class="contact-form c-mb-20 c-gutter-20" method="#" action="#">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="name">Full Name <span class="required">*</span></label><i class="fa fa-user" aria-hidden="true"></i>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Your Name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="email">Email address<span class="required">*</span></label><i class="fa fa-envelope" aria-hidden="true"></i>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Your E-mail">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-placeholder mt-10">
											<button type="submi" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Request A Quote</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				</div>
			</section>

			<?php include 'footer.php'; ?>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>