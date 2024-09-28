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
define( 'DB_NAME', 'Staging' );

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
define( 'AUTH_KEY',         'BX5ujU*JG;k6;tuYb30z~SfH&w`in26gJ^oI)y%8-Jxq9Z^lo`}UWX1?f87Um8<H' );
define( 'SECURE_AUTH_KEY',  'K`)@uTgJgj]21#zTJ.1)WKbU6tXQvTBGgB4VqQR_aO$^T6zL|;c6wIV~_dT,s^F`' );
define( 'LOGGED_IN_KEY',    '8[pSsQ!VO#K&8>qH`Nbu&sJkk`-s6U0r+,nd+{)]+:4ySk~sf46hK6qRti>rnB/7' );
define( 'NONCE_KEY',        'VDiI^WaqlmZ*:i6g2fu@C7*$Mg8_#d<U{Nm@Ld-.Ipgz}6vy[olRI.WP_o>;>X59' );
define( 'AUTH_SALT',        'M2]sY#Pb#=RO:S{Y#kXXJwB-7g4wE__t?c-m(%72De`@RB=q;di,MFKsHX=)#s[e' );
define( 'SECURE_AUTH_SALT', 'c]bM``|?yA8T;GfqwRBr4{{(jlx0WFI0h?r/f_>D;.ltQo3Qz?Lge-VI.2vqOdCN' );
define( 'LOGGED_IN_SALT',   'Shsc(7-mShGc9E}2uQ31[n28Dl=~|?Co.x?M[0(crkH,(!Opd3e}b2wh!AKNVtsF' );
define( 'NONCE_SALT',       'zG6^f5E?Eu&iuK+*|B4(15E/!RLuY-c`on``+5 +u519LJi^A+/2KkibQT@NG(V;' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
