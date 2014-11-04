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
define('DB_NAME', 'mears_db');

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
define('AUTH_KEY',         'oi4Zih4wx=PY8DugfsM/XF{j6UD|O-m-,>_&x.+mJvJ|HdU_/{PwiMfQPQS2bl7+');
define('SECURE_AUTH_KEY',  ';M0#X.M>dk${*;A.qxnmRM%B#@~Sm2!bTEKV,e^G-j)~<S;qV?rH/{ %oK-{!&4h');
define('LOGGED_IN_KEY',    '2akBSr,-uTb|>^8x+4W+K>81.<o|&:-C5$B+osy2T)9>50^il8-FFB^@!m]w15vX');
define('NONCE_KEY',        'w|E@{Yp<YE$9%nCd>$(YeV!BzoH)+U;+{-@!xZze9m:[B>k.7B[ix%x.2U;tE>j`');
define('AUTH_SALT',        ',t9zxCtNwuAuWbE|Z4K5HW:F`Dp_sC!.X-74J))GA_d|`s|;`!KT=,i`qg4SAM&(');
define('SECURE_AUTH_SALT', '{&Vhu+mF-R[sCTTcQ?=(,W!`)b*bj|n|Or5`m +OSn8_N=AN3QJZe&+@9n7kCH.]');
define('LOGGED_IN_SALT',   'PU %e*NN@/iBk+7iEW~-4{(+^!LYsL:DaCNw x|n},OYVX#M4&7,byw&s?Dd)c$V');
define('NONCE_SALT',       '-lrD|VS)2+0^]KD;PnC|k,D8*W%StFR,+s=GW;9Avyo:2-qUIPq}mJt(/H)Bhw,@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
