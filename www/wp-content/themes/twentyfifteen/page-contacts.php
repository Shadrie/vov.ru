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
include 'new-header.php'; 
?>
  
    <?php vov_set_bg(''); ?>
    
    <div class="vov-head-text">
      
      <div class="vov-main-title"><span><?php the_title();?></span></div>
     
      <div id="desc" class="vov-description"> 
       <img src="http://vov.mgutm.ru/images/logo.png" style="float:left; margin-right:10px; margin-bottom: 10px">
       <b>Московский государственный университет технологий и управления имени К.Г.Разумовского</b> – один из ведущих вузов России, осуществляющих научные исследования и подготовку<br>                высококвалифицированных кадров<br>
               по широкому спектру направлений и<br> 
        специальностей в области индустрии питания, пищевой и перерабатывающей промышленности, агропромышленного комплекса и рыбного хозяйства.<br> <hr>
        </div>                                                                                                                                
  
	</div><!-- .head -->
                                       
<div id="content" class="vov-site-content">

	<div id="sidebar" class="vov-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

<!----------------------------header end------------>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="scroll-block">
<div class="desc-text">Университет осуществляет обучение и выпуск высококлассных специалистов технического, технологического, информационного, биологического, экономического, юридического и гуманитарных профилей в 12 институтах.<br><br>  
Высокое качество обучения в университете обеспечивается путем постоянного расширения и усовершенствования учебно-методической базы, насыщение кафедр, классов и лабораторий современной техникой и оборудованием. Занятия проводятся квалифицированными преподавателями с учеными степенями и большим опытом преподавания.</div> 
    </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
