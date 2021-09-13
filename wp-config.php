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
define( 'DB_NAME', 'htmltowp' );

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
define( 'AUTH_KEY',         'Qtwrosa%3w}ReI#rZ`Xm57A+qyM6(bV{@B;iL-T*nrmSS.UWjYxl:{%X|m.MBGk^' );
define( 'SECURE_AUTH_KEY',  '!zb&h{-TIG&caig,WX*{FU5p~( -50aV@|%)ymCxbGR3!+&^Wld<yv/$D2j,e:B[' );
define( 'LOGGED_IN_KEY',    'Qr07{uuHsg=YVggR.1udjco4a59@$1F@,@[2eWCfjVVH;yqyVAD&X2}z&VzR^8Gv' );
define( 'NONCE_KEY',        'VY}=nEc402+prB]L!]6(l3y!(!4YZaV?$j}][|MTF$>SB8U`2($WW7?lzL?@^?%F' );
define( 'AUTH_SALT',        'mN+8yt#Ju],6PHxx}UKK1=e{ZhwWPQwBgd%1*+zEA15tJ)/kJuC*3Roe>4oO$c.2' );
define( 'SECURE_AUTH_SALT', 'c_Tb#EK|Ri!/gDB0/Fa@}!|ra2hxWs5#=aW-b(TPj&az>Bz4a;6clWeXI]lgo;`L' );
define( 'LOGGED_IN_SALT',   'JsOUM .dal;Po}Z(O|bo+dQwVjru3ZL1: .gl+r3:uFJ`M%4c)eZ;OUg0:|Qgr7P' );
define( 'NONCE_SALT',       '[})+h+6O$N;6~bD=!`I$K=b4s=!D+c)A-bLD0tg%h,el#t?51KmMq[GWU^L4k2 x' );

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
