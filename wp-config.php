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
define( 'DB_NAME', 'wp-test' );

/** Database username */
define( 'DB_USER', 'wp-test' );

/** Database password */
define( 'DB_PASSWORD', 'match19' );

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
define( 'AUTH_KEY',         '#{]-7@;hfO]>.BsK9JLWOBt}%xx_N_p[F>W2;$J*?M!*^1PD5^:!^nHA6RA;i?:0' );
define( 'SECURE_AUTH_KEY',  '=m;bP`4v<r]*)y?]uNC WebmC9)GBK_*xnP/dJvm6eS{DdeS0,x!~_gip0eb--mi' );
define( 'LOGGED_IN_KEY',    'M1|c/GvFMVqw%t!G&hI)owuZ?M}.MciR{@]eozkn]&<C|5<.WQ9bot[/<@79Be l' );
define( 'NONCE_KEY',        '2ofyAO*O0mL.-&o=8LRKn(RC!*xVD<Ynes>l$m4/E{GY`Ox*]j=~!m[LPwfI6Do{' );
define( 'AUTH_SALT',        'e)LGhpq+HtU!j-Uwa)HY[corbzB>qqCO|suFxH8Z,As?%]<v%L}{:%?|M$Qj,wy:' );
define( 'SECURE_AUTH_SALT', ')zitd=u_OK|chRm}v-#`Aq~v#CXCpXa}#7YlEhP$O$ARa/qyY3qyV]77qCN1v?fx' );
define( 'LOGGED_IN_SALT',   ';v)7rmn1)lX8V.PwhjLS,dLH]DL:Fj7+_y_+Y>gGaxL$hNdkNSU`3mf]3WTJ*:s ' );
define( 'NONCE_SALT',       'F^yW~kI Vzm$%fY&M?r wofF)MNxX2W?1>C%R/pSc~J]3qeBeO{H=p8>j<-?fQ_P' );

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
