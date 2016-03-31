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
define('DB_NAME', 'MySQL_2193_unleyroad');

/** MySQL database username */
define('DB_USER', 'itadmin');

/** MySQL database password */
define('DB_PASSWORD', 'FineFoods128');

/** MySQL hostname */
define('DB_HOST', 'my01.everleap.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
/*define('AUTH_KEY',         'put your unique phrase here');
 *define('SECURE_AUTH_KEY',  'put your unique phrase here');
 *define('LOGGED_IN_KEY',    'put your unique phrase here');
 *define('NONCE_KEY',        'put your unique phrase here');
 *define('AUTH_SALT',        'put your unique phrase here');
 *define('SECURE_AUTH_SALT', 'put your unique phrase here');
 *define('LOGGED_IN_SALT',   'put your unique phrase here');
 *define('NONCE_SALT',       'put your unique phrase here');
*/
define('AUTH_KEY',         '0|x6g2YYD)n B=$;dQUdhf JSd c{1v(%QOW=@2tZ8x-GW8 IR+YQa$|_VOo0OX2');
define('SECURE_AUTH_KEY',  'L32DvA4uw,,lS9+1%~h/j92p]T;;26i d^Gd3=a285K/Zo|#&@U/cW*+7d(%0$S_');
define('LOGGED_IN_KEY',    '!E}?G$o%+C_}iZ?~@^+1m|!7W_H3aS=|/LGm^E*+-kf1Kt]Wx`Cs$ +.oO%YI4:r');
define('NONCE_KEY',        'icP3|#EtBp`?{?Y-0I;x=o=`UNQ!vSSl),Mg>Hqj(N2PdI/VN7 P0L-* :b_y-!A');
define('AUTH_SALT',        'x>Xm2oE=zjn!9jDlx!l[`={i3E9gQ:gDM7FN5sy4`<-~kjBeFMrZn|CV+/F~~ff0');
define('SECURE_AUTH_SALT', '-k@Hg7j7ZZ_B{tZ/MoTE|]IEeq&QHY`8yz[CH;hL0<Sm_@9_QXws;~$hH:bsi^,c');
define('LOGGED_IN_SALT',   '8|4%Mia$<v*0e*~fE4`nS|{;A8e}!9:8J/7RT!QA%rzD9plL!s$]SW<m}dJnI5V2');
define('NONCE_SALT',       'O%y,cOBAz71DR&Za@b6%QJ $1M?I21~H<D>~oq|lG}y||wa%xXx=Gv~T3a!FxN,_');

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
define('WP_ALLOW_REPAIR', true);

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
