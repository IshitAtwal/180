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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smartcity' );

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
define( 'AUTH_KEY',         '1g%*rn>EDLI%2zsdw,)vAk;HH*9LZ-_8Z(iMLR_%c>ib$Z`GIi%g_}|H%3_B^!aD' );
define( 'SECURE_AUTH_KEY',  'LFLTBBoKTybwz$``?.HCE-WUb5dM+WqS///)<.JRn%)#<v262C}m7R[AxMPv9.w6' );
define( 'LOGGED_IN_KEY',    'ETy!sWpakd?[*;NMt_WW:Z[-e%P=0Yh-g6oDXR ?S`#7LWlLaqw%=]K{Hi kWE@8' );
define( 'NONCE_KEY',        '{e!sk@4doh432]_ye7^+Vo[-+{jD7JK[kHf,fG0u|mT}ZED2N;ujlyuoQj`X$JqS' );
define( 'AUTH_SALT',        'T$^i$viO3tU UemuBw}No_L:mfop:u^~E&fCXj!6>YJ0/_6?hI!1U?@y.xN!BwqE' );
define( 'SECURE_AUTH_SALT', 'd4+g#>[1%kW!N(w3tS7 Prn5CxO))q~C *lnQcy|k^HT?=OX9TVl.RYiZK 8;Qa.' );
define( 'LOGGED_IN_SALT',   'GJ-?)]0VOp;A!Q7~[k<nSA5Mpp_Rx@V~nH<X>w2kmOt6cdBH1Y,4um.$SqUHp:,V' );
define( 'NONCE_SALT',       'r8eQAFDV z7iL]QGBL/O+KQ5-#yhJr}ophvalvNEk(:,CLUM9>(NU0!5P30w$a=;' );

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
