<?php

	$title = "Contact Us";
	$page = "contact_us";

	include("assets/incs/header.php");

 ?>
 		<!-- Hero -->
			<div class="bg-image-hero parallaxBg inner-hero">
				<div class="container valign__middle text-center">
				<div style="background: rgba(255, 255, 255, 0) none repeat scroll 0 0; padding:30px 0;">
					<h2 class="color-light animated fadeInUp wow margin-top-40" data-wow-duration="1.5s" data-wow-delay="1s" style="font-size: 33px; line-height: 33px; font-weight: 400; display: inline-block; padding: 7px 0;">
						Contact Us
					</h2>
					<p class="color-light font-open-sans animated fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="1.5s" style="font-size: 18px; font-weight: 400;">&nbsp;</p>
					</div>
			</div>
			</div>
			<!-- End Hero -->
		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<!-- Google Map -->
					<div id="map" class="map map-box map-box-space"></div>
					<div class="margin-bottom-40"><a href="https://www.google.com/maps/place/3250+Ocean+Park+Blvd+%23203,+Santa+Monica,+CA+90405/@34.0206155,-118.4533586,17z/data=!4m13!1m7!3m6!1s0x80c2bb0352e2f37f:0x266ba9f6ab9669cd!2s3250+Ocean+Park+Blvd+%23203,+Santa+Monica,+CA+90405!3b1!8m2!3d34.0206155!4d-118.4511646!3m4!1s0x80c2bb0352e2f37f:0x266ba9f6ab9669cd!8m2!3d34.0206155!4d-118.4511646" target="_blank">View larger map</a></div>
					<!-- End Google Map -->
<!--
					<form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Name <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label>Message <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="message" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u">Send Message</button></p>
						</fieldset>

						<div class="message">
							<i class="rounded-x fa fa-check"></i>
							<p>Your message was sent successfully!</p>
						</div>
					</form>-->
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2 style="color: #555 !important;">Contact details</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="assets/vcards/Pegasus-Capital-Group.vcf" target="_blank"><i class="fa fa-home"></i>3250 Ocean Park Boulevard<br><span style="margin-left:24px;">Suite 203</span><br><span style="margin-left:24px;">Santa Monica, California 90405</span></li>
						<li><i class="fa fa-envelope"></i><a href="mailto:info@pegasuscapgroup.com">info@pegasuscapgroup.com</a></li>
						<li><i class="fa fa-phone"></i>310-392-9100 </li>
						<li><a href="http://www.pegasuscapgroup.com/"><i class="fa fa-globe"></i>www.pegasuscapgroup.com</a></li>
						<!--<li><a href="assets/vcards/Pegasus-Capital-Group.vcf" target="_blank"><i class="fa fa-address-card-o"></i>
</i>Download vCard</a></li>-->
					</ul>

					<!--
					<div class="headline"><h2 style="color: #555 !important;">Business Hours</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>Monday-Friday:</strong> 9am to 5pm Pacific Time</li>
					</ul>


					<div class="headline"><h2 style="color: #555 !important;">Acquisition Opportunities</h2></div>
					<p>If you would like to submit an acquisition opportunity, please send a summary to Patrick Whelan at <a href="maitlo:pwhelan@pegasuscapgroup.com">pwhelan@pegasuscapgroup.com</a></p>-->
				</div><!--/col-md-3-->
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->
<?php

include("assets/incs/footer.php");

 ?>