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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x123456' );

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
define( 'AUTH_KEY',         '>Nq8=xL//uZ.xAnp!_IR z2gyg+vieQ@o.qoFiVtKUFSaXl6ZBOahFeqo:`_VyE2' );
define( 'SECURE_AUTH_KEY',  'pF%KB,V#^#K`=U OTW*nK-Mf*s7]t8}|2bzSCm);-Yo ;AHS%6-o>xL0d;XsOp8%' );
define( 'LOGGED_IN_KEY',    '{U=2S1#~t~cu5-pHe|oD:_c?M`uf/JcY5}iS5V7RJt|q{rkO0y{{4l9G6MK/ol6=' );
define( 'NONCE_KEY',        'C./5d)${$l#/O@8d,,F*7vVAPiTK)WO@79Yx`ff1GP%TMp0(?NX-x!*xf32&a#m*' );
define( 'AUTH_SALT',        '& N9u9tk|rAhRf!TBX}a6z0hi-KJtk&}e?L<+Ld?:u^NZt~?y67N?%,: AS2z80.' );
define( 'SECURE_AUTH_SALT', '!BN3c;|DbZmc&)5:&/W`c`{o%|saYB_.q|Rp3cw`S_z_?9_=vL6<&V>6uf(V8_M ' );
define( 'LOGGED_IN_SALT',   '~Il*4B-qOi#oU!l?]?lqSvt[tmqp#,RRP/hJ#Bfhlz,@]}-@uD^K]bNH+JkF8-cT' );
define( 'NONCE_SALT',       '+v;1qA(?64{&giz$lfig`MONWC ~2AA*h9s32|Tf-FsU.X%Ml}SAv%MEccY_<^sv' );

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

define( 'WP_DEBUG', false );                 // Don't display errors
define( 'WP_DEBUG_LOG', false);
define( 'WP_DEBUG_DISPLAY', false);         
@ini_set( 'display_errors', 0);

define ('DISALLOW_FILE_EDIT', true);		// Deactivate file editing

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );




