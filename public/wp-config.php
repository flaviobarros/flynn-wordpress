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
define('DB_NAME', $_ENV['MYSQL_DATABASE']);

/** MySQL database username */
define('DB_USER', $_ENV['MYSQL_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['MYSQL_PWD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['MYSQL_HOST']);

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
define('AUTH_KEY',         '3X<uC;OnDHf(G!d!Y&i]:$jC3M!_&|@~Vk1na~m|!%o-5uhe8jYs[RZ|p-|}kW*j');
define('SECURE_AUTH_KEY',  'v-x&t5BaM|F8-nk_>(bj-j-}~b%(QZY:+,;d(.*@`wcv6MG0|msPI0MK[&V]&x R');
define('LOGGED_IN_KEY',    'R,Vv|ee!K$I?8C=Ubn$VBdV:~X1E-VAi)Wjd=:M!uJ$$vY9B~NNoXR*B=R^:9Zf-');
define('NONCE_KEY',        'p:S][CRxP&8E!}I<Embt-{pREzUBb^!0b2rmqasYv|CQas>JrmcInsS5SI|9j4~b');
define('AUTH_SALT',        'y`nL ho&1,$ln(5z%VgywpiEoRoP{mn]LH?=e4Zx-T$zE-+$[(oIS*lg~f-M4Qx7');
define('SECURE_AUTH_SALT', 'rm<|JA5{%jo2V~P+/,<U0p9;#!!dd.{J~F$sgNix3f -n`!cB$DcWKD/P[&0J[Og');
define('LOGGED_IN_SALT',   'Y-Bx[}T$>Z6sn:[AQ6sE-hLg.]`>Ucp|P{%blzkX5R[-A(k(qYT?V*At>h.ex-s9');
define('NONCE_SALT',       'UO{G{,2||Cxq9Ve6Wuhj-:+Po}6<_$IIrpv,j:,|,HvP{:Xt`+;]uLJe(#|4MNnK');

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
