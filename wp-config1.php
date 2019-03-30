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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'm7Lrurw^yWy0E|1H7kEVuDd1AGAyFR(z;=K6[F!_%tHx2Ots5!+|~jHC),I#qZ0 ');
define('SECURE_AUTH_KEY',  'A3eo$QBRE <j3^Xi+j3#5gYh,{ )#!qvI{!QT0?i.$.$3+wpVSHAi|h!5yv`Y[.W');
define('LOGGED_IN_KEY',    'n^um=lCz(p4I)&R4G]O68ScIhhE^YPb+8@UJb]to;:e)437mXa;t*u7|{p;n<#9L');
define('NONCE_KEY',        '0G@e*VeMg<:haJ:m!2wQi:8k89Q^@7o|?P5/7MjJ5ej_U}}h2rcGY3OzQ>f`D)su');
define('AUTH_SALT',        'P+[8_0|Vbjlig1B[5BSi;*xLecI,fW,Zvk)lM3x+QH4v?-o&9P+h--yoU*`/YgM,');
define('SECURE_AUTH_SALT', 'mD}`4=*+EB7%#_(A}p#?6a|!+pL`)CljjdS40lp&$7L^Xj70T3cm*V5YEQTQDRu9');
define('LOGGED_IN_SALT',   'e~Wn@br_!LmSrpu%qz@^T`1_Iom%MWgYYrw9*Z/P+ysawxWNGB4IC=__`kyp8+Bp');
define('NONCE_SALT',       ':f)x,gK2<~k9APdp.p531ij!e x{, 3K>qiGvt7c`U?RU~&</ fDnu{th1v-@k:3');

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
