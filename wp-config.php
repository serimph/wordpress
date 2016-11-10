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
define('DB_NAME', 'sacc_wordpress');

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
define('AUTH_KEY',         '$%xHLIr$bS[ESxV3~?HXZ+BR~/[q*E9[M!n=@0VSc?E=dY&Pe9Fx;KM5CJ4vU70+');
define('SECURE_AUTH_KEY',  'h`$50$T4r8PdE+J0?:@S>[wYIz^)0Bd),z7lxVMj03rBuHe*boE3~dN[TmI`SRFS');
define('LOGGED_IN_KEY',    '@^$DYy!aa+PuVnV_gMPE9]x7-]YR:[UDr-WO?,h~z(*;JzDW$nXr)1}F%])ONV.p');
define('NONCE_KEY',        '[RE+;|h#CLKW9bO69U_A =3D4Cgqc3jDk.r)u;MbNEEM4d8*idX LKy4SCA2IVm%');
define('AUTH_SALT',        '8hIF9p*7,IBbaO*cwS72bFBSZo&II`?gpm,H.oJ@led,+h1$G8Iu4mC1{y.^/rb`');
define('SECURE_AUTH_SALT', '`1_4F516;XZ(A2?5ntS(&JFvc,jYn$ F/h{*rNjE{e%04H0+I0KE:kI-gE=zPxTa');
define('LOGGED_IN_SALT',   'ZNX)!Tpp:EfKHrq0ksm!Vz;WmM|?{TX%r|[EXEA2klw^&jHN(p*i!(_/%mRT.V1(');
define('NONCE_SALT',       '>O4IW|LfU=tV`->CG=:sW &+dbyY&yo+TTmecOLl@2FK0DUf7#]4kF`)ip:mSMJ9');

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
