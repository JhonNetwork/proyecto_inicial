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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sym' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>rLqe~>W1}gW7zn-4{/*a7GG~6QBg/xwcP~6@|2b:XiK@XPW6i[F|: R3~8CFa9)' );
define( 'SECURE_AUTH_KEY',  '}JZO?{#yvN9saCdtL<,81$Od)J7>|Ku];le{S22AtK7Wtd.-flxB%.WlpW.#IRNd' );
define( 'LOGGED_IN_KEY',    'fp,V}f:jExbU1oWj!)k;>?fz}1SF)q~_~D3k8E; ,V`oZOYtyxQ|,2LDegw-Ll;M' );
define( 'NONCE_KEY',        'ZuXG-kq=tqu5L~]:(/)(9!#{KNZfOK9ItVgPY8S;D4t2F,}LTp`f/H*?td$9 c4T' );
define( 'AUTH_SALT',        'd[QALT(DHAu_!h)%noqeX=J%(I.LTZ-$W4u#75M~`^+:Y}!zbV-?X81|i+H>wq%l' );
define( 'SECURE_AUTH_SALT', 'y7*GDE(s)>YJ?S#c1&4JdK`6We1<O}2dN0z4*u]O^<n;D>nF99DM2S: KCh>8$4c' );
define( 'LOGGED_IN_SALT',   '!8$|%Vj0P0h[MMFkT%]w(AsC^<juFM>QfwTZp%`b7{6UxQ7/7VmJFd3?ey,(X5w ' );
define( 'NONCE_SALT',       'rG<#E`cL8I+*ft~)Isvi6;%J.LF4%,JJCY+1DN[yCC)%5xH_t@*22`I4rv*y07F>' );

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
