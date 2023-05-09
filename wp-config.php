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
define( 'DB_NAME', 'dittito' );

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
define( 'AUTH_KEY',         'MQeV*a#^OC/c< ;$#i8[a=:KoZN1xpMC[RfsA%N?B]BHLxFr];Iy<=NG(,|~<u!-' );
define( 'SECURE_AUTH_KEY',  '}&~g`Kt~9~IJ:WKEavxd+3?}@d0,_G#1A6jw 7S{l|<(zb_z#6mi0ABd/eiz[x U' );
define( 'LOGGED_IN_KEY',    ';E_W7YhMnH8Hb(cy+[=h+8es|6gh=1&Q67`S&5.`L/jQuyXVX7^u{f5^h$HIM3;B' );
define( 'NONCE_KEY',        'M,/Y[.CS._]tyqETb+I^2Ald=H#T[<Z<C<z*nN-|kdp*>>ieS8N%tWQ:6{n~6/q|' );
define( 'AUTH_SALT',        '1)(]BoFf*`bv7NcL5S ^I*3JkgH[x2C}gS%  T-ruVo&575-L3 iE1Xj}AMre%;;' );
define( 'SECURE_AUTH_SALT', '6,]ZHk[3^{%M:A!wpO@4l#vn2mOn@rva:U@gme|M_a_a`_.t_JgbvWPh7O[&8<]|' );
define( 'LOGGED_IN_SALT',   'a+lHhBw3W@u`PFY={^?0i_5YL@#;faZN^IN+i)fMrb)q0#!BJKh13&i#~L>p*l%m' );
define( 'NONCE_SALT',       'NbEv.pr2.FP%3i{3v*gxwX;>oGs-<<xIAujp(~Z}R}3Z@6k9eG:`{*+3P6~5@!K/' );

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
