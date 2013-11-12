<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'carrygently');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3brpad |) Ul2rF(=[W2++FP_qvJ|/9:}L3eXyP8s#^650o~W6O=EZL~M+VlcEZA');
define('SECURE_AUTH_KEY',  'lV{y@(r,AR(qz/0;$e]=cr4.[6FUF37&-nU{_Y3s[7VP]W:/1/H_OV{|wac.2?2f');
define('LOGGED_IN_KEY',    'D>7K>ma+{h[auK|Xo+rq+.M+C,Igo&ZHi~#(iZ:!JIPCHDFxX|CXaY#+WDu*Mlks');
define('NONCE_KEY',        'ex:K|p$c-&gtP=r:;!zRp)D#gM>n>Rx42l!:M0Wj.b+Efa{85S/~y>OcB;IAmz]$');
define('AUTH_SALT',        '$Etry*rW4Tas3Ni0ey-r55N*3%P)GU`$=9W4nuad/`+V1T3>X+Mo93Xzzee>*Mdi');
define('SECURE_AUTH_SALT', '5wG/2[%xGc2%w. ]_=HW1--wM&.u@()/*-/EvWp!:QAT*]Q<w!~urU%{3ubd%wl`');
define('LOGGED_IN_SALT',   '!,h z%g2NZ-?*3{uW4+5Ej@t!|/yC`1_O<6un7t9pw?DVF/lM{CG0vmnr9JA#CS[');
define('NONCE_SALT',       '@|+=vG&F6mX.(6}F8.&&ov`tlC6Y+LMycf[;1-&5xKJQ|R0)&@L-5B@XfC-{}#=_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
