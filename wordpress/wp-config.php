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
define('DB_NAME', 'wordpress_demo');

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
define('AUTH_KEY',         '}7N{HMp5wnD,@px;wwD;@c6.=XiAzAYOQQnx(Qvu:I=U5XakZ0Fn.C=NGY#bU3j|');
define('SECURE_AUTH_KEY',  '(w+7l4VUMW sa{@?`f?3IL,GofG1Y5WS_fA=Az2sWsMPp?bmJq zZbM$nHjaNV&>');
define('LOGGED_IN_KEY',    'x%7o]no`r^!IB9L?y6MxW;W/lJ+:$18Qt0Yeq5t0Y1*><&]%L((zsgMIaHai=!5h');
define('NONCE_KEY',        'HfS{3$rc=[5kc6X<wN.W4F_XDe^**fG*LqLAuP4M3q%Yx&v+0i4*HhQy>wg_Z2w$');
define('AUTH_SALT',        'QuoTs|P ;]c?1Zz>>AxyqoPCy9dPOyc(H.,IAG1ixnu^Fr<dkUFYX<mh}[vx3{>_');
define('SECURE_AUTH_SALT', '|IA^i]*$.`[vrMJ82deYpiL2&7?5zNFeA]toE3qpsqD(7L,|u!_fMoO5VHWnT!Uj');
define('LOGGED_IN_SALT',   'X K Z{@7`y(H %a`Q6paw}K_/2GP{@*R. 4`gz?YLc1yZm:T0J,g?MTlPmOOM>FY');
define('NONCE_SALT',       '?([(&E|znJMekz1aq$# |],Gd]T]&ZTMRzF_A5u.~2|vHqK.K-%z]{.TZs:vNqF9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wordpress_demo';

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
