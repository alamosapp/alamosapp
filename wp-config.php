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
define( 'DB_NAME', 'alamosapp_db' );

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
define( 'AUTH_KEY',         'hf4m|}1WUKO9QaMT8/oKZL4gF4Qu&^@bO{P=_^uHiFJ*>Sk=sD|/Dj+yqHoue0UE' );
define( 'SECURE_AUTH_KEY',  'w&*A14(,CjY7{g({RxR0~}5k@%a6TDvoL{.b5HJlWfi7kN6|kMFz1Cw}k<DeR5wo' );
define( 'LOGGED_IN_KEY',    '[8-F`aWWR]2]o X(o}X~Y&X(%=IW@Uay!U$XPN&[G.nd1LhJ=mNISFcN2S>-Dy}Q' );
define( 'NONCE_KEY',        'QFuKi}BvZ6_1d/R.@;XmmV%RH#q}./vp}9L_P3Qt}OFe%EFIr4;IcpQD]5pn$!o(' );
define( 'AUTH_SALT',        '&`gH?2;dQ-_ .WvX Fr~ID>(+m-UPL$ut$x}EtW#*05L:NEGDC(IU/^V?[tr%fh[' );
define( 'SECURE_AUTH_SALT', 'wMz6$%pkS:KUYaQg/hDjV<#Z88{)[s|v@$A;{cb;B-9NKQRZv=GxbT#YwU)~8BSa' );
define( 'LOGGED_IN_SALT',   'sK`=6u[C.-81,so+DRoOu*@jd.j3@SCDRLZ7X,4F;s^$3Uy]/}3Tg:LPcC(Vbo<K' );
define( 'NONCE_SALT',       '6Qs_<Z:@P5iO(=DsgarJt*/<7v43i)M6[GUGDh`1m~pUQ.Ug#o+8^ch4]NC;Vtkh' );

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
