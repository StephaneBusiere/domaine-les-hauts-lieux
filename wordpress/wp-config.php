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
define( 'DB_NAME', 'domaine_des_hauts_lieux' );

/** MySQL database username */
define( 'DB_USER', 'domaine_des_hauts_lieux' );

/** MySQL database password */
define( 'DB_PASSWORD', 'domaine_des_hauts_lieux' );

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
define( 'AUTH_KEY',         '9(Emv,y>#M6|)XBH&I8&F$&)&6!tVhoG-<f,!a>vnH&Q5N{xI}oSK#T1<kNewxWG' );
define( 'SECURE_AUTH_KEY',  '1S.0([rN.a6Y-4@=2SZsT+)>wWm(gNJmUorj3`eOdS1j`bbKlC/?%rryIl_-98ig' );
define( 'LOGGED_IN_KEY',    '||wwV3,b8m[`iQb}RcM{%eXsMf8`eXY 96gXu@jl3q3cHJNQ={,A^-y!w>9?DO~+' );
define( 'NONCE_KEY',        'H ;X:%.#b%QkKIU-ONxMYc~Vnhl>3 Thngj@fvdj{~]?7+C( X>(~_Lb4_Ip^MDM' );
define( 'AUTH_SALT',        '*e!P{!h8MU4/hP.+@E=e(;DMB*LSiLy_5>mGXVhJ%DF0$J?u,2k{XSZ)TwI0.N.C' );
define( 'SECURE_AUTH_SALT', 'UK)D(n <Fz_6f] @eo$an;V`}zCx9*EGh-Es>6`XrTXde.c|5Sgbtjd@68%CFXe6' );
define( 'LOGGED_IN_SALT',   '+Y9&VFgO0[Y[D,u[Z6H%E0*^73YLk0$$QdCYv1A[Za*WT_61:%+Ezk?bLH40%3j/' );
define( 'NONCE_SALT',       'jx?CSSdX St9~j>B(jLj}bJU:)=rk!XXiYm3wEkJN[H:+GP*R5Xn?s:[B[%mgqaN' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
