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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'h2a' );

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
define( 'AUTH_KEY',         '~kE#f?/0f7$:fM@$[HW.qR7Q|CFN%g;*?I:TJl7{_^m9Fs?Q 05+*s-AVI;jQ<}1' );
define( 'SECURE_AUTH_KEY',  '}70U$%YrW Hx4Jzl}N*@On(_mV<,K+t%j3vOB4]%yba#K_Vvl2::$WuD%IcagpLa' );
define( 'LOGGED_IN_KEY',    'elY.ufK.!X|b!PlAi-mgB*4XtaOrx%H]0F/pz/e#@(3 51EVzp|`O`6i;<3RB}vT' );
define( 'NONCE_KEY',        'veOQR2Ly9#_}xxW|2aL~OZt(la BODU`26*9cDL]Efnx)l/0S;segGCHEl94t(2|' );
define( 'AUTH_SALT',        '[ :=F!unuz(-ZI=h6_(]GFM,/+C!3l;H@;bgz#u!zU#)?Hl2a(SGIQ?UAd&t+P9i' );
define( 'SECURE_AUTH_SALT', '5/rp[aduAowiS7<#1.n#d|.<HOc.Ii8~-/!Xs{47mB@v(>r*j`,@]P7WSM2)EOg1' );
define( 'LOGGED_IN_SALT',   'g1?hX$W@#dvzF l~`Iu~cP|#MktBnDvG:}X,HsB%P@d_sMjYPik79z&|E~Y8y1)U' );
define( 'NONCE_SALT',       ']4Zz@$K6?SqB;/!SX}1X{(zn81U<&w#X0 l> @%9X5L u]6UH#WIQ&*Jj(vi~4!.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'h2a_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
