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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'sakkus');

/** Database password */
define( 'DB_PASSWORD', 'asdasd');

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//** Redis cache settings. */
define('WP_CACHE', true);
define('WP_CACHE_KEY_SALT', 'sakkus@wordpress.com');

define('WP_ALLOW_REPAIR', true);

//** Try Redis container */
// define('WP_REDIS_HOST', 'redis');
// define('WP_REDIS_PORT', 6379);
// define( 'WP_REDIS_PASSWORD', '$REDIS_PWD' );
// define('WP_REDIS_TIMEOUT', 1);
// define('WP_REDIS_READ_TIMEOUT', 1);
// define('WP_REDIS_DATABASE', 0);

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
define('AUTH_KEY',         '$le}%D]3Q 8m!qKXur&{Wy!FWcttZ@wbiP 9?UG*n:N7A]$^*T{0;rmQ<SW$2g!w');
define('SECURE_AUTH_KEY',  'Tkcf2!I3MspLw)k<w_qn$d_]+-VUY|(^iXok.]_q9):[Y?+l,;2whxOYz]y en37');
define('LOGGED_IN_KEY',    'H@?{R1ycv}y1^S[I0K!c[69Sm/qGr{cgNR2{eL/N=sFL-yQ{+7&d.l.#$7jK97@!');
define('NONCE_KEY',        '~=o|D9+e2gbJ_%|MIg(B#R+!.]t]i@D);rzmvf>.oBNVJ5D:>tPsU.c>--;8=a9&');
define('AUTH_SALT',        'eIWK,]8h6J-/P.Ny_6?*CZZ53[Jze6E1aL|j9pPskg]E@r&ZqKFH:oPNo$3U#+Uo');
define('SECURE_AUTH_SALT', '{U]85mFboSPat* *SA+W:1(L2gdqo}%1X2f%Q3XS;|eQfV?Qf*zz}~NR5Ax{iog.');
define('LOGGED_IN_SALT',   'I|L|#-&>d&&j5S[G#m4O5FFPOm)R?>Pi[6/yPN9OdMsjPXgc91!T+=j-O`h(ON{e');
define('NONCE_SALT',       'S |-:+oVLPpop5og0T+@_h00zfQN:6*`Tj*|X^-V5y-1t-Z#g3S!r[nm|+RdU|~@');

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', false );
// Enable Debug logging to the /wp-content/debug.log file
// define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';