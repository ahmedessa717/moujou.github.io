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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zGpr1bW3k9dMT~{!M3}/ZV?64Dn)JOKfTF3&_IuxuzQ*[p|C~BkfdRsj@YGRyXHa' );
define( 'SECURE_AUTH_KEY',  'RLn*X?q<LJh/-ju[|,wpJ;%~X ysG2>@!?*PJ0^X4;Pd#bh[?`#mrBc8]i=?jjp:' );
define( 'LOGGED_IN_KEY',    'xMqEvs{6A(6pOLp&G_4`HH_OMu[54hq0gI>PW+9@;%TCcG+2) c[Hn0vw*b<03lu' );
define( 'NONCE_KEY',        'OJ%uH*yg#mR:1q)|<iC?CT#hv&P`k8HeuD=_WIEz,#3*l ?K!g{!ijmL^WA)>M<u' );
define( 'AUTH_SALT',        'P4dE:;<[j2vxd*WKOx8D&A0X2{:d_)p1<Nzq2/]0#W&<[Q)bUfMB<HU,e}!,h4y$' );
define( 'SECURE_AUTH_SALT', '[;#Y-ys-vRj}9zMAVtwF@&1FUM&F]sd(_.vEo^[o,rCbO&]rNaeg_*1KLHsSz:&t' );
define( 'LOGGED_IN_SALT',   'e0wa@`ur(o8wPUEESeGIo l<N3Wc&I){{4<!e.kMSix{{;TRmyAx=H}eBprme,C}' );
define( 'NONCE_SALT',       'WKbCBzH,;Bj4!lV&+x.r$b|F06))b|k#/Uq.oKds|me@@bQq~I$z2+;E;6&y]>/~' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
