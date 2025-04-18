<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'IF)NZGP)@724>Z[Z!|QR:2,p]NG#|!Cxrz$lmirW@/tl%32O[D$3!q[pvV<<Jb5r' );
define( 'SECURE_AUTH_KEY',  'CJU^ux1vgH`.FH& 0z=sKd([$/M]ck&`F`+(Lw:zYvcyjKyn9G4}yhk-xP$b#K<:' );
define( 'LOGGED_IN_KEY',    '1%rHQ;tV?Dp,qy$zMu2nA7}0J*@c5F&/E#M:SE)lsbwSaUKGuv/(2&>5Lc`J$[$ ' );
define( 'NONCE_KEY',        '?atFgx:6v1:UNKaH8}.b~u@D8y6X7^:cn<GALuoYxcd.@~ZoCnMIY=<#.MF5TJt2' );
define( 'AUTH_SALT',        's}6+)?ma|w,6[ff%rSSoaP$lYg1QYW.G|3h)~0ybJy8:KA]*.xt!I~E%E GTb!7<' );
define( 'SECURE_AUTH_SALT', 'S])05AnR=%7fGE;#;ZyD mZ!@`6lti:;d{w:ON%VT~v+-)E`Gw!%WlCB|#gl_G8 ' );
define( 'LOGGED_IN_SALT',   'K*PP`E$rnV/r#6$DWkliD!?CGJk:&z!R^7P64R,X7._mLSlU$^ Bz|6+#gIMwJ(S' );
define( 'NONCE_SALT',       'l)E/*T`(d^RmEf)G 8pf-_6?#cej62t?%<$Yy+9ie$Ma%0$e<B0i.g)N-f& x2N*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/web/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
