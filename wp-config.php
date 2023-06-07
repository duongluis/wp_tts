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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'timetoshare' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'uGXgk~RW(-!OF9v8ZY8ibE6 1)Zi&/>2)X@cIA6B_-38=>|Kl2+@|:7=w[m6DL@-');
define('SECURE_AUTH_KEY',  '@9}>]-Zd`VN)Y.ogerxt6xXs[^lM5w{H_Ma~lW.K5zHDM,x|%CH]X f6~h=0Wz]Y');
define('LOGGED_IN_KEY',    'l&%Ki0S,~t-k^8h:?B---f&l+>VIxYB&^)+[7-uZl&@Wc48iHN-)+B3w%Qm+IP}3');
define('NONCE_KEY',        ':$k7guA@<Q^:q=`uE^<1CxQ_az.0$RY78}NwU#QOGM+p%U{A}xo/<RAx}%u5G{!m');
define('AUTH_SALT',        '=$7L.Z|<%S$%E0:~J:N$uM:YuGa}N.hu]q=QiMkdM@e=RsvP{fo6~B8QHcCdI~GK');
define('SECURE_AUTH_SALT', 'sRO._efAKABu=WK#1C;ZUlKA0~>:^18M!]6E:}C`_Cnag+!5c6d_2Vqd-kiu==_2');
define('LOGGED_IN_SALT',   'I*-&[z`=8faB@{LCCqyYN2o+w#2kFB849z+F:-6;4fWP+ba,)/VF*Tu6TKE2|7_A');
define('NONCE_SALT',       'Dff|&$#90s3[}IteNE]sc)S(W/j5{+V@-=^Wo!P#;x}aJsWMhbbk8EN$bE-cCU;a');

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
