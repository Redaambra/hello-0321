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
define('DB_NAME', 'word');

/** MySQL database username */
define('DB_USER', 'word');

/** MySQL database password */
define('DB_PASSWORD', 'word123');

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
define('AUTH_KEY',         '.a,4bRP8&nnHvxND@}Fk,8jH8SN&NpOpy_ZbUZao J#}.Gsq,0}[4ll7Q[GhOuch');
define('SECURE_AUTH_KEY',  '}[*H%AvW 9%*aS+*?mc=:sbf{GJ|;NGCjqup^M}dapy4H%EI.n0Vh~$-+sMiZKq=');
define('LOGGED_IN_KEY',    'kt%|Bd{g~DB_A@8)on@:hZ3MvB !c;ar1LA{I$X9h2zW!FW54VWT8zso`d]XgjWZ');
define('NONCE_KEY',        '^K%1)T_{cRpy>!uW.{)nHc=dQ.w2${u ZuSjMj@i|Ib>oUNk^UC@uK<*J`J){|<Z');
define('AUTH_SALT',        '}!}=JFH3l5xBu:|MTE?-pCId2{*6SRcK!.E#~F$+#a;#/bIS)qX_yw;&)+<1+GIE');
define('SECURE_AUTH_SALT', 'u]R>7TpRc1nj|(fUAQH$%/TNe==XA/FNce~8A]P2ypK0d=I()a,u1zPf|wP?8gW>');
define('LOGGED_IN_SALT',   '(Z`:@TeqQ^d=:<DF7F@vDdclOWxMU[@o:D@(PFX/l?LYjj)d`#0Oiw81-DW>ip=t');
define('NONCE_SALT',       '$++I|0N1,wH2*r]}0[ak2Z ,S]u@` @f9rpZhlYn,|r6QY-I:=Ue%VR<g4Yd462A');

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
