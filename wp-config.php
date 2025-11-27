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
define( 'DB_NAME', 'gupta-skin-hospital' );

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
define( 'AUTH_KEY',         '*fcZo%pXklFO&Y]nVwgv]qjdIt69;V*A)6>V#O{^6QR/3!==q,7ly(/AR1Nv#_<-' );
define( 'SECURE_AUTH_KEY',  'a.Uhxd$_V`$0J8J1{jXW863F&X;_F#D-4jQIBM=F;jtF JS:5FN DrqC%+rt^L]T' );
define( 'LOGGED_IN_KEY',    '@:7qK~$MUc7xL:yR&ga7aCw3rmv+pmo_|l>PIom)u@$$FR~p5nW}Fmzeqp9!D?n7' );
define( 'NONCE_KEY',        'f[Yp]vHyM a4=.,Z 5?=jY))_2JV`lGr<VD M].#@v5p-`@gYe`)@O2</Xmqu@;R' );
define( 'AUTH_SALT',        '`;eGqPgrX[Y=>%V4iSshe40Z`Cn:_|ZeavItw1ybN=D>y $}rO;j-Z`/J8j_Aw>m' );
define( 'SECURE_AUTH_SALT', ')g.GN5~*-?H4^<e[>v$SJj!~!on=/Id~:m,_@j GrQ*>]j&B#i8P/36sFn`@%kW0' );
define( 'LOGGED_IN_SALT',   '{,%jIV]Tz+Q_Z[LMHR`T8ich6gsG5q}pOHbE0}(z1x>l&UWwN>kSEJ)TaCp-}sfc' );
define( 'NONCE_SALT',       'EAWVLIxnfvFm#pS&+S/IKoubOi3P}l4M1Dby`EA!l1K-hc+ {9Agwo1*AN%;=?46' );

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
