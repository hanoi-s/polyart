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
define( 'DB_NAME', 'polyart-db' );

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
define( 'AUTH_KEY',         'Tb6T$W!BF5~6 YPzhZW19KcA;rMe4&_^zW0m^95nkUx[ss~jI9Hmf#:hY6Ud`$77' );
define( 'SECURE_AUTH_KEY',  '.^%`wbGs!.5OJxVdhMW%Xn@2QG*I975 -.-QjAQEv!3{QLm{SfBTxJ[%pI=Lc B:' );
define( 'LOGGED_IN_KEY',    'z5%tXj%Y5*O*uAsP!Q&2wpRef;++Um+<nhY@=2`ug*;@u&}H+/g&ZpM!LGT{qL]M' );
define( 'NONCE_KEY',        '|A;u%tH8W.=vBHzZ?jt=qSz-#Ike!N:,=@Hd2O`Eo_nGsvER4b*f7E;SP(?|go;b' );
define( 'AUTH_SALT',        ':wVJTCKr$;/t@>g&PP3r-.^X*A8v#/wE1D&JjFm}$s~c$1BpqGh-~&6M:W?rt#Un' );
define( 'SECURE_AUTH_SALT', '<:,%qs8R_.~>n% HL9U1T_m#Ny8phk&PdY:S;]|}Eu NLUv%z^b$5NhCM$wE(2H)' );
define( 'LOGGED_IN_SALT',   '@.Qp*Qs4L=OJ_<$9:/+))axD`JwDq<T94]uYmMwt_p&n<`G!h(u;IxeJJM6.`VR:' );
define( 'NONCE_SALT',       '3;b6JDpapO|_mtZGBvF7V1~~/ZJuqBsvjJtJYBV*W7()S}~#lJXud^A B28oH9Bn' );

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
