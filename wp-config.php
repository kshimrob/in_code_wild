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
define('DB_NAME', 'in_code_wild');

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
define('AUTH_KEY',         'KlEaJ]Y^yhB9?)9A,w]EA!?>&BDk6^jP1)c;zZg)GkV<-9Vg@gh*OT|YJI7#q=Uj');
define('SECURE_AUTH_KEY',  'sDr@jAtpl1~lq~k<i`Bx/Q+]S^xYFuMDwWrylRYs3:}._jGAx($) m!UuvF@m@:G');
define('LOGGED_IN_KEY',    'swdL!KS_ %t*W=s?mY}KmE@p{/Z><b8}qt2bJzVJ|?j.)t;N7r$CQ]ijcMv_p`=%');
define('NONCE_KEY',        '0]<lmW<mSazTCPK)MDzZW.1SPz%7G~?$ro$.-0p!+Qe-XY0W*l+6-.HTW9V#1ZLZ');
define('AUTH_SALT',        'zLbz^KL{#?j-YZ<th}.hBRFNxT|Mv%L%[ONs rFa$|YLJ>l4u(949-r4o$yo(2* ');
define('SECURE_AUTH_SALT', 'MFQyaQeJI3eb-*a-SwTs*7ZWJOeNfY<C9/N:!:M0ORDb4[tqUE7=a/fqx5OIc5V(');
define('LOGGED_IN_SALT',   '(!A8k.,?wS,Z,3 ri+s1}F[#@lBIy<~e+R#3x!lRy1k_T]T_1YmQ,S=S|z9$$s>3');
define('NONCE_SALT',       '^u7POu_(FL8jzZ/4F7j>7g)OwHlr^>B<+n|1<4?bAYX8:lz/$68JZyC#BXawOdE5');

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
