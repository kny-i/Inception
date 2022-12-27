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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define('AUTH_KEY',         ',fjgFT%N_-.C|<Tqlnx.%[JYB0AKYnYIn>$$;K3RrzRR9&/5h[5V`6_H=Q_2+*8w');
define('SECURE_AUTH_KEY',  'sBd-qj@Y+sJa#7SwpX#aHW<:R82n|hFWN1Y-g1vE-S/GaN9;9GN_)C.j}BYTkQ|t');
define('LOGGED_IN_KEY',    '%%oXAC#>MBH|q=6;qY}f1V]8ZU&!SmeIN8DRR[?[X7,qyd!*| F~&-*yN5JC}RUF');
define('NONCE_KEY',        'NAR<uM@fIP*rXO{B~b2.EZ*#}7xbK#+sRs4=<AYH+{Hd>ir2S];S-2A/j|?^2+-g');
define('AUTH_SALT',        ' HGox$`I9*Xc5Ukpu,{*?Nt;2{U%SG:-ttu8++b[{E/+HT9DovE*M-((eW&(?vo{');
define('SECURE_AUTH_SALT', '/e!&V)xfArTD|*LX9[f-G>Zr@piSc>7 C;Vh r;G;)+Sx3|LlG{89oe{1; 6iTUq');
define('LOGGED_IN_SALT',   '#[!F3gsFXM6Ef0@CXV9}K6<9lXMkOvv1`S%km-WfQ#c0POM-3@HNzXY,oe}X* 9S');
define('NONCE_SALT',       'N}Ein%xEiou2AiAA$ll=|`?[BWZ+9MtW+Kri|zh}QBFd[1|r;S>6s_d-:Y_n]y0b');

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
