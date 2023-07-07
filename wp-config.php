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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'programming' );

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
define( 'AUTH_KEY',         'A38v=aPh5A.|kmcey|!K`x5/;UPbFFou$h%R~.ul8jOok[$P=pdc>jq4C(okx0CC' );
define( 'SECURE_AUTH_KEY',  'GDQ->X6bfSG(ebZ:$d&fGoWQEI9Vw!XcF^*=[`Q8g:T/hDJl[(I0h3I9B|5IV.{{' );
define( 'LOGGED_IN_KEY',    'ciz=CVm++UqZ4pxJm(q:PR(5oD0 04)`SAL0t(|h!e7%Umm|*-_9,_i=g,)=}GV:' );
define( 'NONCE_KEY',        'VLqy`/4^EwC&D9?YyOC@f[9+=$Z9N|w4Qss)=CmrD;u-}LA#J$5kQI4*;N?7%1` ' );
define( 'AUTH_SALT',        'L9>8taj_,HREJ<kuCR1?z^Wn(p]TqU(mDs`.Tq.p+4`Fe0+.wwhXWj,Ye}GSqf`?' );
define( 'SECURE_AUTH_SALT', 'Y.%=r0$h3tJFOZMjtY}xWb*F$y.(v}P=_YF]qhKY:iiQ;|L?i]!^68/Zs|gMec)V' );
define( 'LOGGED_IN_SALT',   'G2|>vr~A-K ^$Z(^~zA`@M~wJ4,;O!hK W+,GBI*|%M4?AKak4`+nurxf^>%WlO5' );
define( 'NONCE_SALT',       'WTzM8|I:0DG;r~Thl@bcXp9G-cAI>DEV/$NWw(XP[~wmA^Iz|@?y5{FKLD.3O=36' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
