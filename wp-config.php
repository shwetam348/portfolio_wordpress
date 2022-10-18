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
define( 'AUTH_KEY',         '~SAD)z2 #G(e{A{Yn&8,RCv9#Dm9@qqaK4t,n)O&w*pS-QrxpzV?`>ELeltwle}x' );
define( 'SECURE_AUTH_KEY',  '6*qO=U0sqJBOjJzYQo#(C,wwz{6GQ:F<VctmtHX3Lo<aaDHu(&1O4dFg[!yh/jHW' );
define( 'LOGGED_IN_KEY',    'sg{T&t)[N5;I1%mH&(6z{4pZV)U7jg2!HY@}wBs2>u?&SZGe[ ZM+$@i.P%(cvzu' );
define( 'NONCE_KEY',        'E.v(ULr#.[=Xdf>(jjW@bc@>3:Vc[HR^%NHbboL+&5z.sZ;Uam8(?:<*iF?L+udO' );
define( 'AUTH_SALT',        '^Y}2jqUD9{UQEzA+=AS{M!Hued=:UnC,LuZP$pkjV1EE+W!B4N*dL:1fuXb{dok ' );
define( 'SECURE_AUTH_SALT', 'd?<Z r6=K{4_RprQJ$DhOt{|}B#eW>m^}7@}H!<E&El!HId1J>+&O_;iGxKLcD!5' );
define( 'LOGGED_IN_SALT',   '*C$NodP@%Ev0cl>qZdg@7?xr,YEm.EA1)ZNTHR,Mw3;ez_sykRo8m*08V9_q@U/w' );
define( 'NONCE_SALT',       'K[Y x+*U9EZxHt^8BJf>[8f$!{amC,tk]Z?<.7*nNw&S5^^?mqL*|U%!^5=.vBDw' );

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
