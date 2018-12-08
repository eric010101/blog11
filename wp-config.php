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
define('DB_NAME', 'gogocode_blog11');

/** MySQL database username */
define('DB_USER', 'gogocode_blog11');

/** MySQL database password */
define('DB_PASSWORD', 'Ho7r@3)S6p');

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
define('AUTH_KEY',         '00iwjoexjqzumvmqr7braads6somamvo7aeuakijwiqzbsqsogcccpreobina2e4');
define('SECURE_AUTH_KEY',  '73vcnkmadxysizkv5s92doecxatfb7izduphpyql2jzfswdsdsvnuz3qvaaxhqce');
define('LOGGED_IN_KEY',    'ahmtneaa1zkamsa9skfjvaydycuipfvm2b77yngghp65ciyhuawu3mgdvtim8z8w');
define('NONCE_KEY',        '74lypbwedqnlizsk7orm2guv7nhu3l4m52ldamernf5fdwh5uzkz6vtk2qtqnkdo');
define('AUTH_SALT',        'trua47pvjtwbkejpayjweyhqv67pfhbbrypurqzhi8xmdjesaqigus5nllwfifv3');
define('SECURE_AUTH_SALT', 'xcuyyydme3n7r4mkpbadusgiugo1xrwa4fifah13vsrcfnnkugusyuukjgahuhch');
define('LOGGED_IN_SALT',   'hryy9mpibdisxdbkyjn06fugmmrwcbnvhl2ik8bbcvys3po6xu7hjkposh3y4rzm');
define('NONCE_SALT',       '9scmgpjp051g6sxb7qb6ikien2l0dtoqeafwcyens3ypkahguvloaec9vet5ykgf');

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
