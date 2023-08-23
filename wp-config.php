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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '@*8}5j3PE8rt(Ah:lmRw}0=ui`|}qv|&do,>gf%{69p2QHhdJsC42a059p$W4f= ' );
define( 'SECURE_AUTH_KEY',  '7&t+2;.@2vuJ{uQ$:p*6j?aLfC/K)hid@6}4xob?&dqk5-[nca%#QAvhDb6m*.EB' );
define( 'LOGGED_IN_KEY',    ' D.8m+SQ;FjC)Z;;/O!U}S%OPQ,2j`*) d%H;mF7ua}K[294^9P rO9pfrQ?|6:S' );
define( 'NONCE_KEY',        '@hiqlM`5|_?x69A988N^_}!(b9DbvY.HCjb1zleC]%Vu0[qf1$<z-GUd@avND|}:' );
define( 'AUTH_SALT',        '7c]1U0b#[H%3w}rM yzQ?J-tIuRE`3$0crB#)2J>]D9,ezct54[jB~T;7d_wzh)l' );
define( 'SECURE_AUTH_SALT', 'y#Ig&r)*K-[LJPf&0Y31nN>DWx1vS[]&JmIf_Op%Jq :DGY&(Kd2<{43YC NBxJ@' );
define( 'LOGGED_IN_SALT',   'BXF8sV6{2a|^MTeGL!ha8}th2 ykQ>L$R$.~ hg;L_=XE8b}pcc2~8L$rJHH@No?' );
define( 'NONCE_SALT',       'jE)s:}=|&VB1ZJN&j2 Gw9IYHlfg,Y?9ku=Nn(AB$m%HLp0~Uc,E^$.4*/%o2E}$' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true ); 

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
