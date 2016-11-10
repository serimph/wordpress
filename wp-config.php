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
define('DB_NAME', 'my_wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressUser');

/** MySQL database password */
define('DB_PASSWORD', 'cisw470');

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
define('AUTH_KEY',         'IE+Of76xn05a3{7dIg|Ss+5l&<(]Gf`7`.Ve!(1_BAtP88wr)$9Xi!rlaWC9KiqV');
define('SECURE_AUTH_KEY',  'hv.,?qEmOR4nw^b!gZ/)&{s+%p}ROK17>z_RNk9fZ]A!Fi+Jb7 pRui5r7]Ao,v<');
define('LOGGED_IN_KEY',    'aw%i#`5e_hRf@LV`/x=7We~u_Q`~@+;?CsGRzgu ~]bi`ly9{gp()W7ViT6#W/pk');
define('NONCE_KEY',        'xijh.tWOGBg!>_n,&bW!1SzScMLY-th,/i5XxkR+=e/Nk.v[(I-A/ZJZO*P)W/8J');
define('AUTH_SALT',        'K,:C&aPObVdbZ?^z6a-! `(f`RVJCGpXa-+G#@=*=t@eN64}+i-xl+pmHV4Hi<~/');
define('SECURE_AUTH_SALT', 'N7ir7UzSb.qE(Z)^G^YWb24@iyg5sk)<D1=h[kF;RH,@>9>@}ut(qh>;@/;E)_SY');
define('LOGGED_IN_SALT',   'N@iZofu>C?b>)Vej| h@mrj!am)JO}L&ou^b%b(}k]6C1>8PDvq8O$34@?zrdFRh');
define('NONCE_SALT',       'GlA@G}sO6IoSTl`ISI>s+gS1k({^<7lty=vgBiB_/.w,NEg^==,!Mnz{M20j/@4s');

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
