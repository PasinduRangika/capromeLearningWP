<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'capromeedu' );

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
define( 'AUTH_KEY',         '.b*x.0w(AkPY,{sn^m@&$)eX>.bT$u!iEt/qGL#x&WGh]bmN$FMUq;DwB8OLYzUy' );
define( 'SECURE_AUTH_KEY',  'YWmp`j4$]u[mh+4P}7/<qXj?S}GMG7(KC]h]WJ^96xh,QrU=PX76!egu:QasKI}_' );
define( 'LOGGED_IN_KEY',    'lsr1K3g7Y5UeRTQ&f~?yj(H,qx-#:80=b%1y{KgIowWgP;pm>osvsmN=@hC|Th0.' );
define( 'NONCE_KEY',        'gEm?iDmz#-7(B@@X5{]]RC].@RRZ*w7hC/Dk=&XzjQ[>jFE pQiCf`K`!8F1j@q_' );
define( 'AUTH_SALT',        'F6F-pkA~8p%~U=1PohF^^sXePT1T./-t@{e?,)VqzV&g[Sw>&qjY/g|Z<`(_a:qm' );
define( 'SECURE_AUTH_SALT', '9h0)GQ[,97lUbz#a!72hn>2b0Z3!@?oB,sc)$};m-{2`OjlUF|V;Eo(9saWB|m$X' );
define( 'LOGGED_IN_SALT',   '>kdlnW&`yBCmjZdnyqMt6z.z9^-.DJ  Vq2E/Hm$8x>@.][T1G&}qN`60<vr_Vp[' );
define( 'NONCE_SALT',       '[ID-^Fa<wva)fXbE9^j<]F}FkUlmWu[%+CuMxO@`N=ANqbzSbKt$p1D+U>p&VJ,H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
