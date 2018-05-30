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
define('DB_NAME', 'east');

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
define('AUTH_KEY',         'i*LX,o2#01cQ,}q)[O-i}wg%h%7yD/Riu7aC;M[0S6W?{~#~?@G_l[*e`=e46M:(');
define('SECURE_AUTH_KEY',  '#XI_$x:fk1 F_@#K{J}>H$bX4r@^p0KuF@Py8^WmKi]hOSa@?_%G u=[N9%Cm^ij');
define('LOGGED_IN_KEY',    '5<tcd^BkkDFpLjf.`%dmVF.q.hy-}P{k-&fD:tx/I q7< ao;BDjzeslSPo/tV_J');
define('NONCE_KEY',        'g7^gts:otH}H;kz9@<(mL (_tURrYQI,p1Sc4c]6^pAIi@vMGl99GG^v<V}pnj^7');
define('AUTH_SALT',        'l#AHQxn;mv3qu)`dh*}Zh?)PO<v_Fa!A>+*4b-q::8HqvlJ`q0Mp/Uj=j1p5fFyI');
define('SECURE_AUTH_SALT', 'w.3ij;@eqA%R|HW8NhMo(c0|3cZDAb2{(i=MkBB?pDTQCOkry=OEOM~*gJ6I_i9w');
define('LOGGED_IN_SALT',   'aoy<m9.~lIH%i2B]gjb%;6)<7@DnJiHk@L9CK2e>B[,7ElDO`jSFJ^bHl=g#rD=R');
define('NONCE_SALT',       '&)0Tt10^!agU~EFgP9~o|R!`,]duRvC=0sx6Ex]vlV0UhHEi{D709nu)>:vqD2?^');

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
