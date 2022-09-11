<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lmirzay_roman' );

/** Database username */
define( 'DB_USER', 'lmirzay_romanKorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'RSu~7)@t[Mo?' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'kNXY|M$eH$/4Kfrp8gVQe?Wp6rK*1a^ZqJ&IR|8oMtzN3@!xUI[0Ulug|fU8.A@3' );
define( 'SECURE_AUTH_KEY',  '4y]K$dx,]GUQJTX!EMG:82&f>f[dT{PJ2GjIU;]?hN; NFhRd0m=,@P{<q=E>K6E' );
define( 'LOGGED_IN_KEY',    'At]/&PwXb`s@3)x|KRc]4F:`GWAjkowDE{~/-u_i/?6!D*3uft-o(!C,A[eKW}0u' );
define( 'NONCE_KEY',        '0I%$9Xk$v8)57ltHMW//]9spQtDJ~-~{M9S3%hn?P]#pc%%Zaz8)UdomECZC<^W_' );
define( 'AUTH_SALT',        '*oT]|7U~Ha27}xCSMtTIjm;;,Q6e]`tt8)]nLF%s(j87f#{I[]X(]$y|YwG~|)YN' );
define( 'SECURE_AUTH_SALT', '~>u=?.t=DIy#/(wg1+BXMVHM[<pt?VG]`F+;IN#P _@IFv{rW`tq-6=j%_ZXSu]&' );
define( 'LOGGED_IN_SALT',   'cw9&6xyYEhvdTU`yjOP D)hOD~I8Mmmdms_7N)-YorW:gK,l7<X]l:Wa?g:<<%W>' );
define( 'NONCE_SALT',       'r)m|T6DGQO:R%!7+X~?}kV{?vko ^Y^X)v=:np5PqM*s7s!l2o3G%E>|y9hu`q[L' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
