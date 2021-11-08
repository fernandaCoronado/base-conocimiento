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
define( 'DB_NAME', 'base-conocimiento' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%p[I=s`;MItp&D!GaC<.K-omb_o<n3s[/xwvMB21#r(.I&e8%:YEt&bH%_rf~v%c' );
define( 'SECURE_AUTH_KEY',  'OP>7UHkK{NCw9/|*ETEzDh!2xVd1G_(NYZmx|[N1Q<HX$Bwz;#+--z&[`M(vfs&y' );
define( 'LOGGED_IN_KEY',    '!$t-C]I;X}YWdHdZ9<PJsn/=G2^nl1_hU ?|./Y6YSxC4<%}6o&)g&6Ra+N2RX6K' );
define( 'NONCE_KEY',        'xm-O.u%(AT9(53`C7Kq=#k_Kzr5y0Ud;^ZMHgrwnS/OF44*!xrY4/IXHd3iYyG5S' );
define( 'AUTH_SALT',        'sBy(76~_[FOCYuH_g^Ml.$H{CnIErfzu8ocxO5-KUFp-m~37|<DX.8C9N~1kBYsI' );
define( 'SECURE_AUTH_SALT', '>.sa(:G&B64~O-shu2&Z-S9o36}}<bYp A] SLufZ._o1&;e.vD<S8?-<Akfi%!U' );
define( 'LOGGED_IN_SALT',   '?{X6R^eRX,Y=dou,pgx$3y_5^qC|,!z;nc=UHiq&0{6!l.}2pD%wzqhL+4xh,|o.' );
define( 'NONCE_SALT',       'LD[e*1rr-$-AgU..-&R3xf+2qI]_@oC-  ~fEjZ4{^.k#^6,?_CG-, dm{qoBJ,H' );

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
