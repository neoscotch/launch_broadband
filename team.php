<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Launch Broadband - Our Team</title>
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
			<section class="ls s-pb-20 s-pb-md-70  s-pt-md-70 c-gutter-150 c-mb-50 team">
				<div class="container">
					<div class="row">

						<div class="divider-20 divider-xl-80"></div>

						<div class="col-lg-4 col-md-6 col-sm-12">

							<div class="text-center">
								<div class="content-padding text-center team-item">
									<div class="item-media">
										<img src="images/team/01.jpg" alt="">
										<div class="media-links">
											<a class="abs-link" title="" href="#"></a>
										</div>
									</div>
									<div class="item-content">
										<h5>
											<a href="#">DJ Klein</a>
										</h5>
										<p class="profession">President</p>
										<p class="social-icons">
											<a href="#" class="fa fa-facebook" title="facebook"></a>
											<a href="#" class="fa fa-twitter" title="twitter"></a>
											<a href="#" class="fa fa-linkedin" title="linkedin"></a>
											<a href="#" class="fa fa-google" title="google"></a>
										</p>
										<p class="">
										“It is our mission to develop long term business relationships built on trust, reliability, and customer service”. – DJ Klein, President
										</p>

									</div>
								</div>
							</div>
						</div><!-- .col-* -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="content-padding text-center team-item">
								<div class="item-media">
									<img src="images/team/02.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="#"></a>
									</div>
								</div>
								<div class="item-content">
									<h5>
										<a href="#">Matt Rocheleau</a>
									</h5>
									<p class="profession">Sales and Marketing Specialist</p>
									<p class="social-icons">

										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-linkedin" title="linkedin"></a>
										<a href="#" class="fa fa-google" title="google"></a>

									</p>
									<p class="">
									Matt’s top priority is growing the business and making sure all clients are satisfied with the Launch Broadband team. Matt Lives in Huntsville with his wife Dana and daughter Brentley.
									</p>
								</div>
							</div>
						</div><!-- .col-* -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="content-padding text-center team-item">
								<div class="item-media">
									<img src="images/team/03.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="#"></a>
									</div>
								</div>
								<div class="item-content">
									<h5>
										<a href="#">Daniel Champion</a>
									</h5>
									<p class="profession">VP of Operations</p>
									<p class="social-icons">

										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-linkedin" title="linkedin"></a>
										<a href="#" class="fa fa-google" title="google"></a>

									</p>
									<p class="">
									Danieal is an experienced and educated leader who helps make important decisions, which ensure that the company's operational procedures are sustainable and profitable.
									</p>
								</div>
							</div>
						</div>
						<div class="divider-0 divider-xl-30"></div>

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
