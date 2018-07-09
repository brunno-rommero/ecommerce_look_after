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
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'yD6Vz{;~?j+Fk$5bJv~Fd(|__;|E&n8(?NzfL=P@O6G$WgO~f/#pTdY|FfHXV0C>');
define('SECURE_AUTH_KEY',  'gM,$j:aXY/OF?<E}N+^?l/lH4/7mt>Vt<V|jh>8OyMK`3+j&Inp%ZB:G]+?B3s%^');
define('LOGGED_IN_KEY',    'nO>C@)]IjQF$(Fpd<Ca~`SD!ps:4dt=GlPT`~FQ*M!N`-yNmXr1>F)SP%ZWs5_wt');
define('NONCE_KEY',        'dK0f_yF_P>.^**ks|&@Y+MUvVE]z/if{p=$6@8%LDUvW3-yw06a%/!}-7DBo8{$M');
define('AUTH_SALT',        'ca`RK)Ato00?1=jBvESq)Nn`6/m-K&BBgih(Dm~[ErBrQ2y-$/xrhOb7] 1g6?DJ');
define('SECURE_AUTH_SALT', '*$`UO UHV6K60o6/Ni-@7(IvJpgp>1%a!E#kw,,~12G;O]*!_( .N92Vee/gs.Zo');
define('LOGGED_IN_SALT',   'q!$SwquI_|Tk3]7P]?:<dnO0=@Z#|l?(6pzVFzR19}h39ZE@$G[hT/c2qe%smizU');
define('NONCE_SALT',       '!_g;Mu$>LgA0]TKr<uaajbRrY2gYv?tDy(-5UuU.?<_+=|{de[K=&OZ:z#@*lF~_');

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
