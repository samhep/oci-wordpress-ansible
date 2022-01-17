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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'changeme' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'S;D{A(0_9Oe`-ohl5d8qthTmBvgj}dxx G<p7SpBDod-sX[K_zb2L746nY>F7NR*');
define('SECURE_AUTH_KEY',  ';<Xt[Zw`jD+AQ#`oH9XUG.`etj7RJV(C_{;*}4_R>BiDk1MY+bAm&3F$BB?R<2fs');
define('LOGGED_IN_KEY',    '.ur0Us6rmaui)f/}V!Pqze!x!Z|Xu|{;QNX)6Xr?Z;>up_e#-O9&?x-B+XZG8sU4');
define('NONCE_KEY',        '^-LaJ|Z9x^Yjy+_zZK3$/URQJK[l>`v)G%4xB#nM5>|~T(]C?GXFb~;8^?Y}g={:');
define('AUTH_SALT',        '0U>FH7 w|bE,v*/a+aJ@hiBK7--F($n+b2Zo%`P+_eaf9zk&/FYKGo%8GtHaCcpM');
define('SECURE_AUTH_SALT', 'p7>dO.8i%fuoS3(j~dpALRl  wZ;$/|Nb-$R)^lEPCE!wodXX.2L%.n>2ydg(A]s');
define('LOGGED_IN_SALT',   'K%xtvR,IpprFTSh:_E).g=1FM^agaJKkO*J|njTW+SOSmeS`OC&j+7cN,Q| ;km[');
define('NONCE_SALT',       'jk9uEF|T(CF:jG0P24Nd?cj4.mpC<gqQGT$pS$O6V*t~d3<mt$^}-s6dTH!Jmv*G');

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

define('FS_METHOD', 'direct');