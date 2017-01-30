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
define('DB_PASSWORD', 'u59ecul3di');

/** MySQL hostname */
define('DB_HOST', '54.244.183.210');

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
define('AUTH_KEY',         'hK7}&`sFzO=kpRs}xjIfzzDeU_Y?U[C6SWB. wmL=tnRmU=A9Iw((NakNhazKIe6');
define('SECURE_AUTH_KEY',  '*ZNlYi18<sU|_hCAV +#FxN=-n,b4VT:S[?:dj:|lsLR$}A3@!s(7P6g_as<*dhz');
define('LOGGED_IN_KEY',    'Cq57`Z|3#Fw.03|+TN9R=(cjZAP{(6}0}q2cz*<J$Y*$@.=B)&ZRG3!w11zzJ-!:');
define('NONCE_KEY',        '-!*G~zg#Ok-SF%{rxp6AFqn5@ZO HOYVC`/tqKDqc&uQ7~wjx<ZF#,lxg-5dbU{0');
define('AUTH_SALT',        ':+k3m[<3]Iitm8L(5QZVIm8ltv8/Qzu5.E3;=q]f~3H=v%_%4az[cqSK>mHu,a2R');
define('SECURE_AUTH_SALT', '@5kCG*Xz,h/+mK9wZ{RZNu;_X/LGH5h)gz`uS4#T8<%jpLRe|J@9[)n8R9!IJsPP');
define('LOGGED_IN_SALT',   '$-GeI1J9MC&z?zM*hJEVQ{3U45Y3r*=Zcy|~[);R%`A4W0.R$7;20~N2bN b8@L]');
define('NONCE_SALT',       '{9|w(281y,3nXrzjVnH!jTO4#2e1y`IT80,Zh@<B:NmFH#nDb?wSi-9R$-7N1EsU');

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
