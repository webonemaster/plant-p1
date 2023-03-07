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
define( 'DB_NAME', 'plan_per_1' );

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
define( 'AUTH_KEY',         'Ov)dd64)z(*>$R44>+S$hES{rWKON4;<rSki-54A6*uiNn+);X/MT~-G|gyX%+eK' );
define( 'SECURE_AUTH_KEY',  'XpjhHOq>dEYmPH{:a*l4.(}1#co7K.f>[8VWcOFby53lQ/;Jwo;W{._66[$wjAb-' );
define( 'LOGGED_IN_KEY',    'y(dMa:?en2wFL)&RwdGNi5B1e=z}gsm&KG?wHedwa}#d_Gg/l0(Uz-vLoc1AS);q' );
define( 'NONCE_KEY',        '8)`T7i=uf5/EZI`;<rECFS[).&/naA}fogG^sD[Y,Sesx!.:$Eu+T,I7>jx}CX]s' );
define( 'AUTH_SALT',        ' /;ZH&dOY<YDblLmJ6ejx6MYfh`?6)[!>Ai1lV1Z/fCo{<|jX7]nqk fMsHXu=~v' );
define( 'SECURE_AUTH_SALT', '7A|Wg.]cHf(r8Q{tCtHNWb~Pt7*vcRB!<xn^H#tghbEHw;Yw<]]D{G`p8,-I=G9E' );
define( 'LOGGED_IN_SALT',   '8;5X$qH.L#+6#`[2a^vM$CR:NPr)Es*W<AvE,ZJngw+z,& <]QrxZBR?UiME5:JL' );
define( 'NONCE_SALT',       'QnQV;y~(.$#opY?Qr=F|fl,@M:k4%!2A/?h> qRY(I*p3YE3<cWnr3uP2+t@y&vE' );

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
