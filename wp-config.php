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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'KK|tjTs3jqf1x}Nj:T65J8ddyokL3*%LBQ+it#<_gHul!>U4w.LU!p|k@&}/sTVp' );
define( 'SECURE_AUTH_KEY',   '/1LP8+W/NN]$EDdGM!!X&Ypui!Dv_5Cf~7siMlUXIPD;u.)PhPex9;t1Om(Q[#&S' );
define( 'LOGGED_IN_KEY',     'EEFYiIN9)^;^~IW5gU78FCbF4P,Cg*F:uh3X)Sd96N9~YcG/LfT5*=y0HnzT38d7' );
define( 'NONCE_KEY',         '(^!!G0rydwKG7sJ[*;7$5={Th@hC|[-Ah1?Xj~.~Z?xTN;M2Lh2kz*+#zmJ<br_k' );
define( 'AUTH_SALT',         'X/T_v1|-@QXlc45U<Njtjp<YAUxFCj8?u,Bjno{&8vVt;UxhPTe2A5n`L|avW:>1' );
define( 'SECURE_AUTH_SALT',  'T/F}_,5740GqTbZ)b%DQ6I+SP?L-`8$N*3pK~R9_Gr-h!KKK*kg:nmNym<.k2e:w' );
define( 'LOGGED_IN_SALT',    'Gx!,nr<Ag8|3{G/b1s^)hk88ZsW!5,Iczu%Wr4^^r)3nuJps?p$4Wq&n+4/J_6a|' );
define( 'NONCE_SALT',        '$i<3-%h *nEKi!4i&=be(q?NK:m1E-7O!y:&W1Xt1B,D{Q32dri;e3|SIs4))K1<' );
define( 'WP_CACHE_KEY_SALT', 'ni;%SZ<;`}An$2AEc+`+rF3Q{sR^of[q7|]R.&I{k)dxpUYoJ{7*0vy`P9<dmN/Q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
