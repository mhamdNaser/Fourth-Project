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
define( 'DB_NAME', 'forth_project' );

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
define( 'AUTH_KEY',         '{^|.!`._*{)L;).Y:C%}Zq$#6V)x+[`NZ=pI>e=V,0mI4vf8|bQoY/,A+K^+Fs2(' );
define( 'SECURE_AUTH_KEY',  ':(w.JY/N_dLvhdeV1y$tPNc2X1{R@/Jv@c257d=Doq<%~9V2R4[9n1@z8:`:RbIA' );
define( 'LOGGED_IN_KEY',    'FJ=Si(Eh*%F~j*~D>^6uTBch9SqUFlPNbynG5gDz4C[ LlQND&GA<Rq3-L7($^|H' );
define( 'NONCE_KEY',        'S?RWQYFK,ukkV($TNjK)bY>ssqm@Vl,]&)CeStgx.z~W$tt(p)=ZJ/ 58e?IrGgz' );
define( 'AUTH_SALT',        'LTZ93B,9&xNZP%yTL^EzHWoC+6E!(.#jx{KW?pA7x87`?X8+s_*=.|(ip2HeL|GN' );
define( 'SECURE_AUTH_SALT', 'r.gNQ87b)s$~KY(KiIqm5`hY@|:b}dy=(D8LXC#bk);DSTbyl$f|n@SVN$W2hN}F' );
define( 'LOGGED_IN_SALT',   'b*!NJm3M(4mw%z~E=ws?uA+84CUqWF4tzhU8?O`Lg=`VuhOl.UE?k@P^UqXh}lnC' );
define( 'NONCE_SALT',       'iw&.E?Pd8$ce=HQPu:f;Z^MvJo .l::(y?]F.&J{m<xFb1nVQu!G!vc%U_t5!zjZ' );

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
