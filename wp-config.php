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
define('DB_NAME', 'kws');

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
define('AUTH_KEY',         'jG,T&K0&9znMd8dd7xbaXuh_N09G~LlTi!}v0CZ 2C_OD&I5)d<lmf:x)k;F*uZu');
define('SECURE_AUTH_KEY',  '68H7SITrgyD-gMjR)o_hCEcm*%O{HYlKDD(kIGOS&oZC*s?x&XDr0clb++6`C]=k');
define('LOGGED_IN_KEY',    'mX#s$M3,T*=J3o*.`G{`2$)sK9t=9ZIflWdqV[)2R`7G;,>D-M?J3bu9R<D8J[7{');
define('NONCE_KEY',        '@{IS+T8lvRC*m7GLv~+?9aAYJ.c$Csozkl*6nD#g+kbqIS<k,l3d)bfE#|PCI>}e');
define('AUTH_SALT',        '3RmDr&gs{B[HeGE]TK_~5YuD$|pY8>|lAfiv*S^rR-R25Ty1c &`$$UVG%5zr~V|');
define('SECURE_AUTH_SALT', 'Rni{^ak3dNM~:+Ypjc9^#.GU+u=a?6=g`|YclyDRC7xboc.2[VnvJ95EZ*B+f-xD');
define('LOGGED_IN_SALT',   '79>244s%)QJ9*@(J|ryi07ONUf0eSyN}}SUQekV4[}GvV<ym?LDd?$lx-#plq+k]');
define('NONCE_SALT',       'mf3^vjQE<_w2S}:YNFng>h/M-A59Dcfuz*~}71;|dz~Hz6&/2Y =uLg%K-PL7 Vz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kws_';

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
