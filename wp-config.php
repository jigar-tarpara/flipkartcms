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
define('DB_NAME', 'flipkart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+%)N-Exr&o!XQ P+6K s|MB;g%{)>rele.q-D;j(L|[q0xGbK^>q}@6bD_y5~t=-');
define('SECURE_AUTH_KEY',  '|I|hV=5Ip`v,`2Vw-N NL&G-RWXD6/2-HmY?!|Az(R w>34f5UIHXtk5a|`4bmv-');
define('LOGGED_IN_KEY',    ',zdT=3`tO:0}D_ -A_x6|v8v.KGk6{>=y o@Jqd^c`kb< rVt|qcC0K|>Y3* o.1');
define('NONCE_KEY',        '5ij?o+etg+|2)=3t@L]$,Zm9EOoF`/_DF`io+/^=_VQU,PrPUpSp@bo$rJI/=|(w');
define('AUTH_SALT',        '+LD|I<%5K&}8jJMRUtW Bb+>6IW^;|?&m4Ii|kZ!:: T}lHSV+d+l-ii%[LiZ+q7');
define('SECURE_AUTH_SALT', ' e|?s/}] cZNpnE I`cSiiW>XlF59M^|/j+1Y0uX8lYI6QtcO%ipQx,R}-ksQ]*V');
define('LOGGED_IN_SALT',   ':JSHXJJi>@#+V4k;_K6HU@GTB2Q&?pPh@z9736YkQq+[tbqh8^}|QO|<j+hz<glV');
define('NONCE_SALT',       'rlK4$D;nvQcr}`+6kUXBHtE6WB^A{[ZGun>1d04RBhTMjVS|K-cy{}.#PV)W35Xc');

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
define('FS_METHOD', 'direct');