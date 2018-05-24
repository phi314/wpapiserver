<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpapi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=2Q(cMVFZQ<nWOc5FcA$J74L:~M#8@_kUoM7uiw/#1smshC=&,!XeSw=bWhd,yc7');
define('SECURE_AUTH_KEY',  '*!R41RSC0%~kv-9}mwNNN:bP_U#mmCnB|LvO-Cx/I@t^3<wD#4N|v*?|&T6yVAzD');
define('LOGGED_IN_KEY',    'pUir0{.2NK]AN:GGAxO&bSOu);h?Ka,.arqWiHg8TuAWo8]Nbnr$Ub(&j%-T|p.f');
define('NONCE_KEY',        ']{l2*nj*1RJYwGV{KxM]K%$1bfQ&p8sfEEH>3j?![Hnw]Si@W<elnA*~s#}xn<Lc');
define('AUTH_SALT',        '+1?!!$1j}qo`Nz:*:V/G.wx4O]_1Ifvl#kdp<>DpB{5CF4nWkoeKIyNkwGc[Wkuy');
define('SECURE_AUTH_SALT', '+]kQ &H8%VOUE8.il2gtwf5}j=_i@B+.S@KYx[wg $*F.S0ZV1$T)Efb),Ti4;EH');
define('LOGGED_IN_SALT',   'OvHw0-Wv5ryh.Dtt?_[r_m{ 3Coc2/RFXB+.LS{*y5I{R;a8_gdyn?f?It-9<DP}');
define('NONCE_SALT',       'rE/JQDNz@;=`*_M^%bE!<g-cu&6{xDactN&}A#&((Y$9o]5o#ip{.uS(-#&K`!6H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * Json Web Token
 */
define('JWT_AUTH_SECRET_KEY', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
define('JWT_AUTH_CORS_ENABLE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
