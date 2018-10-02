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

<?php vov_set_bg('http://vov.mgutm.ru/images/main/phaleristics_picture.jpg'); ?>

<div class="vov-head-text">
    <div class="vov-main-title"><span><?php vov_set_header() ?></span></div>
    <div id="desc" class="vov-description">Особая тема – это награды за великий подвиг в войне. Орденами и медалями было награждено более 7 миллионов человек. Соединениям, частям и кораблям Советских Вооруженных сил вручено 10900 боевых орденов.<br>
В ходе Великой Отечественной войны орденами и медалями награждались советские войны, партизаны, труженники тыла, народные<br>     ополченцы.
    </div>
</div><!-- .head -->

<div id="content" class="vov-site-content">

	<div id="sidebar" class="vov-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="scroll-block">
    <h2 class=entry-title>Медали</h2>
    <table class="medal-table">
    <tbody>
         
		<?php	query_posts('cat=10'); 
 // вместо "5" указываем идентификатор вашей рубрики.  
 $a = 0;
 while (have_posts()) : the_post();?>
 
 <?php 
 if ($a == 0) echo '<tr>';
 ++$a;
 ?>
 <td>       
<!--в этой строке выводится название статьи и ссылка на неё-->     
<div class="medal-thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!--здесь выводится миниатюра записи-->
  </td>
<?php 
if ($a == 5) 
{
echo '</tr>';
$a = 0;
} ?>
	<?php // вывод текста записи
	endwhile;
 	wp_reset_query();
	?>
  
    </tbody>
    </table>
    
    <h2 class="entry-title">Ордена</h2>
    <table class="medal-table">
    <tbody>
         
		<?php	query_posts('cat=11'); 
 // вместо "5" указываем идентификатор вашей рубрики.  
 $a = 0;
 while (have_posts()) : the_post();?>
 
 <?php 
 if ($a == 0) echo '<tr>';
 ++$a;
 ?>
 <td>       
<!--в этой строке выводится название статьи и ссылка на неё-->     
<div class="medal-thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!--здесь выводится миниатюра записи-->
  </td>
<?php 
if ($a == 5) 
{
echo '</tr>';
$a = 0;
} ?>
	<?php // вывод текста записи
	endwhile;
 	wp_reset_query();
	?>
  
    </tbody>
    </table>
    
    <h2 class="entry-title">Ордена коммандного состава</h2>
    <table class="medal-table">
    <tbody>
         
		<?php	query_posts('cat=12'); 
 // вместо "5" указываем идентификатор вашей рубрики.  
 $a = 0;
 while (have_posts()) : the_post();?>
 
 <?php 
 if ($a == 0) echo '<tr>';
 ++$a;
 ?>
 <td>       
<!--в этой строке выводится название статьи и ссылка на неё-->     
<div class="medal-thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!--здесь выводится миниатюра записи-->
  </td>
<?php 
if ($a == 5) 
{
echo '</tr>';
$a = 0;
} ?>
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
