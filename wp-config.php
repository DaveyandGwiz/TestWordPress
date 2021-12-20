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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'SN3SoNdJ]sqKOb]}v1`T4m7~>-{ax6bwZD$f(WO<` 2~L0VVHVo1&=C0>koDkGnR' );
define( 'SECURE_AUTH_KEY',  'VHM4rrbDiZP45=28>`(?$Mn/G?tKG@gLir75rkGjeHr0c:$0Zoh_O6^eBn.l)d[}' );
define( 'LOGGED_IN_KEY',    'wbgZ_p8q4=)v=3OK0Y<1okKm3JLd*3dpJ+B1i* t)KbAb<x_P}IB.[-{V*@^G9Hg' );
define( 'NONCE_KEY',        '{xe}`gS ,KYxqLntsA>]UhjgFfs?|7RO+bQSqMEBx>r|Ie(]_]mRnKq3`Ix&Zn%U' );
define( 'AUTH_SALT',        'M2f!g8WNc6T.sMhGJ]4=x<4b#|g<9cl=aV/}([*NeaL;t368#wI9Q,&TJi.%&to^' );
define( 'SECURE_AUTH_SALT', 'Ks=T@C;&99v/gb}2[9?x_iU0f(]1KEXow_U.`o46o(/QH|/IO0g-ii)BMQCZo=[A' );
define( 'LOGGED_IN_SALT',   'l(}f_r/OJJx5etmuRzD)*R%B,FIH#KQsMoYG]bHEOXfLL?g,B;PTO,5Vzum@:`Z-' );
define( 'NONCE_SALT',       '.!N|p>/FprY6fU(:eQ!oTJR|y;MhWw6r^6_!@]DE ^_DgT_2y7tGspQ7MDbywdgW' );

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
