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
define('AUTH_KEY',         'FBJb&X/gQAf;4Fbtx;7t R5!H.,@>~DMrQMwHiq! o@%^AJe BsbG!p5tMN}Aun|');
define('SECURE_AUTH_KEY',  'WsG#U~~h$J&RL[;92^{*8N!ant>gIS6*g)CT>AYU}uRYOH5{@3QspReE,!NIN<|c');
define('LOGGED_IN_KEY',    '`)+l[=@8WJv&%vuTKH/=.1!,([;Q>_~4j&(cc-vE{,oVNNTVbwtO[Jjg4xH1gd,x');
define('NONCE_KEY',        ';5SUr(c`],/;e-+qXtC]nG!)g)k|GR1thIhX.GZfq}Go4T(L^*PYS^tz;]j<XM0=');
define('AUTH_SALT',        'r$xXK0RbX=u$42?_TT,=7Ba64k>3X*H>>(+njsFM8^_c<y8@BDQDh`k2JQ3EV%Yb');
define('SECURE_AUTH_SALT', ']xt)d|XZD) o4f3maHMc***5TrLRF`mgRrI5,:0UXsz`s:Qk1NlKn]lCy;e:O!ts');
define('LOGGED_IN_SALT',   '5ze1j0W(b 8Y9u7FVS7Xbm>%J&=}UWS?g&_KCCN62kh}ac;MDQImFv%n5W5yDIB{');
define('NONCE_SALT',       'E1xL>!/)_,[>:Lf)+j4QBP7IH:`RM,s?0@PFIHy0q.{XPCuIz7T9DR[&8+x) XBY');

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
