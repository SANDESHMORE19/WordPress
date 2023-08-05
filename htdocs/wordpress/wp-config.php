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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'bXu~[a7gKu?KYmi}2VX|hm1gaCzqKiRw !j~~bA+V75.)H{yj!I25U5r#T^^d`]t' );
define( 'SECURE_AUTH_KEY',  'NM3iYsn:jj!c}rA5[FwB^Q0kP#|,>i~Vxu|~GAvgHpuL9C4HL S3PBrsdA.1=~Vq' );
define( 'LOGGED_IN_KEY',    '6]6)Cl1y+.B6lJLN6?Q/Ez#jENqItX/l)6 (Gw!]/A6FG=%hD!e!|V3<)xo/V<07' );
define( 'NONCE_KEY',        'qt5xlR!hsg86E$YYDd&+^yfq?><ys]b#y<8(v[m.>Vu!(#l4SI:lBJ6RH^6hhjVV' );
define( 'AUTH_SALT',        'hDNVAp/pSW#v)oU*_I#?S~O)|17SBVwU 0XlK[ni$e[SPcZf7Zy+hY-7.D?0/E2M' );
define( 'SECURE_AUTH_SALT', 'KUFtFIN%-y+-hh4lO(iL>K=KgP`~@d[cmxkb[|>m8_:8#s)#$t;%sX.[AdED<5Yc' );
define( 'LOGGED_IN_SALT',   'ocJA!t{P[Dq-p=[Yu:5frVy!b${a]_u@DQ8goZmVK<H7/c@%A53QWm.m2f~7IQ=/' );
define( 'NONCE_SALT',       'bfS! XB~:l)&SrHO4[6Q!ao{~I~qw&mq<&%5IKrPTN[K&RLyp5z,Mw=wzM,BQwmg' );

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
