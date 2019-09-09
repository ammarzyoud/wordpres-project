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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '-9m>5+n5.rt77Ktwkli[US;eJt;6MLGv.#4Wa*,6FPvFu9jMI-8)_jkGK$3c_;8Q' );
define( 'SECURE_AUTH_KEY',  'v@pb7A&qH:c_ub`CdT-#hF+Y0V1Q,`!TE5vP{Vi1<DxVQO<g@K,psM$o9|zlbF9o' );
define( 'LOGGED_IN_KEY',    'w3,QWn-%o_t(0(uI1nPI{On5d@u)HY{T$9k7xhPtWs|:YcfN7;G6=Iap[|[1<+`,' );
define( 'NONCE_KEY',        'wOg<++1/JLUQX(o3=`n]yu#vb|R1s;%2@l4O^`=O]N!RIwxhRti*JJw1PUg/rnq$' );
define( 'AUTH_SALT',        '&P|E (f;pNVxl*?Ib7Zt7i=|mLwFBR)|2(;qq.#AJz9)$L}==k }!ciWn{+m|u/E' );
define( 'SECURE_AUTH_SALT', 'Ci!XBnGWQn7+pU]+{.dZurMhmK{2if{Zw%|.Ku1d~:zR[w@ehs,uOM#rMrSz]-`_' );
define( 'LOGGED_IN_SALT',   'Q& 0F<SY=YTo/x>SimMQ{+Z(f(1%8^&B=[7tI&N|YgeBtlM/gqqUe J`qupiN[A5' );
define( 'NONCE_SALT',       'Rd[MwR%oxTn?Bb+dx!?HXuS1_w`+wOOF`,rDv|b#w@28e|HIoqN)U +b4x6_X^xn' );

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

define('FS_METHOD','direct');