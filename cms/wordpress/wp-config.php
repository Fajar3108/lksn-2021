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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lksn2021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n6Nez<yb8KD,]BT:wSJZOXU^f|Nbi=&I=d|WQhi`)84qC}|Fzy6W-hxBd7~|poS~' );
define( 'SECURE_AUTH_KEY',  'fY[}Ag(TnM<~zB@iYC~6F8DC_*j =d4Z.0C{|xn@YLUx~w/q,8: -rfg4H@b)Dzc' );
define( 'LOGGED_IN_KEY',    'qbVw+W/MP.P2j/h.S)aA`Y.D$Eef=%S!fg&)TDwXMZkHK]0/E0]%U{&reGJ|r*8$' );
define( 'NONCE_KEY',        'F}~4FGN![,_#6X5&arzC{?KeuAQpGc&wf&B~:7Pf8#34#<mZt#tW+tlPOr`<wdSz' );
define( 'AUTH_SALT',        'h<&_8aayR=EY85{qr3dg+_Lnz5)nRrM/ezDd%% &X*BLJ]x;a,v%3Ny+)|,y;Qec' );
define( 'SECURE_AUTH_SALT', '!8&o|gkG*2s4Iz0W<N#~pN]T*,P@Z`|~DJ&az;Wq=%U]c=SuH:X`Jz`&8jd),FBa' );
define( 'LOGGED_IN_SALT',   't=MChu{WF&yA8#xj:vKt9#~3w`sr:~iK~D&L^IHmrw!D)T!64a6QlU>)/(E(3|_h' );
define( 'NONCE_SALT',       'knH/zM(p-/!8dN#cn>ltf?Eha41Or[7^OSTdzc+<d!|.,~`iec<z <(^!lu]j[vs' );

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
