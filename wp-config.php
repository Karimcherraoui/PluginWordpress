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
define( 'DB_NAME', 'Wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         ']:2=Wm^?T}KqvjWkpS!R|z:Tv5>LDeb&^3xAA`Y_{DKXMe`xb xd?,d!Nm$RHLgW' );
define( 'SECURE_AUTH_KEY',  '9#S8f^2Vu-;=HKT:J5IVm!kHQceLlb[ppRO-8jsdX#;nh(:DQ >ERMhAxK1$LZ&;' );
define( 'LOGGED_IN_KEY',    'quL|510,Riz=Q!1<Yc{,Gq1#1`:1;$KD+vQ]hs=:K4J~*:AJLpe5pys@LSy.e-g4' );
define( 'NONCE_KEY',        'U]8AuzR+AR_*V-Yrx7iHQ:&jCmQ#v]]:?>Xy7c5{Pv$fMK|W1fPf|j]XdIm!C9@@' );
define( 'AUTH_SALT',        'hP)YnCv_+f|F`#^1~:<i ?!^lp;0KS4JZNz:{?v<ii0yoUCM,Tdth#o0*uhj<C~_' );
define( 'SECURE_AUTH_SALT', 'IFnL73V_E.MI?tW-2ly0+Le.,=He@rJyQ=L$QDs@)K)b024#C)L~/Sv@$/mSX4-d' );
define( 'LOGGED_IN_SALT',   'Y)lcaFyFVrj)}35`r)l,A5,?0M>51o6u<&4~aH,S,psI&1$PjnM^&G+fVVFH[!CA' );
define( 'NONCE_SALT',       ')X:s/nV5HybX. !fUguZG.{j,6+-e-ipAAV/h&HN~t}TC8*<%*L,m;jiR]0K=i1h' );

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
