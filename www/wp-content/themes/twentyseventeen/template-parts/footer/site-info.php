<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
  
<div align="center" width="100%">
<b>© ФГБОУ ВПО «Московский государственный университет технологий и управления имени К.Г. Разумовского (ПКУ)»</b><br>
Информация о гранте (№ 214 от 26.08.2014, департамент образования г. Москвы)<br>                          
При копировании информации обязательна ссылка на сайт.<br>
<b>E-mail:</b> kgsen@mgutm.ru<br>
<a href="mailto:kgsen@mgutm.ru">Сообщить об ошибке</a><br>
<br>
<b>Приглашаем к сотрудничеству все школьные музеи ВОВ</b><br>
Калугин Виктор Никитович<br>
<b>E-mail:</b> victor2558@mail.ru<br> 
<b>Тел.:</b> 8 (915) 076-67-19  
</div>

</div><!-- .site-info -->
