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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\TW1\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'tw12_db' );

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
define( 'AUTH_KEY',         '=z~k_FMb(%:sKgqECIxr5t[sT#Si%|Tw/!lz#]BI%(64G)u8!cR,g[-YYi:KcUP7' );
define( 'SECURE_AUTH_KEY',  '<%lg_w[ZA4_.)ZehT/lKJg@2?AlbWKffNrlbq!.K/>,]9[U;dc6S3A-SOHFx-|=0' );
define( 'LOGGED_IN_KEY',    'e%S9p+IE pOpLU<6&GFTzatd_!h/6nNI`yYKWx1bF^@|k}uZXDCSf6Vmq>pu}1:D' );
define( 'NONCE_KEY',        '#(E5,g@wEJdFTP5~qqwDIVnbhg%#ZSa=,3dQhoQsU}HoFpgdj-G.Wv#W[5`&ADug' );
define( 'AUTH_SALT',        '$ewNUzEDGG!aMgKX!OVqIe0Xhlu;U/OF@w3exsnIIoBp(R`$ *%1NU.SGV<DXHcp' );
define( 'SECURE_AUTH_SALT', '$OaS`/OfF=Fp>bQ XVx{}QrZakV~UO=U_}`&qz)RZ`uc1ERp)`Gm2=;.=.or.#Ib' );
define( 'LOGGED_IN_SALT',   '{fN@_#4Z}5qGS (lu#}S]#rk2X7SVEW[/;+{ugN{RBvr|nE &fsD^[VmgwjlheC+' );
define( 'NONCE_SALT',       'h8kBgFt(U-oG$K$e5:h7c3DFr!n,|_}urJ.??<nvny|,oJsS|!B3U2a0Rp,il?c:' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
