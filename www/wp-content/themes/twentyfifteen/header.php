<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> 
    
</head>

<body <?php body_class($class); ?>>   

<div id="page" class="vov-site">

	<div class="vov-head">
  
    <?php vov_set_bg(''); ?>
    
    <div class="vov-head-text">
      
      <div class="vov-main-title"><span> <?php vov_set_header() ?> </span></div>
      <div id="desc" class="vov-description"> <?php vov_set_description() ?> </div>
  
	</div><!-- .head -->
                                       
<div id="content" class="vov-site-content">

	<div id="sidebar" class="vov-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

