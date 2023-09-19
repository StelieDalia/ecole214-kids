<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'pd1m6WC4g+nFn1eUrlQvMHOaC5ietblyTiaQVd0ylaN1S7isQgQEqt4iHFuhZBvjJ1/adkgfrFgON61q1+TvzQ==');
define('SECURE_AUTH_KEY',  'F9boiM0WBSek1zWNC1exi4xmNPMmfGvAPSlpOcOI9c5CPQ+H+hpDV7gEqrtsbOycubc+mNDT/UO7Ijs6RIrw3g==');
define('LOGGED_IN_KEY',    '8pcvPGk6sIWxfOaYwqvPFdl4K6oOr7fy+wi8wfEG8iOh5b+rrB2DWmyYW8Gh5BKUiHomKjur9yQfZywrSxFwBA==');
define('NONCE_KEY',        '13NpUh+ywQsSeBalyxynxOymn6UQTCnFL39cTnl6tVDFqQN6MfRsRsW2SZKwBmk44RS8p3YVDFIkyCPFi9118g==');
define('AUTH_SALT',        'N+C1Kmh5ciDKwKTJplHxIZnL2A1LtNfO0DDZ4EFJngKRfMaXK2x8x/3KgSjiRjk1CfYjeIgCtSZE5A30oHXUpA==');
define('SECURE_AUTH_SALT', 'erOT2cb6g9hzrag+cDTKcLCu/ZNbAcWIUEmFICf+tJbHSm2LZBnCxkK7ImHWgzX9pkS8hdEqRNH2G/DW6SNVUw==');
define('LOGGED_IN_SALT',   'oejH7nOxBC+ban/O5ooE8ReVC2uhAUb7afKYTQPSGwqJi4UuMjTylR+hymZVClOYWiKIXfpVMuDUo36F3gokUA==');
define('NONCE_SALT',       'h2MowiRFkEGHwxWZV8dmsenrq5uEDa6oEwQzAs6/lE1fYwgMdwLJ6f6kCT0Finv/VeK/r7cti/u2SrA9Ksa/eA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
