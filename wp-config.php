<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uDigital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'U1BOD7LcKqfKmGksgsEGv0mowC2kqoGth9l2tlMQCJtQmHf6tLCpxY2JrCACDNXB' );
define( 'SECURE_AUTH_KEY',  'BIlNyUl29eUDqi6mf7vqHhKI5HiEZAQVfxJXHqTz9Qpw8BSBbGKAJdHcIJxWQMgq' );
define( 'LOGGED_IN_KEY',    'SEERjkY8OvsNu5Nans0n13tUr1qsE9kXQDtaMiuICiALtz8zIzsB6Jp4NcrY8nx6' );
define( 'NONCE_KEY',        'ynoQe9yWci8HyHy5m6Z9caReZ6HNdjupN3S61nBr0pxreuJ7quAMiX6w5ipikmQU' );
define( 'AUTH_SALT',        'q5cfyQc2T30afCHJ3a08iwMHwZEBvIFdelt7B6STGEByuYClLvCPYnT8OZ6lFHtv' );
define( 'SECURE_AUTH_SALT', 'ypId5IAN22jp7jJnkvK4xSp1pYR3pJaPYxIfmjHieLQe6BwxBkPFWGcyw0IIuNb9' );
define( 'LOGGED_IN_SALT',   'VnZKMMIfAgBq8KC1e7LWYeKaC4j7Xn1f2DAwh44GOJft1kqHWVeidT2ObKjpNHZM' );
define( 'NONCE_SALT',       'Et14RW82JJeYBA5v60RT1byJFElxtfcDB4Htx9xnpCn1wtXbBSMav7qYy8INEx3k' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
