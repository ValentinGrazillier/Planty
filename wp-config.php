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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'AtZz{G]k37I0e4+aqq{kh/f/L~8fw9Y:3Ol>8KdC<G:?vCd2Q_N*J5I/(u7rEawi' );
define( 'SECURE_AUTH_KEY',  '-K<)ED~#W*9= =v;W/HxGIyCf-Sx~*>li#ZTvav;aWf1-`mY^Y +zwsv<1..jb7=' );
define( 'LOGGED_IN_KEY',    '5lc9Kg.V];:=OPOB`L8nqWeX(m~KA}xVQ/!jreRQ3kRRF|_]Qf[:>k~ S/jx@/s8' );
define( 'NONCE_KEY',        'RC.59#)q>?pf:by9SE_GOz@C6JH~ #{L^ll><i2f#Kma8/TR:ujyIqqNYw^UqEID' );
define( 'AUTH_SALT',        'pO@r+Atm@;r]r*Xg$|nw<wBqlTXVUbMtxBV@P3.UFy_k l?Mw`ka`Yg.0S|XIvAf' );
define( 'SECURE_AUTH_SALT', '.=$*3H9Mcp4&r/ nJ.+-6_=qVDw.rA,.?~HQ1g:]l :Lbw>2YZ23q]Ux;f3}-$pX' );
define( 'LOGGED_IN_SALT',   'Ai8(spPHc|,[iXd=1gz>qON:Ace|:)[]dj{Fa>b|HpDB1=t?`W,nTLd-UO>W-lmu' );
define( 'NONCE_SALT',       'Td+L<tm>Og1ovoQ&St39A8ET@m#F!?-ce,4EhC<?e`w02y%!e]F%n`!k]wD;UP3N' );

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
