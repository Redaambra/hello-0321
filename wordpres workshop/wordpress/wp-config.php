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
define('DB_NAME', 'workshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '[|h_,&WEN=>0zv-`pNteouSXo>@^|Vv?C]WZD_}r_Kg2VlMo;xt=-^Vhq]l1 Hwb');
define('SECURE_AUTH_KEY',  'bh6xfL>Sk-JxKGGS3GQcYnpOM@UmtKQ(3+@Tw(lea[5=Cj=JRnJZhEIdQW`D=uX%');
define('LOGGED_IN_KEY',    '2G 5A-)LS+mkT4j4 HSO5#,BU:|&>R[{G.c_)WV6`@*U)J5N5G0ZMbTn[(sB-1V<');
define('NONCE_KEY',        'KOD?ZZ-6C7]kTmf5(S`}y}[:_^.yQN{B-4|2~u-hJQ0srWyNbKWht=2?|z{$q+X,');
define('AUTH_SALT',        'Hg&HNM0nE#OJThe0F7jkwGrwRkhnuk{[ivl d<HA.g:NdIy$R5<V3m+n`E[%p(Dg');
define('SECURE_AUTH_SALT', 'Umxgf%CRt:u@H4++DdS(n@;UA _K]{18l,5q*}@bm2`W5*=+$dj;WJ].}1)KOO!d');
define('LOGGED_IN_SALT',   '+JsisS#6gE_+hb^Z1G#Ja<[dIwSOlt2I<QQ~- SQvNGAM%.0D*S%jTx2%aS&vj2n');
define('NONCE_SALT',       '^0.uC;Dq05iEg[je5M6_(SEer@kYVVxn* MTBv 9Rw|m;,iN6<blT`{B%/W/c?pk');

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
