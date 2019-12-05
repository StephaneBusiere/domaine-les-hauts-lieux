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
define( 'AUTH_KEY',         '&-Julf=myV9$~>;:{Dx3Xq7=:i/XgiF:X.yDN6@K=a9dQtm;YBUr7DX~ph6V0P(f' );
define( 'SECURE_AUTH_KEY',  '&f&u2O20SU9h(6/ltsmQ[g Cub>_:qQ)G;tt2)|C-j;Q6vg7!=yz)x)UxJ^>2zZV' );
define( 'LOGGED_IN_KEY',    'hgo<e29Q&M=F/lP)v]i0(z95X`=Z!M$s^=N/.T-??RkPg;Q_3F^aaX<TBeFQHV1d' );
define( 'NONCE_KEY',        'j7KPC0o{5VZ5=RN ^>99Y/4**Ds`wA4DpJs@S($,1e43bOtK?WWc)7mCbD-#~k%S' );
define( 'AUTH_SALT',        'L_C;%utjV?{Bu7E+I8=QaTRwW(FIf_&k%8$mw1Qk!#GsmlaLkGfn6(3y4{3HO?[k' );
define( 'SECURE_AUTH_SALT', 'U<UgSH,,uwi7|6QV*&k?mW9TmmT>,(mXv:;y=AZuD+|J3={QyGvf3S4m+:ZckqUg' );
define( 'LOGGED_IN_SALT',   'htQ^/bTlVC%Ag&6~Il8|FL> MYb^QMmP= Q]ze;gnXAqF2KiLxD#[F.Xmnm*,Y^&' );
define( 'NONCE_SALT',       '@}|s.4PFor-$FsJCaH;V6 j^E4qL:]|=QaX7}S_YV Vb_I`UVg*yM|-17bqSnp_9' );

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
