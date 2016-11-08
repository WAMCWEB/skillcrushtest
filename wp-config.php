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
define('DB_NAME', 'Sandbox');

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
define('AUTH_KEY',         'cd<,he!My( J]];G>mJD25+pR l]4ZvjvW X_IjCtNB-_C#LU}Au  w7P=z~ hv$');
define('SECURE_AUTH_KEY',  '52<5R:VHlU!`S-xTIY3zC0od :Sum/OB9)pj>-GG. mwwS,(+`7eFRj>c@%nK^T9');
define('LOGGED_IN_KEY',    's962FRHXGxsX da4PklOANLjkMf&R4V0wc>aTo|{N|; #A>sp9^q)QT*iS~#K=5<');
define('NONCE_KEY',        'A#+2b{0r$UozH=6*:lXEq|qPYK9Blckm2)eF6epl}zx<%rQk+g#-P:[ncQGY^Jz*');
define('AUTH_SALT',        '(qQ<$Yy;ev;FX+Mdx8Qc?bU.}D2No0[xhox` k<Si`N}IH0ESAR;,`zc6,.|?u|;');
define('SECURE_AUTH_SALT', 'spH2Xt[vOcsULqfmYSTi8}[ ;t2ARIGaw CL0xq+ETeOgMD3|+Q<K9GJzap9%3^L');
define('LOGGED_IN_SALT',   '=x}Q?ECn(.E_6>M?<~J;NdY<r1 IMs#*]n6hbTjZ}~>IC/pN[h?XCjaEZG7|&RJR');
define('NONCE_SALT',       '*UE?V{f/@XgT:gWH(O-N-sQvc9Wz2ztPJ KO;7<d}gn] r+27/ IJDMB{;|(S7[^');

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
