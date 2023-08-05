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
define( 'DB_NAME', 'word2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'B.w/zpMummrE!a(:je9],YH0Im+1F{hK(*oaur*sEd_;|>DYQfUH]572f!PMgT9t' );
define( 'SECURE_AUTH_KEY',  'R+i=hXvJx@C(yHH%.+B(#Xdfv6(2&iCJ|QjRk|Ix6|XJ0y2_1[,[HI[Qzj?<XlO8' );
define( 'LOGGED_IN_KEY',    '*;KWGZ.9~d?Y.mO?q}C1h]OjpfYPfP+Rtz+3]/i|V:*,[_4S~2HeXC7FIc;PF/od' );
define( 'NONCE_KEY',        'vjM#9[b.mfKvb37~2L?C0<,5av5X`^_6&O=.)@hI%pJ^7`!4%`O4`P9W- `l+,lc' );
define( 'AUTH_SALT',        ')o;BK3<P~TGV;+rzE;3c<I,9/[sgK!37g2:(t]OHB&UIQQy+%H>df+X|-&+FY2o}' );
define( 'SECURE_AUTH_SALT', '-c*(_G#OJg;:Vd)`lqX, !?1minho:|L]7Q,}zGCIl1GF*o/|)6ni69isMR7o87L' );
define( 'LOGGED_IN_SALT',   'hO86;u%j@0;rgq/FP<FKW I;;:1eFA2$FZz9 )!O $iL5r}/!~6^w~YSh2#wy$tL' );
define( 'NONCE_SALT',       'us:1-2L(i;X@%:r**/r9jW-UQ`]jUCvglT({J`IxL5><>IjZ0N(bPQnchW{8p-`_' );

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
