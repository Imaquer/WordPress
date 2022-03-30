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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'C@(gpI6YzqQ{FFNhJPQ8W5EEu<y`Y-pZsk^}B8}U7_$i oM`EgfA|@Kor#Ah.~!-' );
define( 'SECURE_AUTH_KEY',  '$PiQ>4.H.yfZPvO+AuVj4,N/*iLm 8d_@?q;~<yoP8l/7PBDd$94J TVr(<VZk/>' );
define( 'LOGGED_IN_KEY',    '0}h!u,_I#fq)#ErSkbROHQ)dc<pCAd7I9e<z3wI0hH(@n}z]C;Eo{?n5;OopTjvC' );
define( 'NONCE_KEY',        'B=vXOTNi=r&Y-+R5W$cOC0[,7E3/iD7;sGISh%)M,]!h^U8^MIBL<qunR^MUCw$ ' );
define( 'AUTH_SALT',        'z.:wyTJ1V5>n%#wKd5o2FU7mt`,SHJ/>~j>gyvu9_u4~ X2d/yF{>mIOQm-YZdS:' );
define( 'SECURE_AUTH_SALT', 'dQ0o~ko e8A}`prD6_s1F|fFd| ,!(|h>-:Q6]-khb+}0 khc/;kS7U1@BJR9o9-' );
define( 'LOGGED_IN_SALT',   'QRV5M$toYy`e1Jw)|Pt`(y;y?L5n:*eZ>)B{#kJLq~9URN+(6`w<J:yWu2c][&r-' );
define( 'NONCE_SALT',       'k[`IGAl8e?3C>S+k9[^{3M>t8aVJUHXvC@MK_s;>oAsIf|W]ph_MfM|TXP9=#fl~' );

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
