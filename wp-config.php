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
define( 'AUTH_KEY',          '/e,eKUGMfm%ZM:G=[Q~8:;WK%Za+570D+k5@t~RN]Sv{2/`^>?-_kw_]Aeq>;i!K' );
define( 'SECURE_AUTH_KEY',   'L>:kaVw[9uw10vU>orbS =o.xv8u:L$*ho|9m=@3%EQlZjDM2%-j@mA?aaeyrml=' );
define( 'LOGGED_IN_KEY',     '+hZI1+`%!%~R$)H9>=UM4O3ZM |Z j!IoE2h8*Hxmj1/T1n%jl>U4T_SJz`jxNZY' );
define( 'NONCE_KEY',         's|{1xN7o5]vwvsG%F/lHH65&o=;*Lc+TQbcKPl4[ks+2OQB-o@[8:{La[`|^;r o' );
define( 'AUTH_SALT',         'B{^7h>tMQ%t591[p6O-W4mQPe7>/Sq>KD[jRRNSe~asboc{vktZ#[-)^>k_mUun0' );
define( 'SECURE_AUTH_SALT',  '1`6x{AhbBmE/[mofHFd4qYY};~IN|=c{T&rACp5y7%,A**v-[T*?au~af.|}7C/z' );
define( 'LOGGED_IN_SALT',    ')q_Z}SE:: p.uo)rTES^|BQ*?Um=1zRUneAo,5 NfmECqfo5SSqt7@dYJ*Icfc2F' );
define( 'NONCE_SALT',        'Cw5[/`*.Q~W!M8C*jYlWg^7fH5C>v$fy.]B_I6|ASp4a$4iR2O`x$T^2O1{23%e=' );
define( 'WP_CACHE_KEY_SALT', 'su~H)tBrZim-.*4{.l[hm[f|(Z7Y&,}oNYC*zn>wddKX/G,I[B&e*T,mUo^I1s0A' );


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
