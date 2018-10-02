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
    <div id="desc" class="vov-description">Музей бережно собрал свидетельства о Героях Великой Отечественной. Каждый подвиг Героев Советского Союза, их персональные выдающиеся качества: патриотизм, преданность Отечеству, самопожертвование – удивительная и неповторимая страница в летописи Великой Отечественной войны.
    </div>
</div><!-- .head -->

<div id="content" class="vov-site-content">

	<div id="sidebar" class="vov-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="scroll-block">
    
    <table class="heroes-table">
    <tbody>
         
		<?php	query_posts('cat=5'); 
 // вместо "5" указываем идентификатор вашей рубрики.  
 while (have_posts()) : the_post();?>
 
 <tr><td>       
<!--в этой строке выводится название статьи и ссылка на неё-->     
<div class="heroes-thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
</td><td>
<a href="<?php the_permalink(); ?>" style="text-decoration: none"><h2 class="entry-title"><?php the_title(); ?></h2></a>
<div class="heroes-content"><?php the_content(); ?></div>

<!--здесь выводится миниатюра записи-->
  </td></tr>
  <tr><td colspan="2" style="text-align:center"><img src='http://vov.mgutm.ru/images/ribbon.png' style="padding-bottom:20px"></td></tr>
  
	<?php // вывод текста записи
	endwhile;
 	wp_reset_query();
	?>
  
    </tbody>
    </table>
    
  
     </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
