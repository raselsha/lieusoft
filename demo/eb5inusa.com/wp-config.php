<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shahahbr_eb5inus' );

/** MySQL database username */
define( 'DB_USER', 'shahahbr_eb5inus' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shahahbr_eb5inus' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aw5/|!Mj7sEG>u!^#qwc,_}$TuDQpLZ185yuI2|B|grd#VZGR>)%qpX5XVz>1mDA' );
define( 'SECURE_AUTH_KEY',  '[LLS$I[%PRypA0BF*op]?0:9Jw@$<x6mI~W RD_fX+g}6/ZoL8pdIQ9q h()J;)i' );
define( 'LOGGED_IN_KEY',    '4ryW`?A]Mqy{=mxSPMe}4$`DqG<8#c`)S^LT#:f+Z/LCPx`L9FQdja]_O&pMTE<,' );
define( 'NONCE_KEY',        'oGnEgc!D[<h9$71uZ/SRbo1Aualx[$xB-I$TrXCCM)CQ/WN//e?Z86KV<3Mk744R' );
define( 'AUTH_SALT',        '#-#)&XGrBK$93qAE@s8CvUB%MaEJYI,apvbK|JNpcigW}`O28!<:n*F:8|l2?*7n' );
define( 'SECURE_AUTH_SALT', 'GiciunD>[gl1`bo jdn)!6H+0nt;iUmU6NLjbw;PRMFf`=/uy/0s7$njha#J`SjQ' );
define( 'LOGGED_IN_SALT',   'bi3oCN?r+,iem;xFX0}YBGO<RH@?~j[; &k%Gz7NSxcx4[-*>A9 Y*50[lRzGiT#' );
define( 'NONCE_SALT',       '-,<`J&Ua]$N%sL$yWH3?2!F1DR^iAvU_1`aKcZT&`M>a3sjwXuxFg[Tl>-%MbTw1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
