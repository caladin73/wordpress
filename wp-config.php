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
define('DB_NAME', 'c1db9');

/** MySQL database username */
define('DB_USER', 'c1dbu1');

/** MySQL database password */
define('DB_PASSWORD', 'Rs0Kv0Imn5');

/** MySQL hostname */
define('DB_HOST', '84.19.166.106');

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
define('AUTH_KEY',         '?)JH6Qh+EQ1%.e]P_o B-C$|L2[q66A5EBkpusvR;Dor &+)qv%ES<xP;&c;%?&d');
define('SECURE_AUTH_KEY',  '$8cj_n,V<>R5GK+Mr(878DQrMUXq!3j*FRy?z*O6.:osTxthF?[uc2x!<-prZB^a');
define('LOGGED_IN_KEY',    '^P=9+o%g{QT&hyhOT[U#  Av)euBFhrrT,r,4TkdX=lz?$lN7rK7meIIZnPP{K(]');
define('NONCE_KEY',        'MxCY~M-b9Cb&5c$`]o<Bab0($bdW.j=[gcJNqFUV,e|Hc{,Xk~o)sJH?N&6)If2-');
define('AUTH_SALT',        'Y>QN_k|ujJY!1B1TnWy*m4)o?1_QxW?TkD!.ZRQEbf2&O?ArC0#g+MHaG7-tsWcb');
define('SECURE_AUTH_SALT', '0]G.Q8qW]+/}nYc8#&1q-L<P:<(,q.5F#F{|;Z2FbMWTjeQ|>Ok4dP2AXFIUU/7r');
define('LOGGED_IN_SALT',   'ZewlS&*~tBMscl6~Xg<=g;`gZ?/t&2B^_*5<)M+AFI,N1M+lYR/!;-J mm%Zh|Sc');
define('NONCE_SALT',       'Hk?&X=o|$d:Ui7bXo{H0deVMqp>jh*dIxa{Cw0-gg>F712ki.+a+GUD3wg!$nsUL');

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
define('WP_DEBUG', true); //sæt den til true, for en fejlmeddelse!

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
