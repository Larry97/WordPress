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
define( 'DB_NAME', 'lmirzay_trpkovic' );

/** Database username */
define( 'DB_USER', 'lmirzay_trpkovicKorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'Y,OY#+uq6LgE' );

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
define( 'AUTH_KEY',         '}]x$e}XV+-OJ{LcTdKAOh+j@cR8$Xl$u%eJAQG~oSi][w:.6p^qE,krj>jXpYo$0' );
define( 'SECURE_AUTH_KEY',  '/1}bWZAdzg_v,;7P9g?-7uL|2P#Z_y>1._Vg3xQnGy|pD1MQaKADS9^P7Wha_Hj0' );
define( 'LOGGED_IN_KEY',    's::][.3kPTqmLKDJrBR4vA>mpB{=zCPlSyM;jEZ,n$fGK#?Y##zt8f0i2+1+L1HJ' );
define( 'NONCE_KEY',        'J a`+N.uH`T.cMN,QD%=%/i[pcFtM&uOj1%Z]2(:Qa>2%rNSkz?yED2mVj(f-SW,' );
define( 'AUTH_SALT',        'uy)5BA:@-C3GViKVtCOpy|>B_pr4le|]u9l[>OjkuRDl6ME1aPeDu1E~9#^1FPXQ' );
define( 'SECURE_AUTH_SALT', '4VFc3ut+^$z!aF*IA<Y0>cX6 gR0kc-zWAS&v74=2:IX1QHQx5,jIMu2BS@G6:#N' );
define( 'LOGGED_IN_SALT',   'nq/9%id@sHaCwN%jA#y#6&s|$#Y6$t1^{@]6o[tdZ.,`a8H3W^<BEp9WjS|-vU;l' );
define( 'NONCE_SALT',       '%z$B)`npa3mX.QC`tt6oafejqi>XkC<7SKO9rZ=[GHA<w(A^>lE].yMSZ,btjrNd' );

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
