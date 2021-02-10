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


			<section class="ls s-pt-60 s-pt-md-80 s-pt-xl-150 s-pt-0 s-pt-md-0 s-pt-xl-0 c-gutter-60 single-post">
				<div class="container">
					<div class="row">
						<main class="offset-lg-1 col-lg-10 col-md-12">
							<article class="vertical-item post type-post status-publish format-standard has-post-thumbnail">

								<div class="item-content">


									<!-- .post-thumbnail -->
									<div class="item-media post-thumbnail alignwide">
										<img src="images/blog/single-post.jpg" alt="">
									</div>

									<!-- .entry-header -->
									<header class="entry-header single-post">

										<h1 class="entry-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tristique augue sit amet ullamcorper auctor. Praesent tincidunt accumsan felis et dictum. Sed eu nulla non urna fermentum elementum.</h1>

										<!-- .entry-meta -->
									</header>

									<div class="entry-content">


										<p>
											At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
											sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor amet consetetur sadipscing elitr, sed diam
											nonumy eirmod tempor invidunt.
										</p>

										<p>
											Labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
											ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
											dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos
											erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum.
										</p>
										<div class="divider-40"></div>
										<div class="row">

											<div class="col-xl-3 col-lg-6 text-center">
												<div class="chart" data-size="180" data-percent="75" data-line="15" data-bgcolor="#f7f6fb" data-trackcolor="#42b7e2" data-speed="3200">
													<div class="chart-meta">
														<strong class="percent color-darkgrey">75</strong>
														<h4 class="thin">Online courses</h4>
													</div>
												</div>
											</div>
											<div class="divider-40 d-lg-none d-xl-none"></div>
											<div class="col-xl-3 col-lg-6 text-center">
												<div class="chart" data-size="180" data-percent="63" data-line="15" data-bgcolor="#f7f6fb" data-trackcolor="#492699" data-speed="4800">
													<div class="chart-meta">
														<strong class="percent color-darkgrey">63</strong>
														<h4 class="thin">Class courses</h4>
													</div>
												</div>
											</div>
											<div class="divider-40 d-xl-none"></div>
											<div class="col-xl-3 col-lg-6 text-center">
												<div class="chart" data-size="180" data-percent="88" data-line="15" data-bgcolor="#f7f6fb" data-trackcolor="#6e369d" data-speed="4100">
													<div class="chart-meta">
														<strong class="percent color-darkgrey">88</strong>
														<h4 class="thin">Drively School</h4>
													</div>
												</div>
											</div>
											<div class="divider-40 d-lg-none d-xl-none"></div>
											<div class="col-xl-3 col-lg-6 text-center">
												<div class="chart" data-size="180" data-percent="84" data-line="15" data-bgcolor="#f7f6fb" data-trackcolor="#bd4095" data-speed="3200">
													<div class="chart-meta">
														<strong class="percent color-darkgrey">84</strong>
														<h4 class="thin">Lessons</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="divider-40"></div>
										<p>
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores
											duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd
											magna no rebum.
										</p>
										<div class="overlay-image left">
											<div class="image-back img-overlay">
												<img src="images/blog/img-overlay.jpg" alt="">
											</div>
											<div class="image-front img-overlay">
												<img src="images/blog/side-image.jpg" alt="">
											</div>
										</div>

										<h6>Choose Your Own Connection!</h6>
										<p>
											At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
											sanctusamet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
											invidunt ut labore et dolore magna aliquyam erat.
										</p>
										<p>
											At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
											sanctusamet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
											invidunt ut labore et dolore magna aliquyam erat.
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
											invidunt ut labore et dolore magna aliquyam erat.
										</p>

										<h6>Choose Your Own Connection!</h6>


										<div class="overlay-image right">
											<div class="image-back img-overlay">
												<img src="images/blog/img-overlay-right.jpg" alt="">
											</div>
											<div class="image-front img-overlay">
												<img alt="" src="images/blog/side-image-right.jpg">
											</div>
										</div>


										<p>

											At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
											sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At
											accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo
											labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sesed takimata vero voluptua est ipsum
											dolor.
										</p>

										<h6>No More Waiting! Connect To JellyNet Now!</h6>
										<p>
											Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
											erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
											gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
											consetetur sadipscing elitr.
										</p>

									</div>

									<footer class="entry-footer">
										<span class="cat-tags-links">


											<span class="tags-links">
												<span>Tags:</span>
												<a href="blog-@@type.html" rel="tag">comments</a>
												<a href="blog-@@type.html" rel="tag">template</a>
											</span>

										</span>

									</footer>
									<div class="share_buttons social_part">
										<a href="https://www.facebook.com" class="color-bg-icon fa fa-facebook" target="_blank">facebook</a>
										<a href="https://twitter.com" class="color-bg-icon fa fa-twitter" target="_blank">twitter</a>
										<a href="https://instagram.com" class="color-bg-icon fa fa-instagram" target="_blank">instagram</a>
										<a href="https://www.youtube.com" class="color-bg-icon fa fa-youtube-play" target="_blank">youtube</a>
									</div>
									<div class="author-bio side-item content-padding">
										<div class="row">
											<div class="col-lg-12">
												<div class="item-media">
													<img src="images/blog/author-bio-avatar.png" alt="">
												</div>
												<div class="item-content">
													<p class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
													</p>
													<h5>
														<a href="#">
															John Doe
														</a>
													</h5>
													<p class="small-text">
														Admin
													</p>
													<div class="author-social">
														<a href="#" class="fa fa-facebook"></a>
														<a href="#" class="fa fa-twitter"></a>
														<a href="#" class="fa fa-google-plus"></a>
														<a href="#" class="fa fa-youtube-play"></a>
														<a href="#" class="fa fa-linkedin"></a>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<!-- .item-content -->
							</article>



							<!--})-->
						</main>


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
