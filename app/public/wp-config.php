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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6igu(Lp}rC#]@i&X:%jL)?d0|Yl0s81u[HavpnX7S;!TLj-Lt2A)xvJWUO jY2!!' );
define( 'SECURE_AUTH_KEY',   'SpThjIcpn,2Eo6Af#2>|4FbR&)pPo/E[{Z#=~xLw;#gvjdI.,7oav-M(BW,4W`7,' );
define( 'LOGGED_IN_KEY',     '4;Wk@M| Deb24u.<?Jv(f5qM4C=jl=j/_:]%MfLF,eY]h !&<5/8{@gp#=BuAucT' );
define( 'NONCE_KEY',         '@9nFCgD?x/N i?gOP88a7FubFC0DAQb+LQ$voA$BYY~v7@{`=nrI/(TG57s81UR/' );
define( 'AUTH_SALT',         '(CgvV1;*{86(dueAN/}uBalA9 ce}<?cm=,B11^Q2m/(aa`VIyRh!3o{_+RIq]lB' );
define( 'SECURE_AUTH_SALT',  'RAxu,LP^|2+m_Ve8jcV)mA=6E]79;Z%5:*nq/n$=lk2HV9*[^FoZiEPHo@ZENf/|' );
define( 'LOGGED_IN_SALT',    'QzJ$s,go{@]u_,x|A!$%Q<Qt^=IRJmZiOUIB~-=VP^iSxaX:xL`67pA@acfnk5?w' );
define( 'NONCE_SALT',        'C#,gk:MgXRfbq[v7q[kfQhPamP(3b?_{PL} 0:UnBIyE;![xSZXlGlZ7sw~hOye#' );
define( 'WP_CACHE_KEY_SALT', '}IDZ#5+)2G4!^~#yl_l{VZ86he_hvKQ^,WfIa?u6OI2f-H[W|]8xiDej2(CIwx>?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
