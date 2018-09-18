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
define('DB_NAME', 'Sage_jj');

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
define('AUTH_KEY',         'Le0M<#H[{jP4u+E822)TJ^-`W>OgqfYTOo}JKw1yg(wb>ZVY S(WSmQ!jDm?<x~G');
define('SECURE_AUTH_KEY',  'I^)WTZC6X78p<ydJNw([V^wEjON%?`B]AU5Rn;58xcz:2Y[%5ab?uOTIz?QFy}!D');
define('LOGGED_IN_KEY',    'U?zqF;qQLt|AGB -65/AC>BcBdfVz.X)3>s69$r5H`Wn+i+}6?Jt_5gQ^|k4eN/S');
define('NONCE_KEY',        'bvpLIh^}PXM}H C+2,>lUtFrp+U!X+i21s^UUZ4fMNxq3Nhor~&sV0+zW&iqwXp[');
define('AUTH_SALT',        '73zSwxdoI b=[Gk^TpDR3JW&v!@{q-C_W:,@#KS|4ohJ{HEZ#5ipYNr>^)X$MKg^');
define('SECURE_AUTH_SALT', '&7T`:J*6oBauPRpA*LuwDN/rg%Rn6YyI5?2Yq!:2ufu+1L6]_)-lfq7JQfI}HZ>z');
define('LOGGED_IN_SALT',   'JKAMA4l_p@fmgYp!6 b%i~)QK3:?MWiX)>#.OnJ[(,#LU55:5<~mSF>k{/;xa<P4');
define('NONCE_SALT',       'A}B()@(&ld+gpU<@DqLmR&eX}eE+r[(Ax7TVQ}|VsBA>>n^cT=NN=V4W@f<WC8BQ');

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
