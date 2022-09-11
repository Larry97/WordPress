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
define( 'DB_NAME', 'lmirzay_digitel' );

/** Database username */
define( 'DB_USER', 'lmirzay_digitelKorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'yv]n.V2cEb^b' );

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
define( 'AUTH_KEY',         'yIb9Hj-vsE]F)Z.9je#H)Jz4]?N46A]zs3KH%Pou(yjMOpGEOC@d~Djs1sfM{:|u' );
define( 'SECURE_AUTH_KEY',  'L<(nX<64^&w*/]Nfb/dDQ<yaq,M=M)!#763g{<ph(fu>Q)]sKH)#YtS l=,l`ZS#' );
define( 'LOGGED_IN_KEY',    'Qh!)nKK7tisT}io=LF+Q!49sRr]T:r5[HLI;H8o<wOq&y4AsPIc4u%D&O[(;Pb}@' );
define( 'NONCE_KEY',        'kVNER_]YPuJ>nfkvB)nU}MleSN?[WD`SIwjsq0W;2+xh7el!kG1)s@i;F[-GKf:G' );
define( 'AUTH_SALT',        '97,<EaRVF .VE)Uf)C6L@9DGz =>D:A(oy~}|0>}eRSNs1K$w,[!JaY`4iH!=:}/' );
define( 'SECURE_AUTH_SALT', 'at&u=`PqAFT{wL1u7Lv#t{/Ju*+V6RbRD$d,qt e.6I!9U/8zG^*Vq^WOdx/QDg#' );
define( 'LOGGED_IN_SALT',   'H!+?O4PTawH^-|U>eZvb|}4y6]8ykImsC*0y@tcuW=|2?hzObhi-YL!nz~Fm%{zv' );
define( 'NONCE_SALT',       '),7w_~59PlcGz7}e(oPIOd4hYNp62 4Fk,bTu9cX*- 2qXf3M5(n+c2A8/cwUcG(' );

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
