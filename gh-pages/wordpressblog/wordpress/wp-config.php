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
define( 'DB_NAME', 'wordpressblog' );

/** Database username */
define( 'DB_USER', 'adesola' );

/** Database password */
define( 'DB_PASSWORD', 'adedejo1@' );

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
define( 'AUTH_KEY',         'vB#?OGh3_NhpK];GzqO&->@*]Fx={*%<iJCXJMllpig6+7Z,2UylTc~RFBs[o(Hz' );
define( 'SECURE_AUTH_KEY',  'YT/SgkmCPqyvn,uLzdE?#Lu>`:o)0BtLe;f&/>uL9=`=GsBYIMI8%Yyg7L/FeRFw' );
define( 'LOGGED_IN_KEY',    '(x[[VB7z-yCW{Uj*;Z./]<5Uil/sD)`iJZ^[8>C*CeQni3|EqO]p?s1}zT%HyGr7' );
define( 'NONCE_KEY',        'ltkQS6l,e0vAN560oNKF`u/?;&>#hyMjxnWWb1A]c8}VX|PXlFRuV 7m811WGoO:' );
define( 'AUTH_SALT',        '1A>u^&Zop+j/f0i7&%Xy3o?S[rTG-tr3SELL#y<(w8>c9Uy]SRcxUTT)@K&m_3`D' );
define( 'SECURE_AUTH_SALT', 'a4y3AW4},|O,0l063hs7e><)}:r]cd!t1vzA&*0BeB9fU$-~1$]hj-j^;S}?jm7&' );
define( 'LOGGED_IN_SALT',   '%vr_]p[7X3l#BUx $>i?Wg7laoCTqxsbJkF1i#5*u=^hW!+5D,.eN-kSWJNl+J!d' );
define( 'NONCE_SALT',       'F4^2=eLQ;uWDL%%7@Z:cyqjCD$p`gATE;=un32q:{Y(I.vm23Tr<u:Gan6zq&%u?' );

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
