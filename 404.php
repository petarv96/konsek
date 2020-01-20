<!DOCTYPE html>
<html lang="sr">
<?php
include('tekstovi.php');
?>
<head>

  <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo _T('Naslov sajta'); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/reset.css" media="all">
    <link rel="stylesheet" href="css/ut-fontface.css" media="all">
    <link rel="stylesheet" href="css/font-awesome.css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" media="all">
    <link rel="stylesheet" href="css/magnific-popup.css" media="all">
    <link rel="stylesheet" href="css/ut-responsive-grid.css" media="all">
    <link rel="stylesheet" href="css/color.css" media="all">
    <link rel="stylesheet" href="css/style.css" media="all">

    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
	<![endif]-->

   <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="ie8-and-down.css" />
	<style>.hero .hero-holder {
		margin-left:-410px;
	}
	</style>
    <![endif]-->

    <!--[if IE]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">

</head>

<body id="mainsite">

    <a id="top"></a>

	<!-- Page Layout
	================================================== -->

	<!-- hero section -->
    <section class="hero ha-waypoint parallax-section parallax-banner-7 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        <div class="parallax-overlay parallax-overlay-7"></div>
    	<div class="grid-container">

            <!-- hero holder -->
            <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            	<div class="hero-inner">
                    <span class="hero-description"><?php echo _T('Error Not found'); ?></span>
                    <div class="hero-title-holder"><h1 class="hero-title"><?php echo _T('Error'); ?> <span>404!</span></h1></div>
                    <span class="btn-holder"><a id="to-about-section" class="hero-btn" href="/"><?php echo _T('Back to Page'); ?></a></span>
                </div>
            </div><!-- close hero-holder -->
    	</div>
    </section><!-- close hero section -->


</div>

<!-- End Document
================================================== -->
</body>
</html>
