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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kasba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'j1~|/kUasMv7[j3QX:f@3aXkvjx<92Wyt]`;Rxg!m02G?kaxhY~pD+qt~TI^U?Kg' );
define( 'SECURE_AUTH_KEY',  '|3NRoa_ BzgJql#>?L8DPGs%WOMr?[q^H7m@BYmrzXjr=CC*-/.!QSsk>TO[<Cy^' );
define( 'LOGGED_IN_KEY',    'J1N2MRa-<(`GBK%YZ$!{#1jL_D8wi[7PV]Z0Yn3K#[VyZ8#Re~,4/P$z(2Vpk<en' );
define( 'NONCE_KEY',        ')Z!R3Y]Y7 f]k2^[in*KS{okIeLLN.#Z1F6Wo,*eyflAnE~NVeJ+(Bn0NNlqnGdX' );
define( 'AUTH_SALT',        '[jT;<A1~9,tBHbCf^={v!Gw6k%G@Gh$wCHLeb~Mb$5EarTq|{Ik(^z)NT)gGIb~K' );
define( 'SECURE_AUTH_SALT', ')&^fmF~DawFy?(|bRIv;W`?%CKXjO^HqC!.9{VgoqymrKIQY}xFg$uP*%(!m-Rj*' );
define( 'LOGGED_IN_SALT',   'w|%^JKn;RjW5H9U?RU}^Y/%^K}]K1|5J[52kww+|da)R$N5Z_mv$+kdkP)1jpa^@' );
define( 'NONCE_SALT',       'L-6 $/?yH6;ejh2h? w.DdT~XcJXc!sY7S6NE.DuDD?KNY5]iL2 hj2H^NEB|Ump' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ki_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
