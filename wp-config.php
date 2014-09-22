<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_puppetbr');

/** MySQL database username */
define('DB_USER', 'puppetuser');

/** MySQL database password */
define('DB_PASSWORD', 'puppetpw');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'vt*+N!Ny_[JQ[/(;-%i|+kB`WF1V?ibYH]i?$v0F{FM!Zj]N`{J>%}C^*|kjVzSj');
define('SECURE_AUTH_KEY',  '=Z8)9k1c{^%KKlcPAc$tQ7tc{3_^9l>;N$yfU+z{ xV,b!K/F]@F+aK oBA]#F85');
define('LOGGED_IN_KEY',    'g0+XDMZDa5RN2+-,6!`-1px.b3}eHoCL2I|a+;+q<PQRjoCn2*7P8J*LFj]~+{Tz');
define('NONCE_KEY',        ';<}T&x$e2+P bN722|Y{//uj%$b;e:X*Sg&z>YC+zmg-~XIp6_c=|x%5*T3r<Z@V');
define('AUTH_SALT',        'nK v~-O^.lX;cz{ChX_W5Xc7Rs{x#Wd6J^&1@2/#r!xxD@$ yUyX]b-I65$W3O+F');
define('SECURE_AUTH_SALT', ':M2,3^gAX|>-}^Ce7C@u,HT}w]qH|T `EyxLmL*}E.yKMs`0_XaZq%S+U5&~#av8');
define('LOGGED_IN_SALT',   '0Evp>c./BxkP0R~&Y:YxcXR1V=~N- 6pHOD4HS<BNigI7dTyZ?^bPJ{-GC-jC#:{');
define('NONCE_SALT',       '(2.KODL4G-K(0V@[`k-x_f9 Eqv%32@=VF$KjGP-Y%0au-B8ty]Uv6kgv1d*pZae');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'puppet';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
