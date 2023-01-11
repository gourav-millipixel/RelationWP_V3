<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'RelationWP_V3' );

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
define( 'AUTH_KEY',         '``?=fc#*#v$x;T)a-j({-;E=ERgZopJEzQ+{j|3g>m>j ==0SwR0b+<pM|zYJ>vJ' );
define( 'SECURE_AUTH_KEY',  '!xCArEdt=oA`2M1NTnmOjdode jBA?*Hdlxe,!xhxsJ,Y`{!&p/h7p$,A~s)d,.=' );
define( 'LOGGED_IN_KEY',    '/ZFYu>Fj8c*YU,*sYgr>^8IeY:ZvS!bTP!tk>{ONc8k^*89H=W1`EFkZ0eD&w++v' );
define( 'NONCE_KEY',        ')T.DK`6!HN4Cm,ttxG+h[HJP6Cl]KyC?HBJLc:DrW%/ps3bA85TH)(W:zziZhpf6' );
define( 'AUTH_SALT',        'sH4X M =5TihU4T^T{(]yQ/FU5/RGV4%z!x@P$6lF9eX3@*aG2OTR!aKgW1RSTUc' );
define( 'SECURE_AUTH_SALT', 'Iyk0$J5^{oPwx-ReeqTN)1_ki}u>}5|d/b!C/L+0yoh-?4Kz`(ZtijwCZQ7u4p^z' );
define( 'LOGGED_IN_SALT',   'KMQVm/{3>34hZSZHht^0H]`0/k2^#=$5t0[+;f/0>r,w/BL]L%r9$ZjdqAmFP)dw' );
define( 'NONCE_SALT',       'zMCe*O(1(A~,cX9agCIe>t?|{_GsZ3,)#_N0kW_8M&qsy]4t{IJVxWzlE#EE2aZ-' );

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
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
