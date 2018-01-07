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
define('DB_NAME', 'tema');

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
define('AUTH_KEY',         '@,MUeQZvT:cI~ c$X8};PPG@ZKuD6WB( ImOsdaS<^vd&>86Z`/k[$f;}<[foagA');
define('SECURE_AUTH_KEY',  'qNXF~`~]Pd_~M]}3{yxXq0.dffU7Of|~*o69#uK)>(f0u|;js>;(LX<o%4*<?2Hi');
define('LOGGED_IN_KEY',    'v?.QiF~D+%`R@$35#QbL!yf}wSR~B(zm73g6C=mjHL]PnD&z<hVMmaN(u0LX*s.4');
define('NONCE_KEY',        'tTE_M+Q k+R.6@FE9S,=0h?!=zx*jL=-DhzqvMx9F7Q.f(IN5D,hFy8qEV_@mLpL');
define('AUTH_SALT',        '{6T,7<mamj1<wNAFfTz_PbV>YyU?r$bnxa@vf(1kIxUp&u1jkhMpKE4.c9A|EnBg');
define('SECURE_AUTH_SALT', 'd<v?,3i![!2@QQzg$PEmF$}R`7]<.eLBYr$D7qY#,!f&I:c7e5c8LULDB;GZ,+M+');
define('LOGGED_IN_SALT',   'e&fdH$sQ~[jpcQSa:O]gYCbn<~]{1QpV~n4dkoDkp$!{jkLOSeVqS|Js*3{M*>6@');
define('NONCE_SALT',       ')#M]`).$Px5b<u%=7_i1kjB|#OF-?^7|r,_L}u:DPYAlt87~5L{9[D|c~#1Ax!Rz');

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
