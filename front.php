<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

 <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
	            	 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cephashomeslider1.jpg">
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cephashomeslider2.jpg"> 
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cephashomeslider3.jpg">
	 
			</div>
</div>
	<!-- <div id="primary" class="site-content">
		<div id="content" role="main">

		</div>
	</div><!-- #primary -->
<div id="main" class="wrapper">
<div id="boxes-cont">
		<div id="left">
			<?php dynamic_sidebar( 'font-left' ); ?>
		</div>
		<div id="center">
			<?php dynamic_sidebar( 'center-left' ); ?>
		</div>
		<div id="right">
			<?php dynamic_sidebar( 'right-left' ); ?>
		</div>
	</div>



    

<?php get_footer(); ?>


	