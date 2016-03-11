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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'npc_lounge_wordpress');

/** MySQL database username */
define('DB_USER', 'shirley');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qEx6{=(Kx@wI JEfLR$H5ViO,=AivOv4qA3CQ:.!97B|.$<vpl7L_>}r:7!{:Us|');
define('SECURE_AUTH_KEY',  '[}j).j6J=9_ B^a}DbpGyD(;?#vn@<!]>x~+Hes>R?#U*+IdvFg?yXDl%/bd9ab`');
define('LOGGED_IN_KEY',    'EZq=c-TL%|.bu(adhsw!vq$)L0+t+2iE+MsQ^?fIhj.RhWFa?G~=nb2`V?9?<$>0');
define('NONCE_KEY',        'Y .|Y?x-4X[;|^>h-`w[DX<R4vF;-IGs%_KD( 9Pv%/x-NGlH.c?]>1z/ 1bONT7');
define('AUTH_SALT',        '50{&aCWRLO+||%X($H[LM=}BsT4W(fZZE*||k;Her_3mMcI}QYnk9{P1[?tvnK(U');
define('SECURE_AUTH_SALT', ':54g%QxUxh-_Nc~k%t?N$~^li*$vjzSzd,oRT$(13d%1%F`@D:?PMH^-]EA5!^Jw');
define('LOGGED_IN_SALT',   '6|`w-e%Bp/!-GD$]Q23+<FZjQ $XFzr>(nKx@VuKSqDi(+Tz~qY(2m`GvHr oVl<');
define('NONCE_SALT',       'FH:>F4YMEuleJ]||i]EG_.~29AM4oornwC7RwWahmgn#.2X.i8-Q] l1g?wo#X|q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
