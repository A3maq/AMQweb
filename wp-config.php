<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'amaqagen_mygodhelphim');

/** MySQL database username */
define('DB_USER', 'amaqagen_lefepol');

/** MySQL database password */
define('DB_PASSWORD', 'yW0ho(8ZkMFB');

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
define('AUTH_KEY',         '6,{RyK=<`iyF~TGY49PMdUHXyk*$@1t=Y8TmjiMNHw&{P6)2G(*>h$LtWZUiZeTy');
define('SECURE_AUTH_KEY',  '~x2pWL2e6]c=zK~,SP7pZERIF81r5Tlhqh4)aQ95xu_VUaB{7%5%Bj=+=QNe>UG{');
define('LOGGED_IN_KEY',    'aE |W?[Hq3hSj&F#Gt^:YG2cTH7hnj{._L1TTwU/A2*Xp6~7K<W|J+yt6w10m.dI');
define('NONCE_KEY',        '-z_+:z{zg(9!M+x5}KkxUAf1,YARI>,+Q,:G>1~P7S$LNs@<Lq;[&l?{p31{| z_');
define('AUTH_SALT',        '7C7$j:{vU@wMSP5*`VSn5~X`~^0?fzFKFunj,@=G6cW?;Cg`6GL.]Nstog&hC7|3');
define('SECURE_AUTH_SALT', 'yU-yIZg6l_dWUO?=5KU05;}lXD66*yEd14%-Sl*f8s_MS;8Rg:1b_7ZiNX5H +C#');
define('LOGGED_IN_SALT',   '5S?ECUCv_^0`/JHRr(f-UygB%Kh@tg(%n8sxRKry;pV(TzGUD& u~8L0HbL<%Nd#');
define('NONCE_SALT',       'Bv !q_:2S=%#+R-V9_)^w1Hd!UUMY1gG1bZ9Yl8J -V!T!*`,N1v_Asp^}ET`]m8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sadp_';

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
