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
define('DB_NAME', 'bidr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '+%Wu*D&lu|eMD0;f<c6@JL.+S{cg)NF_^7{N4Mu3`~?-^nV;alX}u*%I]@+j#(iE');
define('SECURE_AUTH_KEY',  ':;vH@y:hA!qDBy<~IW`K YI}ISX{^Spg8kb`>2<@VB.!rD$tz5dEdcknKREPK7N?');
define('LOGGED_IN_KEY',    'E]|1&)N{gKB,3TbLws917{|SqlST79gU.[{k-l&`jF}~stF)RVM[uWv&Q15g)LRZ');
define('NONCE_KEY',        'Jeor1FY,u/P:)njjH{;`4eqUG6+u :Z@eEi=uGsm^H15TtU9wfG=0=zGsb/HmKPM');
define('AUTH_SALT',        'r}`[|}GDFH^%$.fz!B;ZTzzQiq&3k73Q:%uWol.7bG@XvltN]TbvkKr`|!GlCO<*');
define('SECURE_AUTH_SALT', 'M{Pc.`j?yM4$H&y@zq*6%Bt=,/x:0jR;crg+.i8JpdQUHB@pOHjoL^R3$lK.v<Aj');
define('LOGGED_IN_SALT',   'oT+v(99iq&##kS)3G!@Qw6RPDkjB7%IkUbLecG6$/&cns^~os`feLBd@:xZ#psZf');
define('NONCE_SALT',       'K|r[9[2AZh{S7hcl#2;d>|x-f)Xthx.v$:[9b_v]iUAPZ13>IeQ58_F19s!,ZQA^');

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
