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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo1_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ew-*&.A6FRqnFL9g-%wD/(>L}^[7~g8:|oO~SR Dj{8eNG<ys(^4oiNQiP5V;63a' );
define( 'SECURE_AUTH_KEY',  'Rg_jz:M`mVmeAf~9 4d_p;K,XX&s)=t~]w8SU_tB.u;UHYw`$FSIu#Xn[zu~I</M' );
define( 'LOGGED_IN_KEY',    'k.>?mKwy?0/KE?X?R$ssJub6w8OK*,E4bdn f*?%T|BceF#&Zgze*WJK+>IGLiVx' );
define( 'NONCE_KEY',        'sc)3t pE/BU/atwj^B+xIz4^FK!tu=VI Dn{L>QmcGN;`Q1o@]f:zK/~u,a?d7Sj' );
define( 'AUTH_SALT',        ')z2`-4-,9jGw=]yn/et5F+HhI10t5y%jE3-Y({U_;B)~zG# |:<^+7E?&<n##DX_' );
define( 'SECURE_AUTH_SALT', 'fsC0Sak13oO0>]31?wJemN,wg3~vzxU2J#DC09oHA) |-+0k: J->!$)QpuLj&Xt' );
define( 'LOGGED_IN_SALT',   'qTH!xaWIP}jlO[+FTc%N,VLrkbqUqwnjOCG=d,bLu@.4K]}?u5]_0zY.iBRBGum:' );
define( 'NONCE_SALT',       '%f#1.PRrh{V>L5F|s^(nfCE^/`B}~?5cDSAu&h)?X<h?*]{NZlHhA0yZb4jCO}wq' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
