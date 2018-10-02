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

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="scroll-block">
         
		<?php	
 // вместо "5" указываем идентификатор вашей рубрики.  
 $a = 0;
 while (have_posts()) : the_post();?>
 
 <?php 
 echo '<div class="post-block">';
 ?>      
<!--в этой строке выводится название статьи и ссылка на неё-->     
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div> <?php the_truncated_post('500'); ?> </div> <!--обрезанный пост-->
<!--здесь выводится миниатюра записи-->
<?php 
echo '</div>';
 ?>
	<?php // вывод текста записи
	endwhile;
  wp_pagenavi();
 	wp_reset_query();
	?>
  
    
     </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>