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
define( 'DB_NAME', 'islamov' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'islamov' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'serii1981;' );

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
define( 'AUTH_KEY',         '[t+HC|j;K c+`@<VRX@O,Wr9p$Y_Na7(E}54 ,`kB{D)wh.}f$QSPm29!P@V|4ws' );
define( 'SECURE_AUTH_KEY',  'l$|[1zmS]t(gj+N7~w!zNHW6Cd>yMA;?Ne!!J!gS3n{]kocsrww`})Za{h>cJbA0' );
define( 'LOGGED_IN_KEY',    'Xr;6T=f0OZ>R;/Aqdb}DyrFW{D|mIU0xWl=ues7d#XVuTutA(c~fhOt}veLvj1sG' );
define( 'NONCE_KEY',        '%j#J[m+b]?_W| dZ@xbg&.{#B`$`#= :^b*-ax~-:,U)WM>5j{MT0[e?!&+VoP=.' );
define( 'AUTH_SALT',        'PbB>9=c%-}n|aQWA0?,Mvmc-)^s{(Q*cE&vRmTT`yVUE!M@qshzue8zQ@A+g(QX_' );
define( 'SECURE_AUTH_SALT', ')#fY]W,D_,LF`no;zEi[p&}e>N!R2-I!r*oUE=I]xS;v}tV|Ey}E]PB559#A6ze{' );
define( 'LOGGED_IN_SALT',   '7Yw^/|I+,q5-_u3-70rc-INaOGj%kmv=9JJg(XfwK4tUrv8h;4UbQKTIQ2$7IuW!' );
define( 'NONCE_SALT',       '6U@uDJ}%PoM[fdS<|N|dnus4AMIHnKY.HBH2)@D6@Ayg2};rXDk8H,)pCoL)4})k' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
