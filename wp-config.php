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
define('DB_NAME', 'wpsandbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|-C7|W5Zj`tc&Yay|.ckD8Ef2G}T5E FPBxcYeWsrG_~.8Tc*E}|3SeUr]E dd&z');
define('SECURE_AUTH_KEY',  'qX$+P*/ #E&1|G<>IiPC(fYm;ez$&^2Q]pxm9NwqiK#|W{xxI P#W?-rd,_#lIxH');
define('LOGGED_IN_KEY',    'dTzN(`I;}Gd%c!KZ&+Lrp*!xIvx2BTgO@8++_bxvl|fqQXd?mwk_4E0d@oW%K=w9');
define('NONCE_KEY',        '6qCC]~;!a$W:k^YL3Em5K3)@g>yMJ-9rb?jw+W_TO90u;:YV O7vrb7!Rl(k-f<h');
define('AUTH_SALT',        '|moeJ6`Ptfm&nfZO+I>r}&>.UM-+1,M,]:U*e.{m.KIevt:g{-w+puXh(e+fq]fM');
define('SECURE_AUTH_SALT', 'n%=;|U3t@T-oTz@`qDDC7ICx09;BWy8im-[K-0*+N,AM<O3Ty$1~-zS)=xi)q<t<');
define('LOGGED_IN_SALT',   '5/uc*-vf1+BqMFO,Au0>J|xh_cC]Tv%Vkb-BM|a_yj<,2izf8SjFG~kh}Z+m)t${');
define('NONCE_SALT',       'f&U@?15c}H.x9o$>E%y}2F{iDR#}iP`Ols}n*;;n=e-: :9,$g~uX@{nP^|[t@9Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
