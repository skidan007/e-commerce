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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          ' G EZ[YfTwU:G>geaoc7;MYVxL)m9 LmRZ*XlO>(D,4{K$6=VjLumw.u%WTm%!?N' );
define( 'SECURE_AUTH_KEY',   'SsPY,;jZ:JEv8vG{w.vBp*e;W;zi!Tg]9FCA&=kPP]#?a(r$LdW!?s1cLPu:Ku1k' );
define( 'LOGGED_IN_KEY',     'Nbw&3XJCta76;q2m;]ihQ-cZ|3WOMV&~d7*=J0IS:%Yz=E}oK{41IKqFyoz&vwHZ' );
define( 'NONCE_KEY',         'O-E^1eCp8b5yW]U8GK&_}I|&3<t1oI$JV26/Dq_5CY.:=&$N!>5bZl(I1RN.S%i?' );
define( 'AUTH_SALT',         'mh^ ^?1uA4d4i?Om2qP0[~Pu.PyjXEpAkqo/axnL{QPDKYKoF~Y<!*/yx,6_Jb2O' );
define( 'SECURE_AUTH_SALT',  'H}Xyb;7-gEKx}7ygYb4 Pr|N!(BGtg:Sxv3&-As*i59PLWcn1ETro*e~S3%7RRS/' );
define( 'LOGGED_IN_SALT',    'GoKY=Od4[zQuD2IHNf]<wR!K?y<tI*tHpXA1{W3I_[z%H/P4ZOfR|F0=,v^r4sM}' );
define( 'NONCE_SALT',        'sw={;lsM0)u^CCRDSt!GW^%IzIV,rfSn5@)CbC?Wz8GHRzP$DYNM4}K6.Gkk[]/&' );
define( 'WP_CACHE_KEY_SALT', 'm/5u0(eZ<>(*_!xzT17}b`XYhC/T,i.U3KZG(xdD_fg%{_[J0S21dLUDxH9SDr`.' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
