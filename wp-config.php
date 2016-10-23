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
define('DB_NAME', 'worldofwordpress');

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
define('AUTH_KEY',         '9j=pfNx7ACxW 8Oj4//!8zfpbX=)Yc`-f.G*S^{ar1W{3pF}Y2^H<nQ=+;#-C-pI');
define('SECURE_AUTH_KEY',  'z64MxmuZ`L(;$FQE093Oz=FvlfKM<&NV1J4g#ZUcTu/@Bb!T C^6-=N^Joa#r,<n');
define('LOGGED_IN_KEY',    'gV2dJMx%8etq-Cm,2[BK1.<9,+]#*.Hb1i|q.]|).Q<n.}$$,jFze*nV7ISQhr;4');
define('NONCE_KEY',        '_^%l{rakO_w!G}(`u$vVjh?0?RqLe4$U(UH:+tuh4^&i mc(QKtbr9-]b8E{<a9q');
define('AUTH_SALT',        '4;7*Pb<H3fZ:HX5:5!RV[R?XFS>RGsw5Bs6rD1Id@z7y1Xm-_+5gPx@xuTl`%m6z');
define('SECURE_AUTH_SALT', '+Rw^}2ney$~4y}x/Ok;NA!|>dUQYWOC6Nrgdj($a^.E9,iVyvG}XfqOv@)WN<WiW');
define('LOGGED_IN_SALT',   'HHJ^K8ST$xhM`lBg#FQ|ztFn6e.EXAhL| 0=NES:rsux*~QNM9:v m*8hoYFP05U');
define('NONCE_SALT',       'eERx&r9%TMticN?QY:%(A3M^T[[4[}nf|?kC#E#)gJ7tZ7QP[[io783aXlD2V@NY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ytue_';

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
