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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%7,/2{|n=(4]UUq0B Q*8BB+49>nV*^ip_!jO%1*652Ak~Q`;OBd4:kPZ@43=U}m' );
define( 'SECURE_AUTH_KEY',   ';R(D=jHAT7Zk{0pa[P,bR[vcSX~*Pi0wJys(,S*;>AYC*9`&.1+Vk|$m@.=p6Udh' );
define( 'LOGGED_IN_KEY',     'b0j:-<3(]o:`(`(C?7TSpmnZbV}*hMFUs]5.YHcNd^L7-y}IOvfZ4]/e|uW]~aq ' );
define( 'NONCE_KEY',         'Yw,BP[fj1ZFqH~4OntnIN91+RDJ+*I@#RqTe/QMweKi0WR.Ru}(@Lg?&E~VJgtMf' );
define( 'AUTH_SALT',         'R%K]wwM@_~[cas@sh$3bG=+KLu*&e90M2|)$AVcu8YpHwQ2>Bob-<=Q -o01|@dw' );
define( 'SECURE_AUTH_SALT',  'vces7V<aNor)#m9Ixrr_9bT/FhCN;g@=MDBd2^FdbIB&<.abuacu#zLh|XBR2fUO' );
define( 'LOGGED_IN_SALT',    'omgbC6WWaRa*aVQDMC}fGDwTXo1t4|.aF/-+e[_v7Jp.|qWg!5f-a% JI~cJEN!R' );
define( 'NONCE_SALT',        'B@>@/(&!B?,:u1ez9Te|]K.%z=907 }qhI]-wS4&tk+4jYj{}6i>`hsDcB0d*Va ' );
define( 'WP_CACHE_KEY_SALT', ';IU,/YP^3l^+v)Q8?qYMK?ZMx`LeAef,jm:/[47Bq}PdS&>q.t HfZL@6ulC~oMZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
