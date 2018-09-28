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
define('DB_NAME', 'ely');

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
define('AUTH_KEY',         '.Ejpo4FS7Z0Q.r01= vPoXe!Z`DUFGk%6`ej>e=4g>LDN(SL5/KGHlEW;=2=(^_w');
define('SECURE_AUTH_KEY',  'H[2b65GFcfp?HopcV7s!3Q9g.,B:JAcDyoxoQ%Yq<4O9k|6I21m} ^O1:]_Ih9Kj');
define('LOGGED_IN_KEY',    'fQ(4&=o~%9kXMD[g}oa  6Z@XAbjnigZLD8@~.,XlIN,5G7]gt-V!.7[+fifn9:g');
define('NONCE_KEY',        'W$;*oo0><*g}Z}mu:zn7_krExDrnN!WcEKE+V.U#SR)H5^{_@eRCnr;YGl=|Z+_$');
define('AUTH_SALT',        'c17IVC{nA%},ZWq!o&bFc*l]ftfNG0Q:}|x_J{RbJxB!6J&8m?n4PlSE_Rn([/4j');
define('SECURE_AUTH_SALT', 'iYoBI< Z&!$:O@Tg8F|JG<+LrEWzcP$H[yNna,:5xMmKToeSJU@[(!&/VJ$;*;#d');
define('LOGGED_IN_SALT',   'vgoE et6>o:LITKHD.1/%1&bG,%u~cA^1Z4M-snOG:mF,z2JuNPu?dpCw4i2f@w&');
define('NONCE_SALT',       'CTVa(|8IHlR3%}9$RIX;mR>D~RA !YX+C+_RZkNuAp|ZyD>tRYRu>%X_VX5 /<n[');

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
