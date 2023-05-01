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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'sx*j(L&KLEAnN#k92O^B2x_5p3E{7JkSsB]a:rs<Xqt!zEYN&4x/,Qp/~BS xqS?');
define('SECURE_AUTH_KEY',  '6zT[1J!_03F<rsmYqf}OS$%r6a3fGj4B1Jv QGyj<F4n`Y@<W6Z?-Y?~vpU-ZBEX');
define('LOGGED_IN_KEY',    '>&j(CC7knBP1H8?YH@>@DOj0Q9|g&H;=oJ!mIOO;s:):MlnBfh/#4;TPKw%j*({e');
define('NONCE_KEY',        '^b?7iA-dTyAT6izm]1NNCg41upJJ<Ca8/Oifgwy1K+uL@pQ%hKec@W 7[jc<{Uog');
define('AUTH_SALT',        'BjD:}#)~lert,i{pi*3+,|/pp[?hw:KKQbI>tG=WKuse4et 56w<Tk>pd|2zZ[%]');
define('SECURE_AUTH_SALT', '!,gy6Z92E98-:&<W-Ob]:Ej3/6INdYdE]f:.rT{%#]Uvhm+ddAoW G~>qXWhdZ*6');
define('LOGGED_IN_SALT',   'Eg]&S;&/7Tj:{np{R-3ZUse,fdtixcK%}{ |`OpKp1I}T+|^0mYkq*Hj2D4/9v9{');
define('NONCE_SALT',       'MoD/PxDJ-pK5=@<,p)_,!7IWSRB]~4M=eH:yC]cU9h!C?i4SO*I;fd@rhRDYQto%');

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
