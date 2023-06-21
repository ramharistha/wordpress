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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'Wz7of792f4@R:u5L~|BSa^s-~m-=A>!,5<W}t{j3{B0j2~iE=8,^V2KxxJyooz6d' );
define( 'SECURE_AUTH_KEY',  'Td[(gD$_3Aadb1*ySA?<?w+U45Jyxg5m*meqh-+TCmaTP>G[;Zf,HRwE1SK]!i>!' );
define( 'LOGGED_IN_KEY',    'l iC5{~D|1Jq P] Q!bMc{!ya4X^0~7<2no_Ti_+R>Bv{rU|/qv%o}T>iy:*J?oY' );
define( 'NONCE_KEY',        'f@yAX~m(oS;n^oD5p*,wd/zvur@|xZr/tEEV 2CL(qD#JN-OX#OwxG?!;r-Rwes^' );
define( 'AUTH_SALT',        'P~>gmm*bzI?^q),9E8S0v7C{6LFw4GwgZt)gM~Tcy<uVM30M^o62U9R[s4;fo:NJ' );
define( 'SECURE_AUTH_SALT', '<|kHYe0`1}Lafs~=85b|_}AO`iPh_19JhVh1ROD![9MVV{t~P{nBAf`@t<:)R@e1' );
define( 'LOGGED_IN_SALT',   ';Z@Bv4pI:&gzT222;@QrjKE0U$uh(*k>opY(uWJP,d_;L%Vtv`Bxs&2;=PKV)nzm' );
define( 'NONCE_SALT',       '#? =Yl2sjL-&TJB-x0R9UV`zhf4B(C-I?rh#f0!_Yp~:FH&ogDwi-/LV+JSb{wtZ' );

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
