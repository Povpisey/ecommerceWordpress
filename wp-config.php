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
define( 'DB_NAME', 'Ecommerce' );

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
define( 'AUTH_KEY',         '!{AVo*RI`*2E;zw=m*C.QFFar?H#>%.>RNZbBOR&%WHBgaz80!(d5A=qsM.G-BRq' );
define( 'SECURE_AUTH_KEY',  'VZnECbwFx$voqBOt1u#aY1E`(5c&Sbu:?<g>Cm@G2kra8Z,I)R09PVt)3D#k{~x)' );
define( 'LOGGED_IN_KEY',    '!Y{p:W~3qb1,LJ+2{Q|3XI*n{0{o[/=$w>ffk{hn!#SdY/20C;+g{+Y>~.A]e;H)' );
define( 'NONCE_KEY',        '<ocAI[&TV3MyJnNSQabt_oYHC+k{bh2}F!?62dIBmZr;{[bUZQFT:=qu>$O>XG7&' );
define( 'AUTH_SALT',        '|3%#&0`AL!E%6@3.*Hj#2<j@}4:_rmsD0s(hP]J%T4~C-s36]2{jn91{-|~G1;kE' );
define( 'SECURE_AUTH_SALT', 'e]HGA_q5,+A]U9zk38yI=,Ed!{<2K[}|a<Vr.;;[#`Rqy]Kho7AkNOVt-fyNScmp' );
define( 'LOGGED_IN_SALT',   'L(u_Ej/cS93-=kQQ9zO!^y,&;<vNDrFWYUu{>g)k}{,(tXE/*$CWd5P`R|!gl<?J' );
define( 'NONCE_SALT',       ';-XhJ%1DVuX/GNJEQVzLtD24%m5;G{j1_99f)4f8L0V?lc8{.,Xey20rvRP*IsE~' );

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
