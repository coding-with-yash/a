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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'v|d; vJS{rx5+C~ui++MQ,3(*ty}xiSE%XRdDWJq& 8$r;ftiW:WZlTE ]1#5,Nz' );
define( 'SECURE_AUTH_KEY',  '#.::|)o,.&YH.:00Ye.{JJ NQF$F#41+=po/c&u>tBnk|&v)u^Vx~S;Nk5A?_$_B' );
define( 'LOGGED_IN_KEY',    'fbc)_tYX`,<3(ZHMGu]=B:e<6bE3Z)1PtofiXGrxz^PlRy`zAE9TR1UT<Baa{jde' );
define( 'NONCE_KEY',        '{0SuL#}7SO|dv`JIWkdEvDk]B $N]@9~]LiE~H4e;U94fYAOcz#)l;&,X?u+-ya)' );
define( 'AUTH_SALT',        'ZReNcW]%GQ:%Tc[?%(C)$Cj9{(3~{K4N.5mCv_,%jE&a.NWTuC=|h7;&,{i[CAi|' );
define( 'SECURE_AUTH_SALT', 'T*0!ibL*g+&Ba>Wmoq2m}xPsYvfe 5?s Y.Bkf>:?3By?508X`eic;=8ml?WPQq~' );
define( 'LOGGED_IN_SALT',   'LDnm}!jm1v}_Fmsjdh9N0aXd-6BKrCm`,,:BZ%~WL}mULcZ/|01fq[$eXb&?i*)~' );
define( 'NONCE_SALT',       '+H<n1)Cwu@iLa8GS;[32#$e49,s~~jBosCMJ^a@hTZ6uKBXl8$7O^o4,rDX$zjIw' );

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
