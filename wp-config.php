<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u9420650_wp279' );

/** MySQL database username */
define( 'DB_USER', 'u9420650_wp279' );

/** MySQL database password */
define( 'DB_PASSWORD', ']32]jPrSp1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'llyhehv9o50y9pqhxcoclcmydbweqpo7oz5orgkjzp8ygp5o9v6cdzef0xe6lxcd' );
define( 'SECURE_AUTH_KEY',  'skvnrzotk4ydqj1btmckmafaj8r2albhbqfga85hphrcfnpozim2hrwjvakpqh9e' );
define( 'LOGGED_IN_KEY',    'c4brt3poxlsgilkfcdeax3a0rf8mq2m3lbyxfhpdoal1gsahp2vyznibubarkwid' );
define( 'NONCE_KEY',        '6h8mc18ftvwut6mn9fi5i5wurfuor0y9wldfvig5frjpavsj530oqgxj4iby5tnt' );
define( 'AUTH_SALT',        'lpwjl56zpvra524yi68rwpyfspxmm35x5iovcqzxpntlj5upmuoqp8gvt3qdf4ag' );
define( 'SECURE_AUTH_SALT', 'fvwuk9cszlr7azh9up2n5esil8qsmrumuzgs10ht3oxrwjnpy8bnnef78qotelex' );
define( 'LOGGED_IN_SALT',   'yfb5yblavuzizbyve2043trq71seerat9dbwfcfajvpi5tmu3ss6eplddymhdqbw' );
define( 'NONCE_SALT',       'ihby5jbczwur8dnme7kmxvtckof70jmb1ckrsst8aqlkdvubpfhyoaqtkqlxnuah' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
