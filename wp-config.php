<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newTech' );

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
define( 'AUTH_KEY',         'o0FR1DsWqg6&FE2zTL98SmGmLBu]H$[&Rl>|VuGBiP&I-yJiXuk[ML D~l(#S;sc' );
define( 'SECURE_AUTH_KEY',  '|t5WkL!*TqmxL*=Q>(3.aRAV[4gAB&m,<vZai w]BXs76-ml5`!-^WECxY7.(sP!' );
define( 'LOGGED_IN_KEY',    '^!zixgNl@-eLu1:pd-5]|RfcnT*~.qD3M!w}/ahxtD&e@te/+!{qMIY}.h_Ib5|>' );
define( 'NONCE_KEY',        '/2kL 7][9K;2bPYNF&L-YC?fz}NslJ8[W6~iBXE@;/8 1Fs#9q[-@xC(kKlm84T^' );
define( 'AUTH_SALT',        'RMwX;<My uu6c0s`(m1)3rSDR*NUu3Wx ?Y`U^[v,hY#|=vfQMx!>}8*okS27IMx' );
define( 'SECURE_AUTH_SALT', 'IoG kgLT{$ax7!%fvOC;yfxf&?s0{A@pJae`1.Hy%9c2E0q#k#Y>7!{U`*>^)Vb7' );
define( 'LOGGED_IN_SALT',   '8Cj>/8{81LU!~v)vJ0#E %1*YOCj[l<ix3g2)jSVFjBnk );e]Y-X11!Lhr]NE&.' );
define( 'NONCE_SALT',       ':$4=v?%gdu5J#:Ar;>4m_-*ax7Q63CB|HnG [.Z}jT?BuPA$+H)?wQgWc4s?pDnP' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
