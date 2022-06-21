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
define( 'DB_NAME', 'homepage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5#B7;;%0_Z7B@+%7$9FPt#LLkqZIzo;X*WQz`A]O3rfj?V3bU!$<Ht+TQ=F@?.QE' );
define( 'SECURE_AUTH_KEY',  'MvoHO#!PpSKD)bmux|R<zPE#@xiZ_]x~&1.wcO0tHk8>6*oSF:? S[zCb`&pQaSC' );
define( 'LOGGED_IN_KEY',    '@/lMCV^rYhaF8vnKBA,;1mkZp,;n`#q/kt4mGMB!n2UH2ac6`|f$;<DR]Vk{<;p:' );
define( 'NONCE_KEY',        'g$81nQNk7T[T??N,g]3$4ND?6h567Hy60:2/}bj`A;9jFjM0-go:QqhW8xs]^Ef@' );
define( 'AUTH_SALT',        'Tm(&43v;=|fFl23uBaM8ORVBE=**WLF&@DPfn(bSnF(%w|.Ac8E<U1?&T=3tnc~~' );
define( 'SECURE_AUTH_SALT', '(/l6}:N;{j!/g.i>`OTtgC/5oj:??m3HhsH/LN!X(%]=e l5v/8$)Rv~;4OBIZ}D' );
define( 'LOGGED_IN_SALT',   '$S)91!/{@1qCI*GG1$0EyH9;!iBkNQWyZ:Z&* Nxtp`,rq|AJ?/?RsDo&eUz;8s,' );
define( 'NONCE_SALT',       ',qzqYv{RC +lrB4Mo_[o4R55vXBh,H@AfD{|.&|BNy7?5`t+u$e]&XUz#r8/zpco' );

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
