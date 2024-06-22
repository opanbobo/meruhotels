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
define( 'DB_NAME', 'u963765151_merulocal' );

/** Database username */
define( 'DB_USER', 'u963765151_merulocal' );

/** Database password */
define( 'DB_PASSWORD', 'meru123@B3Rakkk' );

/** Database hostname */
define( 'DB_HOST', '153.92.15.5' );

// define( 'DB_NAME', 'meruhotels' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', '' );
// define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'rK#Qo:z{ML::U-hOai<7+CmCtZS:In/;@jNA;i8b*/5W$_+I+x9%ypBW&u.$>l;&');
define('SECURE_AUTH_KEY',  '.U,bk#MYJqd7;#1l]l9x++MPet02Gk]jQ-NkCJY-#P%=7*XzPjWzk>it@j=98u@D');
define('LOGGED_IN_KEY',    '|0sv<&q*lxn[lxc8S{xk{niZ{>z-figgCsS=c{(0fMST}{=S<[|5d{<{Q=jD/aiT');
define('NONCE_KEY',        'M W.2^]*yq%|g+*#bdRz|T8Z`5Nbq6(7(t-5o}Z`Hu=;8TE!|yXj#hT:/JW9cY(k');
define('AUTH_SALT',        'ZjU^9|o[ $Exa+-;PE06Msl&!EF&-ZbC){sn! Nf[#Bh5*SnM(HWJ5q=#3u*_8Yt');
define('SECURE_AUTH_SALT', '~e?=lEv7,Rm1RW}JWjk%@+`o<TaJ,8 ^:|h$EC{DmA~t $84P{_I(_K|99+|3|k6');
define('LOGGED_IN_SALT',   '6<vo)h._a7NO+0!`$f}Xa[6N=wDIl+D.gK<*Q]T7HHGuX[X(;7CuJFrywD=Qr:DA');
define('NONCE_SALT',       'w-n+)o-^2B*/R&rm5fNMTGg~uJWl< m$n4N=@1Pj+DZ73<AOu#{e*<S-3_L=>V+A');

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

define('DISALLOW_FILE_EDIT', true);
