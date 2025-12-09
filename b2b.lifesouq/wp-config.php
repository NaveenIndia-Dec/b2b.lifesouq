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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'b2b_lifesouq' );

/** Database username */
define( 'DB_USER', 'b2b_lifesouq' );

/** Database password */
define( 'DB_PASSWORD', 'XZDR20MOxV3G46Kq' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Q<>S*icx>~CLtoWtYcX{=B--g,N;6Glh=2@=nVe^pK$0wQiZ*m:nwOlF=^@t!rGS' );
define( 'SECURE_AUTH_KEY',   ';tk6nvr(QNr5x(p**Ro_/QWmqU@Vx6x8{rj4P%c!Z[R*XH)C6.;VXQ/rj;)-EXwp' );
define( 'LOGGED_IN_KEY',     '^GUvK`8H(O`7TZqi~QoYkQgv/a R5ju42MH1e^J7=eZ89EvK?FR,-m@5+TSr$_$4' );
define( 'NONCE_KEY',         '4`g1.by{_rv;YD@xFBTua+e8Y%FL0=|6Dh;i@PiB43r#d-|~/oCmA[rWWa=!$H*%' );
define( 'AUTH_SALT',         '68-ZJw8ufrIM3>fnjPjC=fk^i<iEcLA*QM^)9UxHV]pep}D0UZGk:&BK4ApF84~)' );
define( 'SECURE_AUTH_SALT',  '^lmu6g&lhwSGN2v7[`Br=t]c~OrSs^**srG|xw08rAC:<)8cDZFcuIlif<b57$SQ' );
define( 'LOGGED_IN_SALT',    '2l=utQp9OTBm4B6xBmzl`@:h+%Nn@JQ_l}rhd@@~Nc#HvAA,e%!r(oeMc/0Xhl2~' );
define( 'NONCE_SALT',        'xo`.bG[q*9lH25zDbn]?BB6G]=~=tcWYzzz@Tt_GOYuO**G_,+kB5:idHs1 )d<#' );
define( 'WP_CACHE_KEY_SALT', 'PoAA[bp,H{qf^6Oe.=$;Vl2g4]lk-$EB7J7Ihd4R7G?KmU;He^oP.!oI}&bsk eZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
