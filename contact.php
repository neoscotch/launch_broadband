<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
<title>Launch Broadband - Contact Us</title>
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

			<!-- template sections -->


			<!--eof topline-->

			<!-- header with logo in center of navigation (centered with scripts) - three Bootstrap columns - left includes, navigation and right includes-->
			<?php include 'nav.php'; ?>

		


			<section class="ls s-pt-60 s-pt-md-80 s-pt-xl-150 s-pb-60 s-pb-md-100">
				<div class="container">

					<div class="row justify-content-center text-center">
						<div class="col-sm-12 col-md-4 animate" data-animation="pullDown">
							<div class="icon-box text-center">
								<div class="icon-styled color-main">
									<i class="fa fa-mobile fs-40" aria-hidden="true"></i>
								</div>
								<h6>Phone</h6>
								<p>
									1-888-224-4071<br>
									1-949-422-1149(sales)
								</p>
							</div>
						</div>
						<div class="divider-30  d-block d-md-none"></div>
						<div class="col-sm-12 col-md-4 animate" data-animation="pullDown">
							<div class="icon-box text-center">
								<div class="icon-styled color-main">
									<i class="fa fa-map-marker fs-40" aria-hidden="true"></i>
								</div>
								<h6>Location</h6>
								<p>
								1035 Putman Dr NW B<br>
								Huntsville, AL 35816
								</p>
							</div>
						</div>
						<div class="divider-30 d-block d-md-none"></div>
						<div class="col-sm-12 col-md-4 animate" data-animation="pullDown">
							<div class="icon-box text-center">
								<div class="icon-styled color-main">
									<i class="fa fa-envelope fs-40" aria-hidden="true"></i>
								</div>
								<h6>Email</h6>
								<p>
									<a href="mailto:djkeiln@launchbb.com">djkeiln@launchbb.com</a><br>
									<a href="mailto:sales@launchbb.com">sales@launchbb.com</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php include 'footer.php'; ?>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?callback=templateInitGoogleMap&key=AIzaSyAGo82b62BzC4-B96WJN1yDw9radRsfnU8"></script>

</body>

</html>