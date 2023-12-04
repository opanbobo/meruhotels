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
define( 'DB_NAME', 'meruhotels' );

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
define( 'AUTH_KEY',         'JVz}*os2H#m+y?5I.AVCuf[a%8Z sFl?r0KL}^8)BMub(9{)}P5N7[Zd MJuU6,V' );
define( 'SECURE_AUTH_KEY',  'ysU.#4p,E2uGbdiCb5{-x)$+!Cm:>CMZ./GUMH&pXx7NsUu1~tp!q- Jw;FaR%hs' );
define( 'LOGGED_IN_KEY',    '$X0000Y8d4_GTWS.Y*:EHZlU6K,S#o]7C|ht *%!4+9I$L{jbjr$`% c[s~AujcO' );
define( 'NONCE_KEY',        'ji&4,IPpSw4$34IuW}5^F0l8%R)q;=Bl:Z]n#?h>%#KutuU~ K7}50Md^*rt&/b8' );
define( 'AUTH_SALT',        'd9n:uV<^3MaiwMQ:!8FrE,2>>oE!Qj5L?~Dc3a9G+1>dAgJxGr+QpD[+QC=llDV+' );
define( 'SECURE_AUTH_SALT', '$}dT%?fwHasKG%5<a$yX4l0G6`*/tcLK32bw%#X1`Iz~tV4s|k^1e+9~c#6{ K$P' );
define( 'LOGGED_IN_SALT',   '#Oi2$9K>z#PYpJ3-VAr#G;|le##0_Wa{1<9fLzRA^u)_$!`&<dn_2lzVf)!?;P=N' );
define( 'NONCE_SALT',       'a69S<vje2suwa:Ib5%8,hNg~de6d-:ep f4P49uuJ0jCDZ&++d{ x!z&v1[P|bKS' );

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
