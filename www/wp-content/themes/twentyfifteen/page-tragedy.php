<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*get_header();*/ include('new-header.php'); ?>   

<?php vov_set_bg('http://vov.mgutm.ru/images/main/heroes_picture.jpg'); ?>

<div class="vov-head-text">
    <div class="vov-main-title"><span><?php vov_set_header() ?></span></div>
    <div id="desc" class="vov-description">«Моя война» – так может сказать каждый второй житель России. Почти в каждой семье были участники войны. История вошла тогда в каждый дом. Благодаря бережно хранимым в семейных архивах фотографиям, письмам и другим реликвиям неизвестные герои обрели 
      заслуженную известность.
    </div>
</div><!-- .head -->

<div id="content" class="vov-site-content">

	<div id="sidebar" class="vov-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="scroll-block">
    
    <table class="my-war-table">
    <tbody>
         
		<?php	query_posts('cat=7'); 
 // вместо "5" указываем идентификатор вашей рубрики.  
 $a = 0;
 while (have_posts()) : the_post(); if ($a == 0) echo '<tr>'; ?>
 
<td>       
<!--в этой строке выводится название статьи и ссылка на неё-->     
<div class="tragedy-thumbnail"><?php 
 echo get_the_post_thumbnail(); ?></div>
 
  <?php
			the_title( sprintf( '<div class="my-war-content"><a href="%s">', esc_url( twentyfifteen_get_link_url() ) ), '</a></div>' );
      ++$a;
		?>

<!--здесь выводится миниатюра записи-->
  </td>
  
	<?php 
  if ($a == 2) 
  {
    echo '</tr>';
    $a = 0;
  }
	endwhile;
 	wp_reset_query();
	?>
  
    </tbody>
    </table>
    
  
     </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
