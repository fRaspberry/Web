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
define( 'DB_NAME', 'ras' );

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
define( 'AUTH_KEY',         'D0OAq;suDKOim1Y`B{l~P,=;6NbOUHxCpBwU,C/Q;7Q?vmziD/GT>bJN*(!f5Omt' );
define( 'SECURE_AUTH_KEY',  'kR@9}xp1ZWo9(OTmm|9YO>jh5f/;^Rr)CtOE*4}a506Lm|{>7D{zxzW|a-#%$:OF' );
define( 'LOGGED_IN_KEY',    '(#QVOg,~[..to$JLupZ~Zy5ziw7}-B3n[F0p-x]>C,x[O.cSI(XE+B~3+#;B=oG<' );
define( 'NONCE_KEY',        '4k$b&n%eEK&5M0?2IpSWfu3t?ufZ`*=ITuTczRhk6V2xa@!*h5t8NP8w`Enf_sTP' );
define( 'AUTH_SALT',        'Cu Oej8)I>sLBilg54YLM5aum*A265/&T|A*O[*O*d0779[iD1o:x^]i}bUQ+^xc' );
define( 'SECURE_AUTH_SALT', 'rku+-!7+[@ AY0#vBlT}|UgnK#zR6p[1BI+k+/rlIu8+mhWL+N;bZ;fFkQ%/g<**' );
define( 'LOGGED_IN_SALT',   '];Xu/sIBN{uy#&,_O98E%v&8y6f:r/>3]$]er{v8kS*atf0Jqgs*w~D1$J=^dXt8' );
define( 'NONCE_SALT',       'O`_<IVpUKi/|e KpjFzxS2[nV=iv@*hND[I?iNAe,R{ENXxV9l^n`;G}4tMyZ$-b' );

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
