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
define('AUTH_KEY',         '/-Sh=SV&Hs_<+6]J4rHz!Aj-jG@:eJ82d1q_5`s%vV4ym=y#8r&~qD%1TyO7|4+k');
define('SECURE_AUTH_KEY',  '<ozF.?e@J|Ms1@E)-vmXF^#_JAAG]SX%Qo[?P9}in!:AGGG5nmi=+.7< mR[ubri');
define('LOGGED_IN_KEY',    'S38oAe]Um>}:!9=PDrju6 D-vd(mJ&CZs]n2./L5L1b!d}SDniIM}[bHI`Fml(}|');
define('NONCE_KEY',        'bZpVS80yo U{OOe[N)q9<kXq-3Tp?|BNv);{y$PzX.B6`d`zO~<:y(L&n0TaK*lm');
define('AUTH_SALT',        'WBt;yP})7clz+++P|8Xyp3qX TZ??kR*$wpDn0sr^-wDl5S;unEjyp.lEp`RVLYL');
define('SECURE_AUTH_SALT', 'g;-9Q@xm7rS65>U?wq){=j~+1Fx|9A7A|&lU0Y9F&<Jx<lh|7*#F+:w2m0R$i.H|');
define('LOGGED_IN_SALT',   'IW;1R[|%PjdB I4twa CBcg2`!vTGl~]aea-{7D/|Kj-A<Q.ordDLhWE9)T&!UY]');
define('NONCE_SALT',       'L*nOKSg?-LYS?Hjfp|egS->7,3-+~F?=k+DzO4nwC9!_Ow8HUD!ef&u>B+le-Z+-');

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
