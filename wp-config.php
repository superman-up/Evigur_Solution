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
define( 'DB_NAME', 'my_project' );

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
define( 'AUTH_KEY',         '`W?)JdYv9f_?*/*H;95RAKS~c#{P#18R^WeT5WM?hN;H%(RdS0Y]|d<sdFj#~eYG' );
define( 'SECURE_AUTH_KEY',  '36Xh0y>)Q#<6FZ}kX12.#`ZT4vC`]?CdjvO =TbL.Z/8PgD].-lPZ -N~UqKVG%!' );
define( 'LOGGED_IN_KEY',    '@rb%Z8<s~I{76OipZkiBjDE-)hP%[i#[K6d+Ni9YXpDy<th;RI0tT+PfKoQV^mvZ' );
define( 'NONCE_KEY',        '21~y<H]gSXiC@!F_2k1SmG/ORdnZl[}bV^;D 1c S.v?H6!rh~#WeaAItQ4km:R.' );
define( 'AUTH_SALT',        'S8Yi7vUc`wthqqBdkZgnb.sL].1GJG$?d2?gF{8b!xNG;-e&3bnq$C9()mjZv&{1' );
define( 'SECURE_AUTH_SALT', 'E!8o@*oXom|K4qFb(h |$w}yMMo3H!6W]M~3/k+q7IFU$t`Y:p=ons7jEaTrzAm6' );
define( 'LOGGED_IN_SALT',   'w>lH^)MxJIa<|<N,l;`nBH&T_L(L8AVL?1 }^(~yyhz_RIFCB(AU^h4CrSIfyQht' );
define( 'NONCE_SALT',       'N%9(o!8.V,3<z*>usOHHeDy}|[!6Wm3=IQgf2*X6}@a&(HB`EwO:yh3}P)CIRlgs' );

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
