		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-0 footer-about">
							<a href="index.php"><img id="logo-footer" class="footer-logo" height="77" width="140" src="assets/img/logo/pegasus-logo-280-dark.png" alt="Pegasus Capital Group"></a>
							<p class="margin-bottom-20">Pegasus makes control investments in private companies and corporate divestitures in North America.</p>
							<!--<form class="footer-subscribe">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Join mailinglist">
									<span class="input-group-btn">
										<button class="btn-u" type="button">Go</button>
									</span>
								</div>
							</form>-->
						</div>
						<!-- End About -->
						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40 footer-links">
							<div class="headline margin-top-40"><h2 class="heading-sm">Navigation</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="index.php">HOME</a><i class="fa fa-angle-right"></i></li>
								<li><a href="investment-criteria.php">INVESTMENT CRITERIA</a><i class="fa fa-angle-right"></i></li>
								<li><a href="the-team.php">THE TEAM</a><i class="fa fa-angle-right"></i></li>
								<li><a href="portfolio.php">PORTFOLIO</a><i class="fa fa-angle-right"></i></li>
								<li><a href="news.php">NEWS</a><i class="fa fa-angle-right"></i></li>
								<li><a href="contact-us.php">CONTACT US</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div>
						<!-- End Link List -->
						<!-- Latest -->
						<div class="col-md-3 md-margin-bottom-40 footer-latest">
							<div class="posts">
								<div class="headline margin-top-40"><h2 class="heading-sm">Latest News</h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="http://pegasusmgmt.com/news.php">Pegasus Capital Group Expansion Announcement – Luke Sage</a>
										<small>Los Angeles, CA - October 2016</small>
									</li>
									<li>
										<a href="http://pegasusmgmt.com/news.php">Pegasus Capital Group Expansion Announcement – Michael Sieglen </a>
										<small>Los Angeles, CA - September 2016</small>
									</li>
									<li>
										<a href="http://pegasusmgmt.com/news.php">Pegasus Capital Group Promotion Announcement - Bryan Miller</a>
										<small>Los Angeles, CA - May 2016</small>
									</li>
								</ul>
							</div>
						</div>
						<!-- End Latest -->
    					<!-- Address -->
						<div class="col-md-3 md-margin-bottom-40 footer-addr1">
							<div class="headline margin-top-40"><h2 class="heading-sm">Contact</h2></div>
							<address class="md-margin-bottom-40">
								<i class="fa fa-home"></i>3250 Ocean Park Blvd., Suite 203 <br />
								<span style="margin-left:24px;">Santa Monica, CA 90405 <br /><br />
								<i class="fa fa-phone"></i>Phone: 310-392-9100 <br />
								<i class="fa fa-fax"></i>Fax: 310-392-9101 <br />
								<i class="fa fa-globe"></i><a href="http://www.pegasuscapgroup.com/">www.pegasuscapgroup.com</a> <br />
								<i class="fa fa-envelope"></i><a href="mailto:info@pegasuscapgroup.com">info@pegasuscapgroup.com</a>
							</address>
						</div>
						<!-- End Address -->

					</div>
				</div>
			</div><!--/footer-->

			<footer class="copyright">
				<div class="container">
						<p><?php echo date("Y"); ?> &copy; Pegasus Capital Group, all rights reserved. Designed by <a href="http://www.nbrandt.com" target="_blank">nBrandt.com</a>.</p>
				</div>
			</footer>
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->
<? /**/ ?>
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="assets/img/logo/pegasus-logo-log-in.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg" style="color:#999">Type your username and password.</span>
                            </div>
				    		<input id="login_username" class="form-control" type="text" placeholder="Username" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-login btn-lg btn-block">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your email.</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="Email" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
   
	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="assets/plugins/back-to-top.js"></script>
	<script src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/jquery.parallax.js"></script>
	<script src="assets/plugins/wow-animations/js/wow.min.js"></script>
	<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<!-- JS Customization -->
	<script src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/plugins/fancy-box.js"></script>
	<script src="assets/js/plugins/owl-carousel.js"></script>
<?php
	if ($page == "contact_us") {
?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyAoZo6v1SQFRwsr6YIJKYIcl6Hc-tsiud0"></script>
	<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/forms/login.js"></script>
	<script type="text/javascript" src="assets/js/forms/contact.js"></script>
	<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<?php
	}
?>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
<?php
	if ($page == "contact_us") {
?>
			ContactPage.initMap();
			ContactForm.initContactForm();
<?php
	}
?>
			new WOW().init();
			App.initParallaxBg();
			FancyBox.initFancybox();
			OwlCarousel.initOwlCarousel();
		});
	</script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>
</html>
