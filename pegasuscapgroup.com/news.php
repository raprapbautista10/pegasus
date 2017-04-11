<?php

	$title = "News";
	$page = "news";

	include("assets/incs/header.php");

 ?>
		<!-- Hero -->
			<div class="bg-image-hero parallaxBg inner-hero">
				<div class="container valign__middle text-center">
				<div style="background: rgba(255, 255, 255, 0) none repeat scroll 0 0; padding:30px 0;">
					<h2 class="color-light animated fadeInUp wow margin-top-40" data-wow-duration="1.5s" data-wow-delay="1s" style="font-size: 33px; line-height: 33px; font-weight: 400; display: inline-block; padding: 7px 0;">
						News
					</h2>
					<p class="color-light font-open-sans animated fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="1.5s" style="font-size: 18px; font-weight: 400;">&nbsp;</p>
					</div>
			</div>
			</div>
			<!-- End Hero -->
		<div>
			<div class="container content-sm">
					<div class="news-section">
						<p>Announcements, news and newsletters about the Pegasus Capital Group.</p>
						<div class="headline margin-top-40">
							<h3>News</h3>
						</div>
						<ul class="list-unstyled check-style margin-bottom-40 news-list">
<?php

	$count = 0;

	while ($count != 21) {

	include("news/$count.php");
?>
							<li><i class="fa fa-angle-right color-grey"></i> <a href="javascript:void(0)" data-toggle="collapse" data-target="#<?php echo "$id"; ?>" style="text-decoration:underline;"><?php echo "$title"; ?></a>
							<br><span style="font-weight:bold;"><?php echo "$subtitle"; ?></span></li>
							<div id="<?php echo "$id"; ?>" class="collapse margin-bottom-20">
<?php echo "$body"; ?>
							</div>
<?php
		$count++;
	}
?>
						</ul>

			</div><!--/end container-->
<?php /*
			<div class="bg-color-light call-to-action-dark">
				<div class="row">
					<div id="scrollhere">
						<p>Contact us at <span>info@pegasuscapgroup.com</span> or call us <span>310-392-9100</span>
						if you would like to submit an acquisition opportunity.</p>
					</div>
				</div><!--/end row-->
			</div>
		<!-- Flat Testimonials -->
			<div class="flat-testimonials bg-image-v1 parallaxBg">
				<div class="container">
					<div class="headline-center headline-light margin-bottom-60">
						<h2>Our latest Investments</h2>
						<p>Pegasus's current investments are comprised of successful middle-market companies that serve an array of niche markets.</p>
					</div><!--/end Headline Center-->

					<div class="row">
						<div class="col-sm-3">
							<div class="flat-testimonials-in md-margin-bottom-50 invest-box">
								<img alt="Midwest Automotive Designs, LLC" src="assets/img/home-investments/Midwest-Automotive-Designs-LLC.png" class="rounded-x img-responsive">
								<h4>Midwest Automotive Designs, LLC</h4>
								is a converter of custom luxury vans and trucks.
							</div>
						</div>
						<div class="col-sm-3">
							<div class="flat-testimonials-in md-margin-bottom-50 invest-box">
								<img alt="Jackrabbit, Inc." src="assets/img/home-investments/Jackrabbit-Inc.png" class="rounded-x img-responsive">
								<h4>Jackrabbit, Inc.</h4>
								is a manufacturer of nut harvesting and agricultural equipment.
							</div>
						</div>
						<div class="col-sm-3">
							<div class="flat-testimonials-in invest-box">
								<img alt="SANTIER, LLC" src="assets/img/home-investments/SANTIER-LLC.png" class="rounded-x img-responsive">
								<h4>SANTIER, LLC</h4>
								is a manufacturer of high thermal conductivity metal matrix composites, ceramics and packages/assemblies.
							</div>
						</div>
						<div class="col-sm-3">
							<div class="flat-testimonials-in invest-box">
								<img alt="American Piping Products, Inc." src="assets/img/home-investments/American-Piping-Products-Inc.png" class="rounded-x img-responsive">
								<h4>American Piping Products, Inc.</h4>
								is a distributor of specialty heavy-wall seamless pipe, fittings and flanges.
							</div>
						</div>
					</div><!--/end row-->
				</div><!--/end container-->
			</div>
			<!-- End Flat Testimonials -->
*/ ?>
		</div>
		<!-- End Content Part -->
<?php

include("assets/incs/footer.php");

 ?>
