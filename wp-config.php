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
define('DB_NAME', 'shahahbr_lieusoft');

/** MySQL database username */
define('DB_USER', 'shahahbr_root');

/** MySQL database password */
define('DB_PASSWORD', 'one1two2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tv_?CN!GGblT$0AZVWk%,7jZr@2*(.c%%}#g 6@f/ywaOK_SR3/rd2NuC|d!{+,Y');
define('SECURE_AUTH_KEY',  'C$8y` 8b=.W4sO? (Ps;!e3$l}>aw>Rosvm/MBlF!=fG`1.;K:BdQyEvk||uJo9:');
define('LOGGED_IN_KEY',    'l`Hz?NF 4cc|EHwhb%n${I`Q`zRwN>jg)g,3m7&%2(Z0rf(H+wKqo|/|J%33[iY`');
define('NONCE_KEY',        '?V S?=`zPP4.kt$?csN=^buL~w7aQo]`{%Yo4gc5OY2_hs28W!EslffUGK>)[a],');
define('AUTH_SALT',        '|Z/_oqdt[l]bW:pZW*T0Hmj MBTx?-N -AqVd>v|Zplj|cg&n(y%2owGhr|PI7G8');
define('SECURE_AUTH_SALT', 'c;1+F,dLaL,rq90CmDECHiAt_`hxi93UtGZczm?zl.t>+A3;2vG[^3u4<Vo/*Ye4');
define('LOGGED_IN_SALT',   '1S yC2wZfzPPNL/U2>q-g,b .?2HMRf#Oi1+PBkZ0wF1u)?{}[wy%NxM<./!HY,s');
define('NONCE_SALT',       'U /o_u/gl!]i/t0/Un 0}@DcQGn&A:Vy!018hn4kCf0h8{WX4q.ew4XA9PR${/`J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
