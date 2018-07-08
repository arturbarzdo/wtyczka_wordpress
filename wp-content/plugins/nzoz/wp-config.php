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
define('DB_NAME', '24659470_0000001');

/** MySQL database username */
define('DB_USER', '24659470_0000001');

/** MySQL database password */
define('DB_PASSWORD', 'Ab6WzdOpGz2NBxHTXZpoJitXOyYWSOoq');

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
define('AUTH_KEY',         '&x9U)U3wJp#7EUQc57uyy0phK442jjgzl^7)H6oLs@mKqItDjR^BWYGMVCUAsi&E');
define('SECURE_AUTH_KEY',  ')k)SuVO^8V&Qc@3ZSqkNntISNUxsS3G&XGfgnCF)dbZE8m%XU25Q8zt7ktrB^j(Z');
define('LOGGED_IN_KEY',    '!)&Kt*z6LYaNqbGlT9ij0B4zTy^E2!1V8LlxHwRW4ZDfoBtJUkgJ3XfmnNvBF3Fe');
define('NONCE_KEY',        'N#j9(@QcigqNEZdnPsd2ekENhMNp8d^^LhyJIDQ(fZr1E&C*wq*jQfK9^)zzaX3E');
define('AUTH_SALT',        ')RH2djOOJRXWw3NWy*Buq*@uCSEyDd&(4HTsBj2%)J7PM1cgHZpoz@yCbfGbjD2!');
define('SECURE_AUTH_SALT', 'bxr3a01!5FQrre!VbGjI3YVrYrkAKGXMe(wwJ%D6%d6@@pglcsuaQG9U84ltdpaS');
define('LOGGED_IN_SALT',   'slEnU%u22m97T@Tal!i&HLu&iKwlKvigeKaPGg97(ZBfjTEwx#7lkIK33Tg!5VPx');
define('NONCE_SALT',       'P!7rvFHWcfc1t(uGrnUd6KIxXNhjNKSAmSp(03AyBQFvP1N165)qZRXBdTTcp7ih');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
