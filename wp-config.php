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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'bjw9j6W4w) 3-o<cig)*%bS <.8L4k#azU;[>?p:*hz^Lp&_@~LLP?z(%vxeikkc');
define('SECURE_AUTH_KEY',  'HVjQkdM8H7$h7Dh@fX`FdNdqloT[kKQ<L.&ZZjV:$s8~WU^Q@:.:]W.fJMayR7Z)');
define('LOGGED_IN_KEY',    'IU:Bh2Vk+1->`K75 ,V4q[PId<}E>+xb!h5&L^.!}Qn#1F;%AMax~aN|[07Y,_#}');
define('NONCE_KEY',        'V<RgA5JT]q*kG?oN#MPB}HJ5WwEZk??I1QP~.%e[DNFPte&Z&#aJlY?$XZ?M<m]u');
define('AUTH_SALT',        'P*nG]Me5@t?yf#$`oxNH&-3RaacMFh@ TyG;<EzH4L?f}k #4n-xnPge>~> |v2`');
define('SECURE_AUTH_SALT', 'BFlh(,kME)DD`on+;ctGEl]I~w>s/sJW9i<GCPjj;g0,qmdtk:]+ly0(mlK~zmXa');
define('LOGGED_IN_SALT',   'k8gF;rBS9($A(61lkuN}_rNQ)5R`ok<B3u^YK]X8-!T:4sC~YoTh{-a3Ok!pR*In');
define('NONCE_SALT',       'M?N/(v;qzA+5fzxz$Zm!%m,@5GtYVML)~g/:UvwZ=-<$4SU4k@iyV>b.{=p_<?a?');

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
