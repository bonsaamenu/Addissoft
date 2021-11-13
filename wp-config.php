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
define( 'DB_NAME', 'addissoft' );

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
define( 'AUTH_KEY',         '+:iTWmMhk)`Ul0?X PSpf)>+CVHSH[-.>qGb~H$`%G0+</X|i0>sC4^6zjoNO^2U' );
define( 'SECURE_AUTH_KEY',  '*~HtHQ$&4iad8f>qwGcPo4S/Yz%~lYis.et)#3c:enIMPl:2w%K9i~cr?Bqkt]Y?' );
define( 'LOGGED_IN_KEY',    ';0#VC.eYnhU P;U9y.IcN,nf|}BiHqvE~^ZVufSrHkh~<*Kl& lb0DX|,$leWGb~' );
define( 'NONCE_KEY',        'A.0ID^qV]K.h9D:MEa12nL=Xtapyd(!qZ$;IQ.<3HdNwD]lVz$HW=[9_001a7n0M' );
define( 'AUTH_SALT',        'W~vg<A0{P_V:kgQ00Cn%qk5^c~E^f~Rbz3!{#*T- |xM(u.*wq3|h]4d`6LyE$yk' );
define( 'SECURE_AUTH_SALT', '5=Ch6Ic#QwK?G[MJ7V*YJHvvSbI{n6`oU,tD.n(illMkGln&W<7<II?>ePbTeGk&' );
define( 'LOGGED_IN_SALT',   'ZSrh@c_>si9;&g]xE/ )/+v8j,1SAl2J}FXyB.ooNqL{bdp!`s$EBmq&p[lqZCrk' );
define( 'NONCE_SALT',       'Fd]L)121!-)0#KoJ`_[TX6bk1!J*NMOaUS:BEKAv>tK).md5+spN-6n}!=`LYg|i' );

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
