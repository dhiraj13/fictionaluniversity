<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'fictional-university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{$Z|/Ue.l}&+K8,rOJH:vZqVrquDXHJ!.,N2ph8N[sY&5k>K-ypKgzD!T^Xk7-7x' );
define( 'SECURE_AUTH_KEY',  '@<`gYd(3rG-_~RI8NI;NG=3O$x5]]~(T!vBrXVhx.-E*G2rWGc8*k*s[qvz$oHQu' );
define( 'LOGGED_IN_KEY',    'A59w>Ii#W(KpD`=c85}GHus1fC!lLbI.i76`L%eJ+c]LV3k.575GB,D+b$UC|j~W' );
define( 'NONCE_KEY',        '.>{-N`uKbRs`SD7-;$z6UC5Tmg.d!|~[8O1q`b1RN^P7*32[y+v<7b[4]0L|@6Nt' );
define( 'AUTH_SALT',        'fj$4Y :(2S/vFQ{<O,Vzw{8Aba(y{VGPTEbFG?Qi:+c 7Pc@@IZimgqcc)qKJzN:' );
define( 'SECURE_AUTH_SALT', 'p|1Bar*9JVHvzC(3{o@|^~SBa:N/Qj/jKEvV,B}`xw}GG}=vsJ#]|Jjdg>%:J:kZ' );
define( 'LOGGED_IN_SALT',   'H1WrcoF?zfihh!^Qm4#Ag[|Z3j<|Mi+Ton$C-F8E$ mpxCfnh.~bjyqk8E@O.8jf' );
define( 'NONCE_SALT',       'X@ox~:4oGCSOGpR7V?*3B)*N%r]kzrQqvfexTc!Tr^ba[ay *j|f}N^Tu5%k~=rl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
