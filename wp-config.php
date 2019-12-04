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
define( 'DB_NAME', 'DLHL' );

/** MySQL database username */
define( 'DB_USER', 'DLHL' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define('AUTH_KEY',         'g!cmzs#I~yPO9x(pokKHYMnd{~}sZyO?4~0CAn~H]uExkEOgG3?.65<XC)vt8X[z');
define('SECURE_AUTH_KEY',  'jRjEH*fID[W@sZL?c>}`Z)itg;sc4T@uL.[-YA3~%?xy6zZ [heugJBa?cj>2&L2');
define('LOGGED_IN_KEY',    '<;qYrfJYxpLgpFv;)!^cW*,*+e<oyWTSe/V(ys5R[-cygA@Wb^=?y{q8QMk}E,XB');
define('NONCE_KEY',        'fT&HR1m.=]]+U+)0Q]asD;d-e1H5^<WHwr5XQABUghd,;@>[DGQf,H[i8P.BrngG');
define('AUTH_SALT',        '(jHGWD@mktM|Bz!V/Q* 9%qT@+PR|WOz3E_4Up&E[lqA{K70,V{E84#LJ.)Uyyrv');
define('SECURE_AUTH_SALT', '{QQtIYK8MYzfa7-+BCFT.}t#GzT}^O%z9YJ3bzgodQbd)!5VC.Vz_mJ-OAcq=V;#');
define('LOGGED_IN_SALT',   '!uzU@qx,-CFw7%6Ibd()WMF,=lVz^E^bjLYiFHc|uu1tv~/kf-~-$@E>p=QP*-*J');
define('NONCE_SALT',       '^/nvz3$OoVO;_mstTK=@fc-X*maPiQaDV%CeXZ(][0b&M/4p6+XXv5p;%DxCz@YF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#advanced-options
 * @link https://www.php.net/manual/fr/function.rtrim.php
 */
define( 'WP_HOME', rtrim( 'http://localhost/speWordpress/s01/projet-domaine-des-hauts-lieux/', '/' ) );
define( 'WP_SITEURL', WP_HOME . '/wp' );
define( 'WP_CONTENT_URL', WP_HOME . '/content' );
define( 'WP_CONTENT_DIR', __DIR__ . '/content' );

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

// Je définis moi-même la constante d'environnement vu que WordPress n'a aucune constante liée à cette problématique
define( 'ENVIRONMENT', 'development' );
// define( 'ENVIRONMENT', 'staging' );
//define( 'ENVIRONMENT', 'production' );

if ( defined( 'ENVIRONMENT' ) ) {
    if ( ENVIRONMENT === 'production' ) {
        /**
         * @link https://wordpress.org/support/article/editing-wp-config-php/#configure-error-logging
         */
        define( 'WP_DEBUG_LOG', true ); // Les erreurs seront ajoutées dans le fichier de log (dans le dossier content)
        define( 'WP_DEBUG_DISPLAY', false ); // Les erreurs ne seront pas affichées directement dans le code HTML généré

        /**
         * @link https://wordpress.org/support/article/editing-wp-config-php/#wp_disable_fatal_error_handler
         */
        define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );

        /**
         * @link https://wordpress.org/support/article/editing-wp-config-php/#script_debug
         */
        define( 'SCRIPT_DEBUG', false );

        /**
         * @link https://wordpress.org/support/article/editing-wp-config-php/#disable-javascript-concatenation
         */
        define( 'CONCATENATE_SCRIPTS', true );

        /**
         * @link https://wordpress.org/support/article/editing-wp-config-php/#cache
         */
        define( 'WP_CACHE', true );

        /**
         * @link https://wordpress.org/support/article/editing-wp-config-php/#empty-trash
         */
        define( 'EMPTY_TRASH_DAYS', 60 );

        /**
         * @link https://wordpress.org/support/article/editing-wp-config-php/#disable-post-revisions
         */
        define( 'WP_POST_REVISIONS', 10 ); // Je limite le nombre de révisions max par article à 10
    } elseif ( ENVIRONMENT === 'staging' ) {
        define( 'WP_DEBUG_LOG', true ); // Les erreurs seront ajoutées dans le fichier de log (dans le dossier content)
        define( 'WP_DEBUG_DISPLAY', true ); // Les erreurs seront affichées directement dans le code HTML généré

        define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );

        define( 'SCRIPT_DEBUG', false );

        define( 'CONCATENATE_SCRIPTS', true );

        define( 'WP_CACHE', false );

        define( 'EMPTY_TRASH_DAYS', 30 );

        define( 'WP_POST_REVISIONS', 5 ); // Je limite le nombre de révisions max par article à 5
    } elseif ( ENVIRONMENT === 'development' ) {
        define( 'WP_DEBUG_LOG', false ); // Les erreurs ne seront pas ajoutées dans le fichier de log (dans le dossier content)
        define( 'WP_DEBUG_DISPLAY', true ); // Les erreurs ne seront pas affichées directement dans le code HTML généré

        define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

        define( 'SCRIPT_DEBUG', true );

        define( 'CONCATENATE_SCRIPTS', false );

        define( 'WP_CACHE', false );

        define( 'EMPTY_TRASH_DAYS', 0 ); // Je désactive la corbeille de contenus

        define( 'WP_POST_REVISIONS', false ); // Je désactive les révisions dans les articles
    } else {
       echo 'L\'environnement défini n\'existe pas. Valeurs possibles : production, staging ou development';
       exit;
    }
} else {
    /**
     * Si la constante ENVIRONMENT n'est pas définie, on arrête tout
     */
    echo 'La constante ENVIRONMENT n\'est pas définie.';
    exit;
}

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#wordpress-upgrade-constants
 */
define( 'FS_METHOD' , 'direct' );

// Je désactive l'installation de thèmes et de plugins via le backoffice de WordPress uniquement si le mode débug est désactivé
if ( ! WP_DEBUG ) {
    /**
     * @link https://wordpress.org/support/article/editing-wp-config-php/#disable-plugin-and-theme-update-and-installation
     */
    define( 'DISALLOW_FILE_MODS', true );
}

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#disable-wordpress-auto-updates
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#disable-wordpress-core-updates
 */
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
