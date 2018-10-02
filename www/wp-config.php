<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */                                                     
define('DB_NAME', 'vov');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+rB.xaJ>|3-ZrOQ(Vo1<>#ZS|0 eVFPfl@553K @5~RfTc)v=UzjRJuGSToQbo8|');
define('SECURE_AUTH_KEY',  'B4If/8:mBT591=6!mfx!%w)tpnLY=}JZFONe^VOwj]DB~*tBv4xU,LHgDF<1sRmK');
define('LOGGED_IN_KEY',    'AgMfL^dWNIJ7a|s2a,CjU%PSr*tQKl]dj|EJUpSQ]}sJft-mbxi2L_Azl~NW)H}&');
define('NONCE_KEY',        '~Hv7>algA@:v9SuKa+{]`&hl*|8 1aOBc%`6JRP>Bd(=]DLb[O||;,W[D%)7%shO');
define('AUTH_SALT',        '8&m,^cnO6HlU(FP)Lv%jt2%kfMccmJ`JQ*?i)};bUs8LtgQ`]jOwE#tnb&1`l}gq');
define('SECURE_AUTH_SALT', '&Gm3)4cm!b%Ml+A+Svw2,F+a4@[io*4jp3-8jnr 5IzO9Rgl0yn|HLiM3hHh<T{U');
define('LOGGED_IN_SALT',   '~A-N_y^N1S4pHCPsX)]-?L@Ju!BZBr[P`|Md!bf~D !]f5{JMZSixQ$+&POo{_l$');
define('NONCE_SALT',       'UN=16HiO?qx0ILTkm?F Ftt>P5U/l>9:^m=Bf>0x{~>%1_4Ac 1*0d!{P<!)PlGF');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */                  
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */


/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
