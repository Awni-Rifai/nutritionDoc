<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'nutritionDoc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JuV*.O]HY^I -u%jvnF!qsc{/b5pC=8MzQt8|2B&=RO6bDP0hi/O*aLmrg5FN;[x' );
define( 'SECURE_AUTH_KEY',  '1,CJ3)8hkHB.LPmd+rx<6Ju8b&Rfb8 [`Q#UB}tKIwR_)`4?(aRR>@T%[jD=1+_:' );
define( 'LOGGED_IN_KEY',    'n[l*z^I*W-k}WG=WCS]_)C[AeGpp-hP{vgSWA)h{k nf}S/MP,Pj1(_yc;[Jza0K' );
define( 'NONCE_KEY',        'X&2LBP@k-8c(;DgDDtfm8H%V7e*KD^08EN?;d.RYpZ):/DS$-m+/da+2_Tv._YZn' );
define( 'AUTH_SALT',        'oKV8j)8(^{USfeR8-Snv4mF(<]8N4RB#>DxVPLH6~h0Amll`}+*0j|8Ct[sRH_NO' );
define( 'SECURE_AUTH_SALT', 'e(N1?0lT$9GFFthBBL%WM{1r/t3<)3&a.joL)fDPFx0uY(y(j0p.cV1Z%k@RhMq^' );
define( 'LOGGED_IN_SALT',   'xyZz[PuET$BKZ%Y *[wM*^<EgoqpMfc9-aP|(]:[U@K)>[1F /!)6w:vN1ouQB}J' );
define( 'NONCE_SALT',       '#!yyQ|e}~2DG|Z.]M`&FvOO:m@,cChd;DkJk<Cn=e{{ nn>s=n9_I4zLg $0{Hc*' );

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
