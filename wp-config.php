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
define( 'DB_NAME', 'home_db' );

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
define( 'AUTH_KEY',         ',hr?$nIiF1=p!doEB&7$J~,?7)^XI}~O,!z(W;EiQLU)2/o@{>$CutM9_9K=du9E' );
define( 'SECURE_AUTH_KEY',  'ti3!qhbq8Q[]t(+aLHip79F%-[Tp::*QZ+4`N/3K87o%`jK3XG9?1N!+t&eNIo+U' );
define( 'LOGGED_IN_KEY',    'tE7Y2U#^gf`t:X2M*<d)NEo`WGo)u?}+>zcVh@ Xw|[4Q`#yyt7-o6FG5]_iILeB' );
define( 'NONCE_KEY',        'tj8{,fVR`;vjdl#[#^kg:R]fPPsxSa_~BCM0E*sgt{zlj#>U*sm7*[~k&K$SJYW_' );
define( 'AUTH_SALT',        'Key7eu{GV<yOHOp_J$5*`6}}U~rfZ`P6!c/?R9zl-x+gP)SGTJ[|;tfI,y^q~dz~' );
define( 'SECURE_AUTH_SALT', 'Nt~FB)mz@s=b7bvF*NWVA/3+bCXZUwkXv/Wj4IS(uen+>vQ|1mLNdRs~DRCE96iv' );
define( 'LOGGED_IN_SALT',   'E! }gCKl0+&K2V![gpH7;`bJoMVz.07Px!?8D[:wT2^qlM1n%aS]oca<.6ej69z[' );
define( 'NONCE_SALT',       '/APPU5%sB7.:dx` z6D/%DaZlt%Nd6QZ*>[a KnAa#]svq7 cD}z7vGdrJ@N7Scq' );

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
