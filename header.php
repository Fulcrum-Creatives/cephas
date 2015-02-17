<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

 	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.0.min.js"></script>

 	
 	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/27de8d73-f485-4fda-9fe1-75d0e8405b92.css"/>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slider/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slider/default.css" type="text/css" media="screen" />
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.colorbox.js"></script>
	

	
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.nivo.slider.js"></script>
   
    
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
	        effect: 'sliceDownLeft',
        });
    });
    </script>
    
    <script>
			$(document).ready(function(){
				$(".inline").colorbox({inline:true, width:"50%"});			});
		</script>


    

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>
<div id="page" class="hfeed site">
<div id="header"><div id="header-cont">
<div id="logo">
<a href=" <?php echo home_url(); ?> ">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cephas_logo.png">
</a>
</div>
<div id="client">
<a class='inline' href="#inline_content">
Client Login
</a>
</div>
<div id="tagline">
<?php echo  get_bloginfo ( 'description' );  ?>
</div>

	<nav id="navigation">
	<?php wp_nav_menu( array('menu' => 'Primary Top' )); ?>
	</nav>
			
	<div class="clear"></div>
	</div></div>
	
	<?php if ( is_page_template('front.php') ) {
	
	} else { ?>
	<div id="main" class="wrapper">
	<?php
}
	?>
	