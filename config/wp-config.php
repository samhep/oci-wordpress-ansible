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
define('AUTH_KEY',         'o!yHtzpBM#76x=$`r.Z<uQ^RUJ>I& A)V41%iKwFR dG9IH/+W]-E#e>-HW|VqrN');
define('SECURE_AUTH_KEY',  'aw2.ug|0E>6-X|t|MqJ79vYcv%dFyhNeyp.oL$1aUj|TTjX?Rt~6|]p7(/nqs{Ew');
define('LOGGED_IN_KEY',    ')-TrG.9KJ~ < ddA6yBhqyn[_+VUSsge_[)@1Yd.|ylfQ| :SGD~Ff#s#*5V-Ka~');
define('NONCE_KEY',        'n2l3JJW;X|B+7,5G_Xd}NRK}Y{2DiP_Q|{+Jsv|~^Fz-_mSw*dqf`zO07OrF~qk`');
define('AUTH_SALT',        'RS<nJ{ZNiW_}G^>Gbh9<f-py883v^j|~o>ho!:}5JUQPj,ZQU?!,+@.Q&M-jiDYF');
define('SECURE_AUTH_SALT', 'n&HwV&47L3-lNpre}~`>xMaA5[ocv|Gyvi=WnW|1,b,%=tlVFNnwwME]UAWt{G`@');
define('LOGGED_IN_SALT',   'r]|x|sPdkf/ecs~-z!p?:[*!KF=w5,*CB74#UJz^RNqc1u+s@H]NH|Peis*^qryq');
define('NONCE_SALT',       '?{4*/[@lCmHv#dI7m%r>:P*X^QC A&V}fq0|{/VV=6tM{xdF#$1l&q3-z1+YnMr=');

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