<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>



<?php
  $post = $wp_query->post;
 
  /*if ((in_category('10')) || (in_category('11')) || (in_category('12'))) { //ID категории
      include(TEMPLATEPATH.'/single-phaleristic.php');
  } else {*/
      include(TEMPLATEPATH.'/single-default.php');
  /*}*/ 
?>


<?php get_footer(); ?>
