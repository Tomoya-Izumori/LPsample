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
define( 'DB_NAME', 'giteclp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qM, %L)La 3aVkP[n?/w?0>!tzh`k2utaw(}n*U4IDy#pB0WyQc3d,t8G0pR~~FD' );
define( 'SECURE_AUTH_KEY',  'AOX<D`Vnq4Y2!$zX-_|U52$^jA uOjxt,c.O9[l;.QXt[*yj^?t+jj{H!= b{P} ' );
define( 'LOGGED_IN_KEY',    'psGJ90DmV9,JDv*Fsk~uf+ywCiT+E~oqc5.Vvl{(r/[A)bgw>dMa{IzHqe!.QoEf' );
define( 'NONCE_KEY',        '26+M@{i;oJxI6B~2PIIZ}6:}yubqeswqC50ML;v$c Be*b)I$h(,hkLX5>O6-lf.' );
define( 'AUTH_SALT',        'ZVxa]=;3FK=fpGupfOV.[#rF1?dYMKWyI.ws-8gE]n)l ZaGN~sZMT6R^x&<Z*aZ' );
define( 'SECURE_AUTH_SALT', '>?g`LFHl!XYvd;O&b?rU9mRi<(l;P`mRO9BNZUZLW+4*%(EN1F4t&&qKF#)ju#ZL' );
define( 'LOGGED_IN_SALT',   '-<:2*BWm)LgB%u5,G2gPa<r!2Q`W%VMb}Uakf6/LRbtBuu]=<=97QZ!DunPCzc]|' );
define( 'NONCE_SALT',       '{j@_krN7uX/;Pnf.]ntCp+Q5ckpLM3;J;s3KrWQ;tC%-XcuHy[6hpz3S&>3hP(YH' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
