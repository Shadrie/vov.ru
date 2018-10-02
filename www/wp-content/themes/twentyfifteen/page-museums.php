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

<?php vov_set_bg('http://vov.mgutm.ru/images/main/museums_picture.jpg'); ?>

<div class="vov-head-text">
    <div class="vov-main-title"><span><?php vov_set_header() ?></span></div>
    <div id="desc" class="vov-description">Для сохранения памяти о Великой Отечественной войне многое сделали школьные музеи. Они служат не только пособием к школьному курсу истории. Обращение к славным традициям прошлого, к великим и трагическим событиям Великой Отечественной войны формирует у молодого поколения национальное самосознание, национальную идентичность.<br>        Особое значение имеет тот факт, что<br>        экспонаты музея – это результат поисковой или исследовательской работы самих школьников. Так они приобщаются к тем великим духовным ценностям, которые сплачивали народ и позволили выиграть страшную и затяжную войну ХХ века.
    </div>
</div><!-- .head -->
                                       
<div id="content" class="vov-site-content">

	<div id="sidebar" class="vov-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="scroll-block">
    <table class="museum-table">
    <tbody>
         
		<?php	query_posts('cat=3'); 
 // вместо "5" указываем идентификатор вашей рубрики.  
 $a = 0;
 while (have_posts()) : the_post();?>
 
 <?php 
 if ($a == 0) echo '<tr>';
 ++$a;
 ?>
 <td>       
<!--в этой строке выводится название статьи и ссылка на неё-->     
<div class="museum-thumbnail"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>

<!--здесь выводится миниатюра записи-->
  </td>
<?php 
if ($a == 2) 
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