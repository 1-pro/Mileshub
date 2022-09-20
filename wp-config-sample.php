<?php


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY'('f3a41cb666e023ad34c10ff62e68dbba193be590') );
define( 'SECURE_AUTH_KEY'('d2b48b74127bce6c66896911b5d73389aa6c2f06') );
define( 'LOGGED_IN_KEY'('f707888418a0f2a4190f78b2328fb3d8c13e0ce2') );
define( 'NONCE_KEY'('bb8ceb155a65e4d3a58f01daddd918bfaf7d2d0a') );
define( 'AUTH_SALT' ('5d93ee5339a52877372a0dbea28a458025c8b965') );
define( 'SECURE_AUTH_SALT'('0a6fb581b19d73eabe2b8c6b1aae05457b11790c') );
define( 'LOGGED_IN_SALT'('291c3a3eea834c4d42257850132d2d94806e4ca1') );
define( 'NONCE_SALT' ('b1f09c66900bf314fb4cb55bd6e2b705917824c4') );
// (See also https://wordpress.stackexchange.com/a/152905/199287)

/**#@-*/
/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
