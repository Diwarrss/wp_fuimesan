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
define( 'DB_NAME', 'bdwp_fuimesan' );

/** MySQL database username */
define( 'DB_USER', 'diego' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Diego2019*' );

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
define( 'AUTH_KEY',         'C{Wkf&vy)6uHa1@|pV++X-vDfa3`gWQ-QAn|]?ou+_P,8 9Y],e#ewi.V]/4`ms}' );
define( 'SECURE_AUTH_KEY',  'w7?WlQSn`)g,,vgjHF:`-||wkvv23=0<,8pKzpS:Fl;_7E9T137MY~~aM`g4ylMk' );
define( 'LOGGED_IN_KEY',    'xF*^c)/wLUG:Q`WcO]fO3((>(->%v?B>U8rL>>/0pwavQffaVqGJ5y|?-wKBnBZ{' );
define( 'NONCE_KEY',        'VR{@Zz1Mw!]zv,2v$hDJK6eL1X>DG5PMBa%i}w5xT|:H@<4E9^j>P7976Q2&&<n1' );
define( 'AUTH_SALT',        'TF(kx8Q=<?rnUDd(fwS_#/:i?m,@sN6^wSt-+zx[uQ$<~$)X Z5eh8j@Vwa&3?*d' );
define( 'SECURE_AUTH_SALT', '}y)WN9kh>5T^rR!3I/=-!>9q8YX<Y-@$Z<&#R8XV%j>[$XC#lEpP)`r567~.v`UW' );
define( 'LOGGED_IN_SALT',   '~28}9*f{v]BS&!S(|EI}Y<8[;^rca%1*ePXQl4m;X4U7f8$ubf%pv}05jY ~<@_K' );
define( 'NONCE_SALT',       'R*-4o0<WZ6@04LZjikJ|$%Z^+oJDqBsuTw~)H]Y0*yC@(&&n~1]>FKgO6&Cd3pR_' );

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
