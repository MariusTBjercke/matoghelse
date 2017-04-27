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
define('DB_NAME', 'matoghelse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '20C71900a920C');

/** MySQL hostname */
define('DB_HOST', 'home.bjerckemedia.no');

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
define('AUTH_KEY',         'g/k#H@NJ+;u7zk ZM>Wg(Wa9FjYjpwKko` ;_{r/`?uK8B%J7S-wZ{^VdIw2?=H&');
define('SECURE_AUTH_KEY',  'aQK} `(YaW,$4i;=lbpI|nuCJ]KPi]?.3wv<iQtgN~F6Hv+8bVn`(K7$zn4E:Xal');
define('LOGGED_IN_KEY',    'T1$IL%AASEihZVhn9}nSIspT]de3<8(<9>ycK^}T,vT/a9|fsEI)~i4&kTUbwt=E');
define('NONCE_KEY',        '5C%;nj@[0,rI>UA$v`C{gBo9k)[_Alp%aP?tAxAOl&.ZQ = rZiaj`2 *Sz3kt-+');
define('AUTH_SALT',        'bYjxi c*:b|cjGLf;?VZW1-^vc>L>CykfG7m|mH<{j#XyhCWjue*L)*M%l3]]ChS');
define('SECURE_AUTH_SALT', '[kl3) ZK5g#)Ne@[._e7n<uP^=]@ryALQ8dnE(}f|WGlgA/-X(h!&-TXzm2<[=w)');
define('LOGGED_IN_SALT',   'cyM7-OX?]o6C%Nz1vJ9S4IK>H 4,REim%$IzXXG`-,Um3O9O*XeIP)#O/U9/4;Pl');
define('NONCE_SALT',       'x&x(]q7tjOu;U23%ZER%7]B!A5A$X~qmijJ(Jf,k*7l`I:*Mo]s u#|v2{B-Nd|J');

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
