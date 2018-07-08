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
define('DB_PASSWORD', '121234');

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
define('AUTH_KEY',         '|mt/uYZt%OI+VQ+mI Dl6ybC9>ZFjqnC$^5IzDWIB8DzT@Hc$<4b*&^|Mc}:EMgf');
define('SECURE_AUTH_KEY',  's3J>(g*mI9ct.:GW.;h*1>?N5hPq*UL|#%tX$FY%z}qfy*8A18bx<<*.fj`o-xOQ');
define('LOGGED_IN_KEY',    'KBMxiknqBz_}+:&G)Rl+#Dlnl7-_`}OOn+)~y#+wM1FE+a^|zZ|A4}R9Q=v-E8H{');
define('NONCE_KEY',        'a8-A-Zh%J&jj!7|a(@r^`h>-k<;)We#r+_SP{t~~x+kznZGN:,`OjuicHz_||sHY');
define('AUTH_SALT',        '4z*0H~Is2-KZ|&gG*9h3B.<WI_o(:eFR[^2d B?|RNmxj6P,T.PFs|)%4gAa<c5^');
define('SECURE_AUTH_SALT', 'Esm:j3Snw&ygK.dHDm/160sh{-jOrV9?yfV+^=yHp@Hi+C=OjLZVg~VPx@+%}2,j');
define('LOGGED_IN_SALT',   '{JA/T1|<KQvX[>B+Iq5A5i:0DT(y2*Px8>g!*;/f[)$e9nv)Z^>Za|@9za,kL3C-');
define('NONCE_SALT',       'N8<u+0eMtBi DMMApzc07w`2c(Ss?[r.HuhD<*l$[<E/QWJk41zYLEO()bX1lh-E');

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
