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
define( 'DB_NAME', 'apple_store' );

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
define( 'AUTH_KEY',         'gP!AQMS57XOGQ>c}TMdgZz&+7[xL.H@:!<V8>HvD?(P:5M$0Y7_3)}}{CDo5:j9=' );
define( 'SECURE_AUTH_KEY',  '#Au nDX~N+,#E>x6B:0Yk!qvIl>UAm1h}MNXkYG:+Od@P^]b`,0gH=rk]p2bnBQj' );
define( 'LOGGED_IN_KEY',    ';.n9k(L9s/2;dy_uI}Hp/@4(a];R1X5q3{:~~g=8zV`#}p@A9<S9:&mK/ox}~:W5' );
define( 'NONCE_KEY',        'B-P0[x2G81;4_M5]*3uL4++:`1FquT1B-y_zTYc!m<Z2l]BerphOf<:k616O1Qsr' );
define( 'AUTH_SALT',        '_y#$_QD!.a0Zk}vU!]M.{gq_/{%WXLVWBh=?@n&GJ}9A<~;ooUsu!V)6(_</MYlx' );
define( 'SECURE_AUTH_SALT', 'd=XC#7@axwBLA1cPpSu>Xs}*W[_4G {6D A8X9geC[6iI2!4dE#N0fiE]>G22JRy' );
define( 'LOGGED_IN_SALT',   'jhO2b,%pKuXeRRjH0wi;6xet20Voj4oBy{Qn(k@]@M.;HZ#V1E%<< bmZsXyi{w ' );
define( 'NONCE_SALT',       'T?=y.qNsglcq1j;Tqtz}jkuIY]9KhGS<nYP:CUdkDY*TibIkG-RTA*`qYw%qgNIv' );

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
