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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personalsite_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'JnS9?RY,~ErZ-`qINfFT#{+(Pl!&N$e cxsM1oOU~+N/VZ&NJcxnW88w2`-ImGhI' );
define( 'SECURE_AUTH_KEY',  '-ZHrJoy3zX(hkmRAUK8pzx2jgfV`-O.Y?Vi=,r3Qz%0I,8*G/jgqs6)^B?-}rhI*' );
define( 'LOGGED_IN_KEY',    'u[%(fbU.:rC4VO.ZPtW!xi3FmbBUuAHK$DP]h6t)2M@IX?pmBbo-2rko,E+m&w^!' );
define( 'NONCE_KEY',        'C~5:`&OfDnaIWpLo(7zT9Jlgt3D=s:_Xh}c{KcD4K^F3|:Lf k-t;l,_;V6%]0UF' );
define( 'AUTH_SALT',        'MiLRJIuvqpsj{s.ck+B(&:MKGEBFs8%y0#2lDmaS5azS(6u#tX( Vy}E=!<h~(4}' );
define( 'SECURE_AUTH_SALT', '7UhM#3|P&1*qASF.s%MK9A(}^qf,pRbeFU32bu*N434Ueh&JM==qdvT=vybrZFow' );
define( 'LOGGED_IN_SALT',   'z7r|Fdu!9 ]RFNAk/ZDx$)0D+-eL4PazX]-Q}4rETr8i=y+7W@MK| T)Zc4{:cj3' );
define( 'NONCE_SALT',       't)PYAdXN^w094)@S,F>j0`(2Y% B!AL%rMUtU$9i >8@GP(0[]R}:}n#Z9!jeyCG' );

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
