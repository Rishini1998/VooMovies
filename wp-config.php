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
define( 'DB_NAME', 'voomovies_db' );

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
define( 'AUTH_KEY',         'FaaJL7Cn*b!oHKnJy~r-kc;aeF&(nii68D8[hugeXAQI[V/q7q.sCz}4SEMT FN6' );
define( 'SECURE_AUTH_KEY',  'RT4YH}MMk/|vs<85&_Q:x=n*[9nN?J-)~LmN:W+ilh=D.}2C<JB3c0s+~ w(.[6!' );
define( 'LOGGED_IN_KEY',    'KXzQJ/O~>qh#c)}5|xnQV&9-H5q+X<eO3K<@XJqKS])v]n*4!2cEtcw?t*^[,K3}' );
define( 'NONCE_KEY',        'y;7G3?pi_N?KzFXrHpxPGX-d$CuH47G}qB0eRgou`m}T4v1))* m]FWXFU#:PaR3' );
define( 'AUTH_SALT',        'IYC9$&KC&}_SCYqglh{%XZ!C -bo^*xQrMRR_Z}eN)e5LJkQ>D2*.+a2%>+WJCzq' );
define( 'SECURE_AUTH_SALT', '}iNMoatUDN:Dt{PN#4!-70.kgNova62.j[Z4?k`h1l8eOO+v)N*BG/PqEa_P9njk' );
define( 'LOGGED_IN_SALT',   'Qqma1OS4YKh%v?TML?yRkUv1g-E?`{};U$IfWZ7uqkj66Z90K$269$EJ`N`iBi[8' );
define( 'NONCE_SALT',       '`=fEJb$AfLtz?5pzVOQJBKhn+H$4(<`TXf|S!,a{}OL^i2VudY/8x4D%//A<(2.!' );

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
