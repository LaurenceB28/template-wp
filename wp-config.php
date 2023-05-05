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
define( 'DB_NAME', 'template-wp' );

/** Database username */
define( 'DB_USER', 'template-wp' );

/** Database password */
define( 'DB_PASSWORD', 'tmOF@RJB@GYovOJG' );

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
define( 'AUTH_KEY',         'yT|Fi0DB)9)Jbg*5RS%pq/ Blhz1rM~_Iz=]7>(q6PNo5|}A3sO.}ViKV`2c VMd' );
define( 'SECURE_AUTH_KEY',  '1X6SF+V)oKs9{Q!r|MK4o Gz0<lQ!}h% 5,k1_?-Xz@MIj)jW;UXQb%qsK;Ku(P1' );
define( 'LOGGED_IN_KEY',    '}V[~tCAwMmyZ(u}TybsxZ4NZgvOTX$7s:sXy5%yYdwZG=i#4 JPODB1.rBvBB&ie' );
define( 'NONCE_KEY',        'oHpxv[c(>v0^B 4WMA%#[lC@2qFkia##qOO!VvA#J()NHh_*2fwJdR-[ T]&k&a^' );
define( 'AUTH_SALT',        'pZC5rBH4JsPXNx7tZxekxz]}`T3[E3_hC]8u@E|%MVz67W>kjtxt8#T%9uO (GLu' );
define( 'SECURE_AUTH_SALT', 'YM8m1$QfbzS3-`xdsR3?yXT/$DM0PG6rO5QW^pOyKT^ZI2jle=)mcR:4JN4!^IET' );
define( 'LOGGED_IN_SALT',   'Iwh>Q4]cz4y[Dr7ao)zrc<g!l)d3TZwU}ZI&b2QQ_ehHN@sT+UmBsDi%p<g_`iQ(' );
define( 'NONCE_SALT',       'm;urDSD[g$6-2+ez/(tC6vQ2;r$F6t Z#BH+8-K[$_qvXfLmcr6736:^Ow, }K({' );

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
