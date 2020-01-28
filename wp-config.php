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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tnw' );

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
define( 'AUTH_KEY',         '3,,rsIbs l8U@!_[/cJ!S];Ae^O6AC-I[?Y1G<Z{j4^L*~$+t9@jI^Qr9j;Q|/:q' );
define( 'SECURE_AUTH_KEY',  'p}}z6?Z$<n]~31J|Le=g]J(3:tI]%[[q%f?Pth:OKc#T>l4HNBKqovKC-R=W+=C*' );
define( 'LOGGED_IN_KEY',    ':L3l{shX]n`,jmZe<km,p-Shab)5NUy8r kVZOa[6u*SkJZULJx430ODt5($:M [' );
define( 'NONCE_KEY',        'DR9;@~P<Tp*K uL=!+][&Y%4:p]$_OL~#3 ;{B7/8oMMYKdSNQkeUq)0`oy3NOFn' );
define( 'AUTH_SALT',        'xzRr5H6=YIGANOh^yl< U>j]SrQOYye/dt#U=*f PwSaYBA5R$v8)yT@dF4=<=}E' );
define( 'SECURE_AUTH_SALT', 'us4J4BT{tO,SkC~Cgal~y6C$zG(tFbr.&wT$oG:D@{q|PGEU2:DM#orN`P}Y4r$I' );
define( 'LOGGED_IN_SALT',   'H)]#-3y|(D;AF?cVpLMD=>U8IynB:;Vc]&!tC9gT#{P3lQl:}z<Po.E:S~@E9&n=' );
define( 'NONCE_SALT',       'b2KlmHh]ctjUN WRR@cuJSR9*b@Ri~x(3:{pGp40UCg4!^.O}N~?WwMbo/]Ztov9' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
