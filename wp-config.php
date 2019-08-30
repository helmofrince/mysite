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
define( 'DB_NAME', 'helmo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '9-+*-nC?vhfr1 3^L-B:S:1u[Twn-fD@iH|f8a}W$>vd$Sj(rpRD. p|@l>SUh%S' );
define( 'SECURE_AUTH_KEY',  'TBlz(YiNzhD@Ia^DUo~v`h<Z{T CkT1k{`Zw0xF=omb_uU+z;{D:;A]`V<)@fP{M' );
define( 'LOGGED_IN_KEY',    'l656P#fT %WzW*p:#pSZz>pA#]8%#)wCb-fP(2;$a@bFxZZp1uFrWR0Xd{nVd,aZ' );
define( 'NONCE_KEY',        'FA_Q%CAZ<q=w2.qx0^fYhN(8v#k/f!!ecOum9,::[/1p<Z7}*5rZ+p[>~oCu(!O(' );
define( 'AUTH_SALT',        '/.2v}7r3#D Lb#{rwjk|7ZJ~N;nUPCqN;_fs7j_u?D[c#:^=hXP$@8P`&O54%CTv' );
define( 'SECURE_AUTH_SALT', 'JC4Rt/O,6yq60Oa{2W,x(I=a.$J|e/7Kh]zH(k.6</SM13&.h6 +olc}aC1#~ip|' );
define( 'LOGGED_IN_SALT',   've-Z-`3?S9x&%r9C72b/<2%z!1^$lu%1Ikd$zo#&H#A#/s=A(dGVK/p&b3]xxsVi' );
define( 'NONCE_SALT',       '@iOw%0GKEsM?vy+M^tiM#(858v3dB/w>[Af0({H-UyG(m9Rj6I%^R1&9}O}-T-~4' );

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
