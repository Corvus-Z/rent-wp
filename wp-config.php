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
define( 'DB_NAME', 'rent-wp' );

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
define( 'AUTH_KEY',         'fiEi~S-yH*y:+Kh+wKkoqn^Gt8~<%t93JkPP)S f^`[aaq<PA+%9aC{jn_o/I7u]' );
define( 'SECURE_AUTH_KEY',  '/F/9b1cq 1TzW(B5vl*J}Gx)^<dgTG#$}:wjF,3aWT]nRc9VW@[}LXC}-D$vFJqD' );
define( 'LOGGED_IN_KEY',    'loJpI^l9^7qCBzC%Wa`<Pv$@cO+hCiu!DloJ#_DmI1_VE[HY_C/dcDK)u5LzRF!^' );
define( 'NONCE_KEY',        'nE:k[)mQ<t:xV{M=DBLLZ?<Oa,ui6IR1y|TV:5{0OBh[9p{9hJ=J[.Tvr*diP-R9' );
define( 'AUTH_SALT',        '1>j]UGN+{H!^lu.Q[^!I{i$t,~`{+&,x]LH1Nt%A.U%9DC@`JLKWv?(Q#y[$6naA' );
define( 'SECURE_AUTH_SALT', '~d:._2;S F?(x*Us?/.5T`m/g!UP&V^G4WQ}cg?3WY)n:eD3Ps|37!vyZHN^Z{!Z' );
define( 'LOGGED_IN_SALT',   'z?bZ(;`GK=E]>o<[Uhh*tmoa=&{T@&1~krRqR]+:0bf/g3Kk937Fb/dfKcPN7dY<' );
define( 'NONCE_SALT',       '3TC&OgNk!LxKvvy.d7Gf[Hk0/,u3:-yyD?5GS3EjIR V_M0[bkap3qj@2T8JvqGY' );

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
