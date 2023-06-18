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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gff' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'GbhZQ@(Be4{8laM{z{MAVE .XToggY,P.}_/@hEN(83-_amQWm|aK=`:{?V@d*1e' );
define( 'SECURE_AUTH_KEY',  'v>^{y?cf8VI>Pnj4Pv>krmV}L;_=;Q@r%bSQiPGvO1~I+p7e0]3p!tro1nPD0Zw&' );
define( 'LOGGED_IN_KEY',    'Acj)59.19|/A +[Xb%D&./L*M@I0(~t{y!`*xdQ%(DU9X^l:uGq5Mz))*<P;-@w#' );
define( 'NONCE_KEY',        'y@}WJNRf`d|B&c<u.afPH^<if._3e,MQg6NZCa_Qr+RL]#Fa>:QyRBGrC`<>L<I]' );
define( 'AUTH_SALT',        'SU@1VlQ`Yam-]Mp? !F,2w(2jx=T+wykNuK01F+34,),y_3g43:,&n)V6_@b<}A)' );
define( 'SECURE_AUTH_SALT', 'hXI7X~_Jx:hRy<1/!JHDyGZky;@Z7u?8p)j4]i{;x0>]KmpQIT;B+P=aY]&O(l/|' );
define( 'LOGGED_IN_SALT',   'f*I$knarOH*jFBI>T4 X:7~V5>b# NWp9R+HF^vYV{;11A;cGq&Jjq_pUKzh0daq' );
define( 'NONCE_SALT',       'x.98cm4V6Sva[dq=fL>%sY,/R!zjc:(eH W@Jn{$q}uZmy/Yr,-mE;{qz+JKA]%d' );

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
