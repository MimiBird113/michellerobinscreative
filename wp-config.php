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
define('DB_NAME', 'michellerobinscreative');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ID5q!3u!xEHTh&mR+76[:loIn=W;)*P=QdK.S0 4VTzD9iE_z5?Ms;vL<T)9~TCq');
define('SECURE_AUTH_KEY',  'hG=vW3A6vYgzT8UkI*7:=gRP%f@KmZ6,QMjPUB:`}f~UfTzr}f;VBRx@s~>A$RCM');
define('LOGGED_IN_KEY',    '*d+!:pWHzc#GM~]QQ(>qjEK:N#Qs{!t5s^ZaCrm#8}BB<zXG),%j6{^qIinaUaxt');
define('NONCE_KEY',        'NhuOBnQT#:!V S=1nOku?48W>L*[}L}olbIhssj</qO2Pu;pM_S&KN75wR`QKS w');
define('AUTH_SALT',        'KIBZr*5tgA0sVHYjzuxS=WWK{UbITd?tO#^q-W] ](9s)lb&p+-dRV`W<n9|V6b3');
define('SECURE_AUTH_SALT', 'ank&<&K@R-z0/Os#I.TS,j67J~;.sC #{e{1AeHA1_} xh85/=`i$eEnu0bpda`X');
define('LOGGED_IN_SALT',   'am* H28d`wW@h|z)^HFM71fzff4;D1t;N?iAe.^Rl)M_D{GP,DRNY;5BgBrC,D`$');
define('NONCE_SALT',       'sNpPS`)aX:1ls<zXISG*7R= vC<=%DfA?rU5uf/a3_A.#[W?J=>W:;g~OC!}++wq');

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
