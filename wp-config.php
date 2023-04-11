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
define( 'DB_NAME', 'dgo' );

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
define( 'AUTH_KEY',         'fK?IJai-0@[K1;_4$S*kQ Ek!Vx/YZqJ2tasS3?l|u uiMetrGanPz9;~]!r%Nci' );
define( 'SECURE_AUTH_KEY',  '%]TG=vXX8-d<I(RZUlPyZR.D<J k|$jP>z,Eui+??dP{Ukw;$d~!5LfmY3B~u<XO' );
define( 'LOGGED_IN_KEY',    'P%_F<A hBXR3OM5h;*$Q~Rb-$+xPZ4mf<,naUi,Dg_F_;YC26`Pu9jz!Zh$=w >m' );
define( 'NONCE_KEY',        'A=DrPt~69S9$]}cIFfpuJ7~X!(,Yjb~{<`1ha$XPj+C#8.I3]JYl1F2i1aZI: 1}' );
define( 'AUTH_SALT',        '|M+5x&HMAk/?L36urOw${-hGK~e 7~)4cq.DePs*}]d3JgT qi|AM0MW@#y9[<#y' );
define( 'SECURE_AUTH_SALT', 'Ceb(fr3_bHL;L+Lg-BCd?Y*uf;e&Z# +3!|:%5Y;hw3tC54 @NM^M&GS6#oO`%)J' );
define( 'LOGGED_IN_SALT',   'f}L7VmfH8BW)@Ui#93keoE3d^@1IVF9lk?foH?X$LYD;4b2hF)}Mvc9e(u+B$FtL' );
define( 'NONCE_SALT',       '6uX|8nw8W@gOymYQ2g&WQ=LQ1,}t@caQTyK^&K>nQkZ#y_)38Gchw/x,l|#EYU-U' );

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
