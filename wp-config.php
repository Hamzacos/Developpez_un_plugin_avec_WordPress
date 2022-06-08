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
define( 'DB_NAME', 'manga_mania' );

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
define( 'AUTH_KEY',         '1@msq|P!OqV=-r S|lM;%v||2iQ3EoW>D88+#l.Qmk%81<Q<)C_)j0FUwf7hAqwS' );
define( 'SECURE_AUTH_KEY',  '@F7EKvY^=wnlTf^fS/K8I FNhy/KK2vJXUCj7q$H>;/SD{+o>ZCQi%/RF>Zq_dan' );
define( 'LOGGED_IN_KEY',    'wT-,-*e.5)w.d1*^S-{EnI(p^hVjI`JRl3O=2h!{i#BsA;!+S<sqYp[~QZMz<3q{' );
define( 'NONCE_KEY',        '(3IQs/C&UU^xiO7PM?D~D3$Pt/|-WGDRHJfG:sWG%Q08xg[n9Ry$iTrMSR+lJ.Wu' );
define( 'AUTH_SALT',        'F;W9Bk5/rkNcvt,#O wS7;T$Lz*d4RO{hCy2ppiIR/=/:ex@}uQ<agNbhz*f(iaz' );
define( 'SECURE_AUTH_SALT', 'Ep3+L0M{GdK%zCX0v(EEKQ(w<HLW4NXR0k9j$,`o9a{)02IPwjWD`&<WA}-xpSDJ' );
define( 'LOGGED_IN_SALT',   'L&m|v|/+k)rU.J5-h{B={4<goLEvE+d8%ywX7FE5r%#.9{R4yI&?OO|_|]`Ba;PB' );
define( 'NONCE_SALT',       '~AQ~;)|6t31SU`gCW0 vs|fLK><x63N4#{7lz2t8C`S~TPV 7:7k$&%;AKblZLGW' );

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
