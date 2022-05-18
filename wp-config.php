<?php

// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 1);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define('SCRIPT_DEBUG', true);
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

// Add support for reverse proxy
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

define('WP_HOME', 'https://datalix.com');
//define('WP_SITEURL', 'https://datalix.com');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('WORDPRESS_DATABASE_NAME'));

/** Database username */
define('DB_USER', getenv('WORDPRESS_DATABASE_USER'));

/** Database password */
define('DB_PASSWORD', getenv('WORDPRESS_DATABASE_PASSWORD'));

/** Database hostname */
define('DB_HOST', getenv('MARIADB_HOST'));

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '{TtPrw?Aj7]Y$g{TH&i|i*4AFziHMs{ps,veYj7gbnb_tJCQ7W~(?,^fI.8,:!9*');
define('SECURE_AUTH_KEY', 'Gj7aV]-*6`g;X*YtqA_nEZ(T$s{%Ag9q_Ch%W{s/[56.9_i1$f{Q@&8cjX{xb*Nj');
define('LOGGED_IN_KEY', 'TuSmN[_Qf;!E!VxA[{r$uP,1YmrKi+FZxNEnhSjuKxF@P!P$zqbj`CI]P1??b2Kk');
define('NONCE_KEY', 'Tl^.;sM;M** k)QEY[jR$HNG^ 7>HRDAlN.,K2b7{#&S5iNu]`I SU*r?{x%7h+g');
define('AUTH_SALT', ' K)}-/_]W}0%f{K!hD4@ Q#UJ>WU=JRmfJ xCo)6.z{mOPyez7`Gd4/ttmF&p-rp');
define('SECURE_AUTH_SALT', '8qYdx*EI&8-XU;!HD69}Cj=~wrO[+KE8/o q8>W1H93P-xn:hYar=6WEW>/1i^7{');
define('LOGGED_IN_SALT', '59zRtX]&)?DWlMF9u^H?3.{pVHX[T Jy/M!]]l]oCQ6/>P7rLtF01JWjR+C3wt_.');
define('NONCE_SALT', 'pRjx!g?X,fG*Ib?25!0J/)(GMNNQ+3JjFmD4Jolr,shzIHyH!P<V1w,xFPB73muM');

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
define('UPLOADS', 'wp-content/uploads');
require_once ABSPATH . 'wp-settings.php';
