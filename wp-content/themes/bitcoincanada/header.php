<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BitcoinCanada
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,700,700i,900" rel="stylesheet">

    <!-- Icon CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ts.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/js/slick/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/js/lity/lity.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bitcoincanada' ); ?></a>

	<!-- HEADER SECTION START -->

	<div class="wrapper">

	<!-- SIDE MENU -->
	<div id="sidebar-wrapper" class="hidden-xs">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="fa fa-angle-right"></span></a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="fa fa-angle-right"></span></a>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="fa fa-angle-right"></span></a>
				<!-- <ul class="dropdown-menu">
					<li><a href="#">Politics</a></li>
					<li><a href="#">Opinions</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="#">Local</a></li>
					<li><a href="#">National</a></li>
					<li><a href="#">World</a></li>
					<li><a href="#">Business</a></li>
				</ul> -->
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business <span class="fa fa-angle-right"></span></a>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Interviews <span class="fa fa-angle-right"></span></a>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opinion <span class="fa fa-angle-right"></span></a>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Technical <span class="fa fa-angle-right"></span></a>
			</li>
		</ul>
	</div>
	<!-- // SIDE MENU -->

	<!-- HEADER / MENU -->
	<header class="header1 header-menu-style1 header-menu-style10">

	<?php
		wp_nav_menu( array(

			'theme_location'	=> 'primary',
			'container'			=> 'nav',
			'container_class'	=> 'topbar topbar-white topbar-white-w-search',
			'menu_class'		=> 'account-options'

			));
	?>

	<div class="topbar topbar-white topbar-white-w-search">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="account-options">
						<a href="#">Careers</a>
						<span>|</span>
						<a href="#">Advertising</a>
						<span>|</span>
						<a href="#">Contact</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="pull-right account-options">
						<div class="header-social pull-right">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-rss"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<span class="offset-trigger hidden-xs">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</div>

				<div class="col-md-6 text-center">
					<!-- <span id="date_time">Tuesday, Sep 24, 2016</span> -->
					<a href="./index.html" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" class="img-responsive" alt=""/></a>
					<!-- <span id="weather">3&deg;c</span> -->
				</div>

				<div class="col-md-3">
					<div class="pull-right">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				           </button>
						<div class="search-trigger"><i class="fa fa-search"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="container">
		<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Business</a></li>
			<li><a href="#">Interviews</a></li>
			<li><a href="#">Opinion</a></li>
			<li><a href="#">Technical</a></li>

			<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="fa fa-angle-down"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Videos</a></li>
					<li><a href="#">Photos</a></li>
				</ul>
			</li>
		</ul>
		</div>
	</div>
</header>
	<!-- // HEADER / MENU -->
