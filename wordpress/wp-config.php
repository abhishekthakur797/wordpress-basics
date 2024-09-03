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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'rDA!_2Q2d)0/~@Lrc!0;O(,pmZFR.SX9H15t<wyc/yirvBgi6h8&>Dv3E>,ug#V#' );
define( 'SECURE_AUTH_KEY',  '<^uu?=Sys!g v%h*yf/$3D@)Xh6ZXWk]v+Yz(Y!a5MUUqONnGvCXe4(68I]68Q^Q' );
define( 'LOGGED_IN_KEY',    'Xc;%E;8?Gkr@Kx+a&6)]]xO:[HuVh2nTL 8Q$|SG9}3?Jy%P/;150MFVF-BfUr^h' );
define( 'NONCE_KEY',        '3(VHwy&CK{)pWGWr+7[9PkW>;=LnbE(<2?5+BX!ZB1UQy5eTi,<Z%XJUV.cD@AAW' );
define( 'AUTH_SALT',        '|#t2 }pBcIhW0rd%]wI#n}fLE$>tQSb&}z.lk>ptDZA=P%5PCStv@2N8{xM{LT)h' );
define( 'SECURE_AUTH_SALT', '_?bQA[MxV{GT zyMvK!:iKF/~n};zq5{<Y`U1yPpAvir.^2S4q3L/!IZ1EOpV%l%' );
define( 'LOGGED_IN_SALT',   'xA1KwbddsI>Y>FJ?Ycgq,^YO!zh<QYS=V)?R&iVSz:_Rz.O?O(2[gL[0@ _Jkx)+' );
define( 'NONCE_SALT',       'RqOHvT)$`,p+Nes`S=Y{a7?!-(hBi?GB}99k5cXDMD =h9:$f{gRDHXXqA~hp_j@' );

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
