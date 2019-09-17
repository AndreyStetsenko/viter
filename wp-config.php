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
define( 'DB_NAME', 'km' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.K)}:M7NSAH-3<C:U5OLR=6^:;s9G/V{M0CYs?eV4i#eZ#Dg.0*lb:k)6k{5zWnY' );
define( 'SECURE_AUTH_KEY',  '<rb0Bkx}hLU|(u<s<Skf2Pea%&1IXC^()^@N3*%$nJ[fkkKj<~n>1<6|p+9#G3%#' );
define( 'LOGGED_IN_KEY',    '0Cb&,x>(tfa*JqPPu;aEwFarHz{>:wFhDUKo6cGj R}])<1O)baY8;.z{gFX<Gy}' );
define( 'NONCE_KEY',        '#*A }s$657G*+{rUkcoKCL{TItu^Y]`U#h}!2%(H0TmLY~{RW+i4N2Hb(-m^`vGl' );
define( 'AUTH_SALT',        '=:I|u{Nv.F_CJAe0i,}e*EQ<PM|ml<=[{k?$[3/O Tga9`R+1rx 0r]t>%UIQDQ!' );
define( 'SECURE_AUTH_SALT', '7!J/<8b9ru1Hyo0lW~/{Yzzfz(G%?!w|+;ryVNJ*k=(2g~A^]qs]NWB1@UJm.J:#' );
define( 'LOGGED_IN_SALT',   'm|K91L4)#eSWw!YGC?b_.oyD{]jGK6jKW6[:,sc2LVrvb8aFC%S0T$^L#>~gZ7(L' );
define( 'NONCE_SALT',       '.LNJyqfSN4l2-38Qx+:al[Tg;zI23(S]75iBr~bb^v] Yg;.EX]6^=DWBk,7e({b' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_viter_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
