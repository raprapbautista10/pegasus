<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
/*

// Keep this code for now.

	$host = $_SERVER[HTTP_HOST];
	$page = $_SERVER[REQUEST_URI];

    if ((strstr($_SERVER[HTTP_HOST], 'pegasusmgmt.com')) OR (!strstr($_SERVER[HTTP_HOST], 'www'))) {

    	if (trim($page != "")) {
    		$url = 'http://www.pegasuscapgroup.com'."$page";
    	} else {
    		$url = 'http://www.pegasuscapgroup.com/';
    	}

    	header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: $url");
    }
*/

function nl2p($text)
{
// Should be moved to ./assets/incs/functions.php, that file need creating.

	$prep0 = str_replace(array("\r\n" , "\n\r") , "\n" , $text);
	$prep1 = str_replace("\r" , "\n" , $prep0);
	$prep2 = preg_replace(array('/\n\s+/' , '/\s+\n/') , "\n" , trim($prep1));
	$result = '<p>'.str_replace("\n", "</p>\n<p>", $prep2).'</p>';

	return $result;

}
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Welcome To Pegasus Capital Group</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content=" <?php echo "$host $page"; ?>">

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600'>

	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/headers/header-v6.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/layer-slider/layerslider/css/layerslider.css">
	<link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
<?php

	if ($page == "contact_us") {
?>
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/page_contact.css">
<?php
	}
?>
	<link rel="stylesheet" href="assets/css/theme-colors/brown.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed">
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header-v6 header-dark-transparent header-sticky">
			<!-- Navbar -->
			<div class="navbar" role="navigation">
				<div class="container">
					<div class="menu-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Navbar Brand -->
						<div class="navbar-brand">
							<a href="index.php">
								<img class="default-logo" src="assets/img/logo/pegasus-logo-280-dark.png" alt="Pegasus Capital Group">
								<img class="shrink-logo" src="assets/img/logo/pegasus-logo-280-dark.png" alt="Pegasus Capital Group">
								<img class="mobile-logo" src="assets/img/logo/pegasus-logo-280-light.png" alt="Pegasus Capital Group">
							</a>
						</div>
						<!-- End Navbar Brand -->
						<!-- End Header Inner Right -->
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="menu-container">
							<ul class="nav navbar-nav">
								<li><a href="index.php">
									Home
								</a></li>
								<li><a href="investment-criteria.php">
									INVESTMENT CRITERIA
								</a></li>
								<li><a href="the-team.php">
									THE TEAM
								</a></li>
								<li><a href="portfolio.php">
									PORTFOLIO
								</a></li>
								<li><a href="news.php">
									NEWS
								</a></li>
								<li><a href="contact-us.php">
									CONTACT
								</a></li>
								<?php
								if ($page == "news") {
								?>	
									<li><a href="#" role="button" data-toggle="modal" data-target="#login-modal">
										INVESTOR LOGIN
									</a></li>
								<?php
								}
								?>
								<!-- End Nav -->
							</ul>
						</div>
					</div><!--/navbar-collapse-->
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v6 ===-->