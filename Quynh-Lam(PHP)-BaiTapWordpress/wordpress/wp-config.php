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
define( 'DB_NAME', 'mywp' );

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
define( 'AUTH_KEY',         '4r`D5FqvRDAuPD:,WHS#_l#b+)7fE&!at?m?Cnh?`@jRbJ4z4.kf,3|UgU%ibjv:' );
define( 'SECURE_AUTH_KEY',  '-8CAtpo4jjupI@%aBJuiAu7Z(t-DhS.nMSU3;1-JK9D,}h::ae}~9l}H+->jk}|~' );
define( 'LOGGED_IN_KEY',    'LkVdQLsV9Z~zwXYpN<XFPph-/BW95 h;mN[hj|F+Dmp~0IRYKWh~quRp!hKOE%=K' );
define( 'NONCE_KEY',        'd2]<BO@]MHr>/9zn@x;n%HkW4$w@`CQ~(fzMw{J?0i#2CKZBnZ70%l`zUEG<wynS' );
define( 'AUTH_SALT',        '4WH<v6&8yWq|}`ZnkM/?i@i&!V.&C(_Flz:L7cX4d?v*H:-L:+shrrU%W0%yX8LU' );
define( 'SECURE_AUTH_SALT', 'uDy0Wqfk6MjK]0+9rOL5;CZ+$!((nNgLnyxJqYP#3SD@K&k AX5:2=j^QBqJ@jns' );
define( 'LOGGED_IN_SALT',   '?*hW}Q1$8Azh`%~DIT*nc;A?~E%MkxNJ?0CqX>GuP3xvNn A/=Cp5wTvwC[J,7n!' );
define( 'NONCE_SALT',       '=f-<$6,M3<Y=2fx*xkhu7,7m00f9o#{rcr$9VnL`*b8h);ii sXCJ1qscby@`8$6' );

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
