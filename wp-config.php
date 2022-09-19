<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'lmirzay_projekat' );

/** Database username */
define( 'DB_USER', 'lmirzay_projekatKorisnik' );

/** Database password */
define( 'DB_PASSWORD', '8E]xbfT*VgW}' );

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
define( 'AUTH_KEY',         'tHBP/S]Oe@^(*Pvw.]u3|3 Y f zn@iED8gXIcU`g6P9yA8Fd-V0}&go8,Y(moG2' );
define( 'SECURE_AUTH_KEY',  'Gr<:@^9rPt-;eL,k-?g~(Fe<z``J[U836jp{^Wfo&S@cAU (z<Nb23hJO==TgJt ' );
define( 'LOGGED_IN_KEY',    'PX,Y&wX8b&`pS]C<C~NNnFkc}`VyhI!f`p]b6bD0f4t/3C`^$*q9`PR1d{IGh`TU' );
define( 'NONCE_KEY',        'eqvbkdEh/G0,oVLTgM cN{gRiKk^m]J$W-nnCaf@P|-&*j}4;/YY]`MH::lczYlh' );
define( 'AUTH_SALT',        's#dEFO|h<mEX`^~b4Kh#OB-VOz oXVU[Yp&-XG&$om(2jjd48jz[FMjq?DnpMbH{' );
define( 'SECURE_AUTH_SALT', 'iw0;*br/)|RpQgOE-fvQh_O:x9<DavaC+%)fS=9moBVmk%*st%BGqKfg-(Ej3V^J' );
define( 'LOGGED_IN_SALT',   '][7d~vPYjoJ%~,I!ttsO%xgr}ISRxwK}h3t-PWxMt*Z/k_.eBqN,0tC%k:_uz0?y' );
define( 'NONCE_SALT',       'EPbRdp39H8q%qLo&Nlo2F2WO/77lpAKXOb2aw9EvABEnqFQ!CT-A3Lx5V@9os:lB' );

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
