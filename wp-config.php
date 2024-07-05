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
define( 'DB_NAME', 'wp_zak' );

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
define( 'AUTH_KEY',         'YbYv`}Q,U5p,MPW=,ok,[Ag?~KC!G1$qH_4>.@kUgkBF9p(dcir&#3>Y^Az?5Xd[' );
define( 'SECURE_AUTH_KEY',  '2,+Nw|n_1xb3:QIna/eW4DB*=h,~cLnY&H/45!uU_{K;PTt!Ilg[80/khHx~&8$c' );
define( 'LOGGED_IN_KEY',    ' 5K fmaq#y91R~wew;/ucv|fG^L:z4RoI$ar oRNIr049VvLqI45ooI-rpSQKGop' );
define( 'NONCE_KEY',        'ka1$Q}f,^>+a5E}Oaz!WKYbE+P-n,UG7Gqv_Z?n)H[%CAFy<v3mIHRKBB|U6]P|j' );
define( 'AUTH_SALT',        ',$WSnlZZB=EN`Nb|nV1sD%n~zjNV?r8?|(3Tis_SP)JbFL;Na!5!8GPf /8$R<5.' );
define( 'SECURE_AUTH_SALT', ')iMSmcWJ,f(JOrF!Iy!Fi ^]0vaEg3?o8a5:Rxp$Ue<z/*u~19$=-C[^ZPYCSfTv' );
define( 'LOGGED_IN_SALT',   '4#$,a_&h1AsJ3Jnce9&_r#O;UoG G*7Krx$W3yC2u@0Ly#3QRihWgNDyXH8h?l7C' );
define( 'NONCE_SALT',       'vSyCPe@a<v~6aoZ8` &2&C!!)PSX^x-Ip=>~M:+jh{X@}75_;.>wt*:;Ghx9=K%g' );

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
