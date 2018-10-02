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
    <div id="desc" class="vov-description">Раздел «Творцы победы» рассказывает о героях Великой Отечественной войны. Их личное мужество, героизм, жертвенность приблизили Победу. Каждому из них мы, поколения, не знавшие войны, хотим сказать спасибо и преклонить колени пред их подвигом.
    </div>
</div><!-- .head -->
                                       
<div id="content" class="vov-site-content">

	<div id="sidebar" class="vov-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <!--Творцы победы-->
    <a href="/victory/heroes/"><img src="http://vov.mgutm.ru/noimage.png" class="heroes-img" /></a>
    <a href="/victory/my-war/"><img src="http://vov.mgutm.ru/noimage.png" class="my-war-img" /></a>
    <a href="/victory/tragedy/"><img src="http://vov.mgutm.ru/noimage.png" class="tragedy-img" /></a>
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>