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
define( 'DB_NAME', 'warunghomi' );

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
define( 'AUTH_KEY',         '&6D9G#Od!9HG:t9tF+Gxa_dQTmI{d [u((vTMPKQyNH&!pH=rS|cJQ7*Lw3R81l#' );
define( 'SECURE_AUTH_KEY',  'h:t3vd|T*s1t<3G1ltmL>d(-4%JxB@MV~f|(b2bB]^:OivHC(@.Kqw)%Ci GNTE.' );
define( 'LOGGED_IN_KEY',    '-#2qLE|UC #< Neb(9{hz|]|Y/L0~I#;G+4{jnauR2hvps`*>Q%H3c_eKiWz_@So' );
define( 'NONCE_KEY',        'HoWE!jWt#Uvd#C{5[fa9CF0]A.ZQ NW3RDZxgTY8S`>x|sX_2f6>j(8ULw4b:H (' );
define( 'AUTH_SALT',        'CFIG@$tIQ.s5C^fH}v}e<UvRFD0w4N}u,ORo*)P8/O!6{z]n14;VxV={Nv]MY,dq' );
define( 'SECURE_AUTH_SALT', '||&g *0)Q#=&>)Uf{42y}]B_:PBM`mL4?iV6m.y-Q$,9s.3z^6H5K/78.?{ogNet' );
define( 'LOGGED_IN_SALT',   '(~/u>LLne&%kT$Q`CoAa#u(B@9m~,?!n25h<w|xJf{,-P0r,cUWJ9fXd4SB&.#Gg' );
define( 'NONCE_SALT',       ']Y-WdNF_5!xfaZ@9Sddh.=NjmM}boKSZEyFupJ_dl]m~~K$O{D`*g<`272G(`Mr~' );

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
