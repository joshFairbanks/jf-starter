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
error_reporting(E_ALL); ini_set('display_errors', 1);
 
define( 'WP_DEBUG', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jf-starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'xbOfK9de2b/|(BNBiw.A+z-C}mEJ+=cF]9+-!(7$u.xBN8y%Wt+~F}{d</ld~*w:');
define('SECURE_AUTH_KEY',  'rCe-s-(XvN{$-UI*%0Tb%._Xcx*fKH5h|:] RUGBVh}G^9OdmoZ:aorJ&h)]TW?]');
define('LOGGED_IN_KEY',    'ML9}!Qswi&@&B)^1S;0s1K~<Of,e^.a_S[%THpB}&SIV4ew1w:D8M)%26#[^d!e^');
define('NONCE_KEY',        'y!DCGL?Il516#.fr~3i!pVJ |fMLh]ED,IdU*SIzj=ml,h3cINY|guY~k.y&tFqQ');
define('AUTH_SALT',        '2)b2SWp1f9k)Zzsj$RTRCCWoxF,1>J)M7r6IDg:3t@xr]czj2}W,Rd<ls0PEU9Tl');
define('SECURE_AUTH_SALT', ' B4x,^BpHPl[C1gn_4svJL]TUPQ]CDq.oa>CmG[$:ScJV0S&(AIg2-=BY/a!%gr`');
define('LOGGED_IN_SALT',   '.bRsMEq%C|A,X^BT*Um<K=4#48Gd36C9q=0CJ^iI/i>N`)&l$} `*~FhP8>nWYVb');
define('NONCE_SALT',       'Lyu1`n.,=:11Z6umF$8yy(X^<,M6gFN.QN8X!eV<=N3nW<0NIfVzym9yvcZBn+aG');

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
