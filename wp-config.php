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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'root');



// /** MySQL database password */
// define('DB_PASSWORD', 'root');


/** MySQL database password */
define('DB_PASSWORD', '!e_xb#Z`82QR7E>T');







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
define('AUTH_KEY',         '<wi1#*&U__k{488:dRc{xNo?v|a{?_T~(v$;H;Ag|tAN3#QI`]O_x[D3wET|JoO:');
define('SECURE_AUTH_KEY',  'U5de-zcTX0?6h^wH0{P0UZR5y;`}1}w+=Ml6d_,AUSrT:70*d_ho)IcRNZEiva7 ');
define('LOGGED_IN_KEY',    'Ut75%$FW!qyv?G<f/?+Sjs+Mz-B8mXT#[Vb:u;v=E)wagb8T4E_[M`$dD3Y~qCmp');
define('NONCE_KEY',        'ws#RP07s7}dnKe>x1H)cvl?{}VU2+r`?r_!h5oTuEJ<xNl*x&Kj)#FZ}d|]Picfg');
define('AUTH_SALT',        'l:C#*/yw=CB{_8}-TMlO:YVR{e= hPV+qKRv(-;([9LLB]Tq*,#JT2>gYnHr:]<}');
define('SECURE_AUTH_SALT', 'UX3Q1,.m;Yrko5|FSwrCKBL*CW ,HmO|>hZ eLu68O8i(j(qC)BytAZ=cKsEjDka');
define('LOGGED_IN_SALT',   'blE)c t XxBK,:W3g9q#8zosUz`j>]&=xw`Y| k#T#8~B$8Eq+iM8~3i7$eJQos}');
define('NONCE_SALT',       '[8ZFy@gakM*x=Zr8%/jiVclp{?Wz7PO/abFPA$,W`9e5iOvXY%|Qt6Cm[qk9n`w1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bc_';

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
