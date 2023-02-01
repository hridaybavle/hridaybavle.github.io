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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'jHtoHQEoleM|4kjNPa,J4F8{p6Q,%.L )<gKy-m1!@Ttz_?gQ|jY)iU3:!aMD?zN' );
define( 'SECURE_AUTH_KEY',  '^iDW+U>8:8)_i`GH%x;=?J7w*W)P`YEM(^AhsIN ^i.aQor>C6QOh<b49D|Z!_Uw' );
define( 'LOGGED_IN_KEY',    'qP2VnNudds+]3>>=HTDG|n?01-vFYb$WYD!{eu~|Veb+u)zI =u3;~,B)ZMS=nFR' );
define( 'NONCE_KEY',        'qu- 3T,1$;?Ekce:)1XFS:d3O-n7;^5W3yTi<awpZKD;}/t!(n0Q5(Kwqs(W.wev' );
define( 'AUTH_SALT',        'VcnQV8=_= zlA0C8>ykw`}WMf%jL[d_IP<Et5,[V#JM;-9YO>-9Sd`Z GZkDuglV' );
define( 'SECURE_AUTH_SALT', '?$>ZOUoCj>6GQcHs&(zsTP6V#1[Q/!}UBW,+BJsS0,0`#1P< )k7;I=TaaOGiVH*' );
define( 'LOGGED_IN_SALT',   '@SW5]K s_bl6<wb^j{/{}@3b-8?Z>: |Vt/~bRP[>ora`% 4/)-d]_Yk}Oivz{0^' );
define( 'NONCE_SALT',       '?>SNwldiufU&gmbO]M{+cE$E U~sfS[xgntu94g3!e!IyMaTS5u]__6>eqdu.,dA' );

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

