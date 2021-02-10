<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Launch Broadband - FAQ</title>
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


			<section class="ls s-py-60 s-py-md-80 s-py-xl-150 ls ms">
				<div class="container">
					<div class="row c-gutter-60">
						<div class="col-sm-12 col-md-4">
							<div class="media box-shadow">
								<div class="icon-styled color-main fs-24">
									<i class="ico icon-conversation" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<h6 class="">
										<a href="#">General Inquiries</a>
									</h6>
									<p class="small">
										If there's an info you didn't find on the website.
									</p>
								</div>
							</div>
							<div class="divider-20"></div>
							<div class="media box-shadow">
								<div class="icon-styled color-main2 fs-24">
									<i class="ico icon-star" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<h6 class="">
										<a href="#">JellyNet Features</a>
									</h6>
									<p class="small">
										Questions related to our most wanted features.
									</p>
								</div>
							</div>
							<div class="divider-20"></div>
							<div class="media box-shadow">
								<div class="icon-styled color-main3 fs-24">
									<i class="ico icon-shield1" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<h6 class="">

										<a href="#">Security & Privacy</a>
									</h6>
									<p class="small">
										We value our customer's privacy and security.
									</p>
								</div>
							</div>
							<div class="divider-20"></div>
							<div class="media box-shadow">
								<div class="icon-styled color-main2 fs-24">
									<i class="ico icon-hand" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<h6 class="">

										<a href="#">Security & Privacy</a>
									</h6>
									<p class="small">
										Learn about plans, payments, and much more.
									</p>
								</div>
							</div>
						</div>
						<div class="divider-30 d-md-none"></div>
						<div class="col-sm-12 col-md-8">
							<div class="box-shadow p-60">
								<h4 class="special-heading fw-300">
									<span>General Inquiries</span>
								</h4>
								<div class="divider-8"></div>
								<p>If there's an info you didn't find on the website.</p>
								<div class="icon-styled color-main fs-60 position-absolute">
									<i class="ico icon-conversation" aria-hidden="true"></i>
								</div>
								<div class="divider-30"></div>
								<div id="accordion01" role="tablist">
									<div class="card">
										<div class="card-header" role="tab" id="collapse01_header">
											<h5>
												<a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
													What is the difference between satellite and fiber internet?
												</a>
											</h5>
										</div>
										<div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor velit non libero bibendum eleifend. Nulla auctor convallis eros ac pulvinar. Sed ullamcorper euismod orci sit amet condimentum. Integer euismod augue tellus, non porttitor elit.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" role="tab" id="collapse02_header">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
													Megabits vs. Megabytes, and why it matters?
												</a>
											</h5>
										</div>
										<div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor velit non libero bibendum eleifend. Nulla auctor convallis eros ac pulvinar. Sed ullamcorper euismod orci sit amet condimentum. Integer euismod augue tellus, non porttitor elit.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" role="tab" id="collapse05_header">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
													How important is my router to my internet speed?
												</a>
											</h5>
										</div>
										<div id="collapse05" class="collapse" role="tabpanel" aria-labelledby="collapse05_header" data-parent="#accordion01">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor velit non libero bibendum eleifend. Nulla auctor convallis eros ac pulvinar. Sed ullamcorper euismod orci sit amet condimentum. Integer euismod augue tellus, non porttitor elit.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" role="tab" id="collapse06_header">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse06" aria-expanded="false" aria-controls="collapse06">
													What is the internet of things?
												</a>
											</h5>
										</div>
										<div id="collapse06" class="collapse" role="tabpanel" aria-labelledby="collapse06_header" data-parent="#accordion01">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor velit non libero bibendum eleifend. Nulla auctor convallis eros ac pulvinar. Sed ullamcorper euismod orci sit amet condimentum. Integer euismod augue tellus, non porttitor elit.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" role="tab" id="collapse07_header">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse07" aria-expanded="false" aria-controls="collapse07">
													How does satelite internet work?
												</a>
											</h5>
										</div>
										<div id="collapse07" class="collapse" role="tabpanel" aria-labelledby="collapse07_header" data-parent="#accordion01">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor velit non libero bibendum eleifend. Nulla auctor convallis eros ac pulvinar. Sed ullamcorper euismod orci sit amet condimentum. Integer euismod augue tellus, non porttitor elit.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" role="tab" id="collapse08_header">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
													Where can I find a list of ISPs in my area?
												</a>
											</h5>
										</div>
										<div id="collapse08" class="collapse" role="tabpanel" aria-labelledby="collapse08_header" data-parent="#accordion01">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor velit non libero bibendum eleifend. Nulla auctor convallis eros ac pulvinar. Sed ullamcorper euismod orci sit amet condimentum. Integer euismod augue tellus, non porttitor elit.
											</div>
										</div>
									</div>
								</div>
								<div class="divider-30 d-md-none"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-pb-60 s-pb-md-80 s-pb-xl-150 s-pt-50 s-pt-md-70 s-pt-xl-141">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h6 class="special-heading text-center">
								<span class="above">In Case You Got More Questions</span>
							</h6>
							<h4 class="special-heading text-center fw-300">
								<span>Let Us Know</span>
							</h4>
							<div class="divider-35"></div>
						</div>
						<div class="col-sm-12">
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
											<label for="email">Email address<span class="required">*</span></label><i class="fa fa-envelope" aria-hidden="true"></i>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Your E-mail">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="phone">Phone<span class="required">*</span></label><i class="fa fa-phone" aria-hidden="true"></i>
											<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="subject">Subject<span class="required">*</span></label><i class="fa fa-chevron-down" aria-hidden="true"></i>
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
										<div class="form-group text-center has-placeholder mt-25">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Submit Now
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<section id="icon-bg-gradient" class="ds">
				<div class="container">
					<div class="row">
						<div class="divider-50 divider-md-70 divider-xl-140"></div>
						<div class="col-sm-12">
							<h6 class="special-heading text-center">
								<span class="above">have you any questions</span>
							</h6>
							<h4 class="special-heading text-center">
								<span>Will you want know more?</span>
							</h4>
						</div>
						<div class="divider-40"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-darkgrey icon-bordered">
									<i class="ico icon-headphones fs-36"></i>
								</div>
								<h5><a href="#">Talk to an Agent</a></h5>
								<p>
									Get a Call
								</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-darkgrey icon-bordered">
									<i class="ico icon-chat fs-36"></i>
								</div>
								<h5><a href="#">Chat with an Agent</a></h5>
								<p>
									Chat Now
								</p>
							</div>
						</div>
						<div class="divider-40 d-md-none"></div>
						<div class="col-md-4">
							<div class="icon-box text-center bordered p-30">
								<div class="icon-styled color-main3 icon-bordered">
									<i class="ico icon-map fs-36" aria-hidden="true"></i>
								</div>
								<h5><a href="#">Visit Jellynet Store</a></h5>
								<p>
									Find a Service Center
								</p>
							</div>
						</div>
						<div class="divider-60 divider-md-80 divider-xl-150"></div>
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