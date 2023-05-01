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
define('AUTH_KEY',         '}_}%?<hl*E6~zzS gh+3-5Ob_:KQ}+6ieK>>S}DKuC^bp+3}Xao^Mga6&:sxV=Zi');
define('SECURE_AUTH_KEY',  'Ys<&,=uX>:LFJi^wlNzQ|K@rzB!su=&(l8)t[6iZAU6c14K!$OW71jW0mO^&~/Nx');
define('LOGGED_IN_KEY',    'CfOxJIU#tKu&q=<~j4Ft/Zs#g`MnCcBpNE60)Z]trvyGaAcX*e0DY;bQCn7y^PV1');
define('NONCE_KEY',        '7<57xZ];/qCnPZVO`bT#9x=sv*:yP:0!*qy1.l!|A*IlHB:2yil;yR$X~$O+,JjR');
define('AUTH_SALT',        '[asUVxxxQr(YQ(v~|!+oKr!Qp8R,3.2@^Z1s[W`F.H;_]bx3@_:M.Wdp5a2n<q!G');
define('SECURE_AUTH_SALT', 'T6@zG_WCU]_[CmqMTl9|C))Qj88Q;pI:xNdEwle+zw]To n*:n5=-c&8)a%2e~BE');
define('LOGGED_IN_SALT',   'K0>cep7qg|iF065j?vL$9X843TMn2qxw)Ro>BO8=U)g1~x-;:/a:H#K8-a/Jc6]J');
define('NONCE_SALT',       ')S4if)f|M$y[:Mo>^~5.[G(#|VOy^sn.%RCa-|{CDlL^r<U6fZy_80Gpggdl^kMg');

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
