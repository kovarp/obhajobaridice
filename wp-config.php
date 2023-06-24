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

define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db');

/** Database username */
define('DB_USER', 'user');

/** Database password */
define('DB_PASSWORD', '123');

/** Database hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '_$CD2`$cn[HG/L/B6qHVmfKg_F(mCQ+C(X3W}9e[HB6e1;.<Lk@g$sZWv&/qI=Vh');
define('SECURE_AUTH_KEY',  '&wCrXjTc6/soms}R((1:HYPLkfZp-pT&#>0/ @3GUt_ra+~dmC^s`c?9h [2,,x>');
define('LOGGED_IN_KEY',    '~K% 7$`yi*:tImyQ=4A3wTdiB`6#q_wp:VZtp9O;6qc3T>CvNh(HL%fnk[|j=#@$');
define('NONCE_KEY',        'p zzmGD,Pd?xOR}lwH#]%EBplZ/(78KVr{A@Blp?U#lA:tCq.Cs/MVVyN&Gvfg!=');
define('AUTH_SALT',        'k+|^+E#^gB7v$<<?nuu[|.c5)q30YaiT$Ly~iK*E)e&?lbzOt%Rw1knI7u0xcz]@');
define('SECURE_AUTH_SALT', 'uj0s9}~(=K)B?&C#HiF71AaVwtNJ]bzJ9/([f6xJ30@X4m/w(olFS(&G[UL0xc$0');
define('LOGGED_IN_SALT',   '3DMDk>,=/N={aq_+9<MG{]IE$Q@,1ECl#%}kjZwKOM#&sQq(?U{S)wHL !3)Uoru');
define('NONCE_SALT',       'IYV`~glc7YC[FKfdGx?Sjr)BFx1A%j1s|tdW;#XH&06v7>dC+_J=<O%84Ub)r5lz');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pm2_';

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
