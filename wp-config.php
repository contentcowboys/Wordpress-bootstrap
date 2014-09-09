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
define('DB_NAME', 'wp-bootstrap');

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
define('AUTH_KEY',         'Ed/)1e%D{qj!P^;Tr5T`|p$>}|4U4k{+5JksI0Ak9B{-:8c$6T8I8u]hAU+V+.0%');
define('SECURE_AUTH_KEY',  'I[[p1Ytg-by HL$k80@cmf$Hj*&2Kn2{xzqG`?W/=+7h$f<O6]dMG@oQ+mDH13hf');
define('LOGGED_IN_KEY',    'j=WKgPIYhylm@(?{uS,8`4+!xbvW3OrJv3R-`sWMG{>1%yOS7nNeYQQiXzpR@?%V');
define('NONCE_KEY',        's0j;n|g0l@,V1m9&jHF#(`GiR3IR~[<dvkBuJ(ge){b6j4JsB;g]!|bZ>E$?+;J%');
define('AUTH_SALT',        '5&|OO4}m(DE.|!*y/,kHW;1lIx+o{HfZG*c1~$InP6}-=:Ikv+[+>_Z)/Td9FV&M');
define('SECURE_AUTH_SALT', '!Eq&3RNj*{bJv3JTD8lgf%UH[EU&LxgOp#7Jb>:64CXqu|,=?s3DL}X+b+xAisN*');
define('LOGGED_IN_SALT',   'Ie/-P}}!+Gc4}g!)XF@>7Y;18O}uu!+bp+UI$-HYb}Q54i*}4T3o-)uPS|,k1O|]');
define('NONCE_SALT',       'v$N<#(6Bd1J~D]wdI9bdZq--~d&4ZNenf<+Y>@Cs#RtDN`5rs@.%M.G7UX.i1[.o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ccwp_';

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
