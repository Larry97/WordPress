<?php

/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'lmirzay_portfolio' );
/** Database username */
define( 'DB_USER', 'lmirzay_portfolioKorisnik' );
/** Database password */
define( 'DB_PASSWORD', '}2uvq5v$]1~W' );
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
define( 'AUTH_KEY',         'bOe8{?9o5BJ?Xw{ 4y$y22{X)YEgN,hcZNdDBCqKY@1#S7d4SL|,~kB^Kse),9KF' );
define( 'SECURE_AUTH_KEY',  '[WOi>9e.D1>{*I-6n+eUb>#Yp.(_7js%Q`;wI`e!i< =`:#0h#hYpiidHCuHmHlh' );
define( 'LOGGED_IN_KEY',    'vU4nu1=D])bF>p[dCP~BiFaeOZ,,f[7c4SDX@6_0<-|8/M^P{<>v~41EoVT[olB4' );
define( 'NONCE_KEY',        'vo~ox>1,tEJu1$+WI;IR2(%a&h!|k6;f69#UJ7DKg0h}W9eb.p0*ah32FP.VV^uU' );
define( 'AUTH_SALT',        ';&0-XkM5h8R,,vMtN0GGT,@7bzQLdAKNS.$2`~htLA7;%u,j-U;mM DYuQPyj$>O' );
define( 'SECURE_AUTH_SALT', 'J=|raY22/|$i7kK*K:%P$vLh|Rx!9g(:U}59M*zvU|4rVxZvlW8AA**Ry,4x+4yu' );
define( 'LOGGED_IN_SALT',   '6Z9o&^o.;S^w>T|+9N?$B?OSLiJGo9;_z;z_gdf=a*?IRq7lH{HbT*-]sn3.@f`:' );
define( 'NONCE_SALT',       'hg#!|=K?>#IiSGz6Bol3La<YXhZQirKU;!*)R>1fRCjfmnpNyPygfCMQ,CqGL%?P' );
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