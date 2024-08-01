<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itexperts' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZXo)cUAu/*(_;ILeE?Siz3IC({)2]G<&5CTO-}+_BoTD`&$lel-{^s!s4.:_W6-p' );
define( 'SECURE_AUTH_KEY',  'mVnSwCI;SV^*x{lqTBT_N$pVR/!7ELrVIzE,elTVVP(?c]zMW&Dy[uI_A#A_]nag' );
define( 'LOGGED_IN_KEY',    '2q`fN{Bg0lkT=?V9gMyxy#,^9.hnHc,=pzp0TY11<]X_U-5%_6g!q6l{jhb(G00D' );
define( 'NONCE_KEY',        '$}hm GjnX3Q0vQtf!B7]frYEx^Vs}t[gqfd5o#e|&2dkWr=V0v>FFaPo neh&;On' );
define( 'AUTH_SALT',        'PMn8u8OQA/}HDTo}Qo/SL?m)j^6 )>k` +[B8s(#LPy&LX%0d[^S#yMkMmpK.u<i' );
define( 'SECURE_AUTH_SALT', 'J+!l-q,PN647H:1NB)eFyQx-p(IRg]WYH= (!w).MpDK*DqhNASqxPl,6?,rZub/' );
define( 'LOGGED_IN_SALT',   '[=NPTl.D>8;Ud]}@)tvM;Tc1Ey6[;gpMLp6y(?:w^[wsQQjZU:7|l;2K_6V odHr' );
define( 'NONCE_SALT',       '!E^,Za`KJXr~aD%h5V4k-kDA(^|{[WZf9A<V><6?K<.Y|s:WP9.L]ZeQiuM!U%m;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
