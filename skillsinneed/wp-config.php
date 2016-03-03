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
define('DB_NAME', 'skillsinneed');

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
define('AUTH_KEY',         '>yi+TTiN22rM4--,TIUOY+y]-DQOr{[rVFb+Lxd20fus_uXm]Rs&:>`AC?}>{XDJ');
define('SECURE_AUTH_KEY',  '+?402~{yrxVE/v|u$=Z3 tpb+{Cws+l?Y1=u|W-y<SYkab^|cC%Gw:QO$GJAfSH}');
define('LOGGED_IN_KEY',    ')0<-[5P.B-_HB?&`6cy>{t?6`Se-rV$xY.RLZS@E|[4`ZC*2JWA{_=0xDaaX;GH,');
define('NONCE_KEY',        'R|y-)l|bNPJ3? c#.Am|ri|XW!z]BW}uT<%QG!tg-W^|L+g0.%5PW>0eUw(,N!iL');
define('AUTH_SALT',        ')gWO;|l/TA1E#A2vNXeGhEH9@{jZl6$i,&2V<),|}RO{d;gzg=e_FK$;5Cgi?ZBJ');
define('SECURE_AUTH_SALT', '|+:vvDyeWh19TA`b`6oZg?=4w5^+qvn8q(!M3@a+=+3Ntvy70J@J]6f.sLbj :)t');
define('LOGGED_IN_SALT',   ')SHZW1;zqe`+58G^$qKG]hSK5c<E.@44N{<U#c%2+F}0gI%o@0cA^H_R~IQI-3C;');
define('NONCE_SALT',       'bC}:EaC[6J[L;[0tSn-$w6h7{99Vh|0zSX*g3JqH&@[M|$T?c7_7^c79pCa,1f.w');

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
