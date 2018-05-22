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
define('DB_NAME', 'dichvusuachua');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'P@ss0987');

/** MySQL hostname */
define('DB_HOST', '172.18.0.3');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('DISABLE_WP_CRON', 'true');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}_.:,Yt6 Y^eZs;%U5S7b^34L6E #YBg*XSp{U]k:I%lPg44f>IwxRP/D=) `Uca');
define('SECURE_AUTH_KEY',  '] pS.i($&>KFQ7Tyd`%&qkgxy%(I[AU{TD1Fz]()J${uHtnF?;}cCjCm$=T+!=|o');
define('LOGGED_IN_KEY',    '3.?H>k+*;<D$vE3MQTAms_M#A1?TDH`b@UQdGT%h&3r!,Zkh@:OXQ}=t|C+?dhW#');
define('NONCE_KEY',        '&1T%X8hS*h~.mmeA$gy#A^X6c/TRk@l3#ao^Ml1u1@O_ ,d@gvq2@GlA3*<7V_:X');
define('AUTH_SALT',        'p)HjwB4AL{_t+}2H~eJ0-9q(bunJ[tT$BUJk,R,d>vC:?//z8LX]q,It=k6`t5OK');
define('SECURE_AUTH_SALT', 'mtl^;Isvq7Gu:#/3=|5mY=0b9(R@O*B$^,9(7]KxP^I9LzAHcLSnpu?Fmi[~Cj<3');
define('LOGGED_IN_SALT',   'FNPV2Ta?#6rel;xf At,V-ku%^~mKPm(yLgkF.VyRk.9q &0f.kU3/xnAWFRJx?]');
define('NONCE_SALT',       '*d=s:lNgX4*/X4FAd~1svAVF(a/fcscD9nzj*u,d;{[/bED%mix7]~ed&WnKjae]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'new_';

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

