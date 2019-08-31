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
define('DB_NAME', 'friendos_solution');

/** MySQL database username */
define('DB_USER', 'friendos_solu');

/** MySQL database password */
define('DB_PASSWORD', 'information@123');

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
define('AUTH_KEY',         'n+Y5Bm ]bz0Y:lckLvOe@Ut<721_ls{L8#U5,R.%6~K#n4c25j3zv3:vF,x-:5Ha');
define('SECURE_AUTH_KEY',  '0f[hw= U<-BI)9P.I^+y^P{N_kV17!D,7x,l(^&Rc>,.-eLYb6>2prH yy<)42%~');
define('LOGGED_IN_KEY',    'P72~It<cb!.,_EG=LQ6@a%Jr_Ti^{6]1I}Ix,KSM|R1 _+z=W`vfjW;pk%:p)w_%');
define('NONCE_KEY',        '+Hmd*=5eR(,^Xvy{7kz(q..R`R`tY|+6v}/aq.nb=T#IeZ81|GupJj0m^jC|l4h+');
define('AUTH_SALT',        'lqE{f, Qc9F8MJYl(P9{coufh[$dbMZ/iz;)}=iz7G ij|,d,/SjVbK`W;bkoXGV');
define('SECURE_AUTH_SALT', 'tlXQP>B[ jz%!;D`/5/IJ<H3D)}5R&W1a(!8*.iPO-hv>)xjJ/=3~%z<I$_ kE9H');
define('LOGGED_IN_SALT',   ';uO:}{6!:vdF[k%:OBNz69=X8 XGa_yr9i>,3JDFB*|_*Y*:lYYL=0dVmM:jT&Mr');
define('NONCE_SALT',       'Rl?/b+OSqb.,(fm[-O68<MNXx|*:Pd`<5E6t(<n)M|M3`;^M`BLTp]FWc?e>&f[f');

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
