<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'home' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wwP7rJ9=~mS206e(E1T~nf)vQppweIRO:euS7se1J5c/I,DK>1g23prkr,$@t@ZI' );
define( 'SECURE_AUTH_KEY',  'fJ<kz4P_>.?j]y8tXSeV4XesZYDj|&[n!Xz#=>a@H$f@esaukY`X7mz/yPqoO;U ' );
define( 'LOGGED_IN_KEY',    't/3L3@$%Rp6^=acSC`PCw9dAHt*u|V. xQ*S1c}(J]+8LZU`3<R)z>~oz!RxFSum' );
define( 'NONCE_KEY',        'wH})|`jhuvEJ^4 .=MHm!7t+SF-yNxZwHj90Q]-#28#Uf%&pLR+>+N618N$<x{*0' );
define( 'AUTH_SALT',        'z$8-M,Di_08@g|GOK:!DgK=1@^-p7]{0]B.+KqT@kUt,A6bd5A@#URAu]R<H]XhW' );
define( 'SECURE_AUTH_SALT', 'dre.&)N4g#CHi}`6R B,o>9Oh42j{ .+[x3uge5Sh&5oZM~SzHKQmG1w$Au@FykX' );
define( 'LOGGED_IN_SALT',   'vd)-w{/ZgS+SLGIA7S(AVPHKIh=%y1 r&c~IT0YOSd%!M=XT#H$%gihyyO!!>82=' );
define( 'NONCE_SALT',       '}S^^={<JOigC krB>KPh+~|6ZIiaTgwR7_V=`b<VK})h.2dq,;,)Age~s.6@C/g.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
