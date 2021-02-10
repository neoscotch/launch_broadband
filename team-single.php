<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Launch Broadband - <?php echo $_GET['id']; ?></title>
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


			<section class="ls s-pt-50 s-pb-55 single-team">
				<div class="container ">
					<div class="row ">


						<div class="divider-30 divider-xl-95"></div>

						<div class="col-12 main-block">
							<div class="row c-gutter-50 vertical-center">


								<div class="col-md-5 media-item">
									<div>
										<img src="images/team/team-single-img.jpg" alt="">
										<p class="social-icons">
											<a href="#" class="fa fa-facebook" title="facebook"></a>
											<a href="#" class="fa fa-twitter" title="twitter"></a>
											<a href="#" class="fa fa-google" title="google"></a>
										</p>
									</div>
								</div>

								<div class="col-md-7 content">
									<div class="divider-30 divider-md-0 divider-xl-0"></div>
									<h3 class="team-name">DJ Klein</h3>
									<p class="entry-description-profession divider-top-bottom">President</p>

									<div class="phone"><strong>Phone:</strong><span>888-224-4071</span></div>
									<div class="mail"><strong>E-mail:</strong><span>djkeiln@launchbb.com</span></div>
									<div class="location"><strong>Location:</strong><span>Madison 35758, Alabama</span></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="s-pt-0 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
				<div class="container">
					<div class="row c-gutter-50 mobile-padding-normal">
						<div class="col-sm-12">
							<h5>
								Working Experience
							</h5>
							<p>Proin pellentesque, odio maximus semper consectetur, dolor nibh convallis orci, sed ornare nulla ipsum id sem. Sed aliquet condimentum purus, nec iaculis ipsum auctor quis. Nulla facilisi. Nullam risus tellus, bibendum id posuere sit amet, commodo consectetur turpis. Sed sollicitudin sapien odio, vel tempor nulla consequat quis. Nunc eget metus eget massa bibendum tristique a in metus. Vestibulum sit amet est vel leo pellen.</p>
							<h5>
								Professional Skills
							</h5>
							<p>Cras in faucibus magna, vitae porttitor erat. Aenean et tincidunt odio. Nullam at ante ut lectus suscipit porttitor sed in arcu. Etiam nec eros nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>

						</div>
						<div class="col-12 col-md-6">
							<div class="divider-30"></div>
							<p class="progress-bar-title">Internet Technologies</p>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								</div>
								<span>25%</span>
							</div>
							<p class="progress-bar-title">IPTV SET-Up</p>
							<div class="progress">
								<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
								</div>
								<span>50%</span>
							</div>
							<p class="progress-bar-title">Email Design + Integration</p>
							<div class="progress">
								<div class="progress-bar bg-warning" role="progressbar" data-transitiongoal="75" aria-valuemin="0" aria-valuemax="100">
								</div>
								<span>75%</span>
							</div>
							<p class="progress-bar-title">UI / UX Expertise</p>
							<div class="progress">
								<div class="progress-bar bg-danger" role="progressbar" data-transitiongoal="86" aria-valuemin="0" aria-valuemax="100">
								</div>
								<span>86%</span>
							</div>
							<div class="divider-30"></div>
						</div>
						<div class="col-12 col-md-6">
							<div class="divider-30"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tristique augue sit amet ullamcorper auctor. Praesent tincidunt accu msan felis et dictum. Sed eu nulla non urna fermentum elementum. Mauris vitae semper odio, eget iaculis arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis ege stas. Proin in mauris iaculis, euismod est eu, scelerisque nibh. Proin pellentesque, odio maximus semper consectetur, dolor nibh convallis orci, sed ornare nulla ipsum id sem. </p>
							<div class="divider-30"></div>
						</div>
						<div class="divider-30 d-md-none"></div>
						<div class="col-sm-12">
							<p>Cras in faucibus magna, vitae porttitor erat. Aenean et tincidunt odio. Nullam at ante ut lectus suscipit porttitor sed in arcu. Etiam nec eros nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent accumsan lorem id velit vehicula, sit amet sodales leo aliquam. Suspendisse vel eros varius, fermentum lorem ac, vestibulum velit. Vivamus malesuada mauris a leo bibendum, consectetur.</p>
							<h5>
								Contact Me
							</h5>
							<form class="contact-form c-mb-20 c-gutter-20" method="post" action="/">

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="name">Full Name <span class="required">*</span></label><i class="fa fa-user" aria-hidden="true"></i>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Your Name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="phone">Phone<span class="required">*</span></label><i class="fa fa-phone" aria-hidden="true"></i>
											<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="email">Email address<span class="required">*</span></label><i class="fa fa-envelope" aria-hidden="true"></i>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Your E-mail">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="subject">Subject<span class="required">*</span></label><i class="fa fa-paperclip" aria-hidden="true"></i>
											<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Your Topic">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-placeholder">
											<label for="message">Message</label><i class="fa fa-pencil" aria-hidden="true"></i>
											<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-placeholder mt-25">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Submit
											</button>
										</div>
									</div>
								</div>

							</form>

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