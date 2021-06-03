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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'T!Q[sE@y`BJ$6},}|8iO 7ru5x4)4-LN8pGakk$:nARer#8HNjNDA$n[-G|!/7<~' );
define( 'SECURE_AUTH_KEY',  'HO[!I$`U2Jqdi#7Rn&6nG<JfoJ;g5.T-J`|tF4h91t_YG(!:4O6]$Rf%j]$T:Gyb' );
define( 'LOGGED_IN_KEY',    '2l_%|5k%_m(JPbh%4oHHxR$}J7?AJ-Qr4Y:9!VL*GX?)=~|4f|uYsn*Zl! :[`)w' );
define( 'NONCE_KEY',        '{6]B/%#&B]-Mc.BT3}s<}<YSrWM~e~z5|B:J.SXv/nbMy9-n0p|![MI#1E,?wyta' );
define( 'AUTH_SALT',        'LTT^6SAa:|w6,<ofqVKW|L*FkgSf`ql}ku %C{X>TOraXOcAhIek,Q3s+lL2:c}B' );
define( 'SECURE_AUTH_SALT', 'g;Lm}Fae[[M$.oe8ZXQ@iLfSJCAdm>/)sk INpSXGsM{$Z*Pk>VHD=HB>#?c</eO' );
define( 'LOGGED_IN_SALT',   '(v^kYdFA7XPv@?baBIZE]N,JGcZrX,VJI==`eGe%i]LF;d k!~*dR+s$lP98UG|#' );
define( 'NONCE_SALT',       'Um.,mbN,k}J3hB{JZl|=(%/b^uc!jhHT/J=[mRUv,)`1kuj2[e?XH?Q!5O&^mGoe' );

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
