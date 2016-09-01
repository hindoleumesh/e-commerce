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
define('DB_NAME', 'ecommerce');

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
define('AUTH_KEY',         '6#TFc!1@A]ny+9sE)83b~~LYuF|1{2yvq/q9a&OTzM%NRAf]-2INI7z#vAZy#0@Y');
define('SECURE_AUTH_KEY',  '4umlcE4DbThM{Xv+K6dbLNmeQn@~eNA:k;Z3w2^LrrYEmGMUTy{w~h9O1HqPUfOv');
define('LOGGED_IN_KEY',    'Q W^4>+gPw;#AQ$tc=[@2u?9</<*{15$$3RFej Fxb4zcvyh&KMeajR6&S81DFTJ');
define('NONCE_KEY',        'Lb>?r}%wYvA_56}t!F33vlnM`6b?il$&HIwwiDl_RB1#_Y4cCPf5_-t~]_A99Jfr');
define('AUTH_SALT',        '9VvgjW,CU2{fvG{__oI5rxwe-yPs_5~CKTUqX$e~;hCLZelu@C|+Wa>M4wd1VK-w');
define('SECURE_AUTH_SALT', '_t_j0_J$_lk/9{$?Q](dEw9>pTX>#g,#M/GzeV}`a#fD~ E/V_Xg9J{$%=:Ls9}c');
define('LOGGED_IN_SALT',   'hNdesQc.+FRPa_:&oP?X_|S76{(ikCTF/Eqc0&Nb!:Ia>k}3>Gh/K%l%i2zslR/L');
define('NONCE_SALT',       'v~dH5+#lhK6?nHBH8sD|w~V3v[&EX-_?@}ml+E*DmAduO(ya w{ Q}2H3B3fQaq^');

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
