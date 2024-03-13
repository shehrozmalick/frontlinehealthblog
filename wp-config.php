<?php
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'frontlineblog' );

/** MySQL database username */
define( 'DB_USER', 'frontlinehealth' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FDv)zdN<(9L:TYV(V2' );

/** MySQL hostname */
define( 'DB_HOST', 'frontlinehealth.cgp4hfnuoywj.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QMVU*V36i%tMiWhq]#n%8;nb$n=pWomr?M[~Z&w94wp.-6XXyJ/`8}EfL5kv)j,>' );
define( 'SECURE_AUTH_KEY',  '=H^)[pqc*,<@.[lVRE!6G8VsW5N#`$CdK}o,I>(qYMM].?[(o8!HuU|T:P^py+n.' );
define( 'LOGGED_IN_KEY',    'jNyxvD%R[4c4%vmIC.w, =M:i=pXn]J.|8{{EcAM%r7 tI`7CZ4YAm)@5Qg[.q:o' );
define( 'NONCE_KEY',        'QtFdl7p{&MbCnlY;7a*W#B]eCRRNZ0*?:#tq`(^OfYj2;Oi<gvUaKM%4inX{c!*$' );
define( 'AUTH_SALT',        'f n*eH;gh,Q^(?3w]+nJni/+88ce4!`1~nRFz@AAX$P,#yJB%U:HXmyZ<IA#B?W_' );
define( 'SECURE_AUTH_SALT', 'C8,A0AMr*amQd.L%|bM8j;.! +jYGGg+,)eovk#GE+LHW|ySotlT0T(L~y=84wW7' );
define( 'LOGGED_IN_SALT',   ',*RaP|78D+>hv:a8oOph,pwmKWj~cUj;*1fBhWyR-HQ:h/bROD_](bVFGsY=Z8S~' );
define( 'NONCE_SALT',       'v}T7z%^5K-&M?U&cd%|]]<P6Pbh8Z/e!cE1)2Wf#Jb+Q:1[cGGul(~U!D~R(,~&_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
