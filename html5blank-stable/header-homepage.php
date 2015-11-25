<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/site.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/matt.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		

			<!-- header -->
	      <header>
            <div id="gradient">
               <ul class="stats clearfix">
                   <li>
                       <h4>23,260</h4>
                       <h5>TOTAL USERS</h5>
                   </li>
                   <li class="large">
                       <h4>3,279,336</h4>
                       <h5>TOTAL BALLS IN PLAY</h5>
                   </li>
                   <li class="large">
                       <h4>4,475,883</h4>
                       <h5>TOTAL PITCHES</h5>
                   </li>
                   <li>
                       <h4>158,375</h4>
                       <h5>TOTAL HOMERUNS</h5>
                   </li>
               </ul>
               <ul class="headerButtons">
                   <li><a href="#">LOGIN NOW</a></li>
                   <li><a href="#">VIEW LEADERBOARDS</a></li>
               </ul>
            </div>
             <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/home-hittrax-logo.png" />
            <nav id="topNav">
                <ul>
                    <li><a href="#">LOGIN</a></li>
                    <li><a href="#">LEADERBOARD</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </nav>
        </header>
        
			<!-- /header -->
