<?php
define( 'WP_CACHE', false ); // Added by WP Rocket


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'q453_auditorulpd' );
/** MySQL database username */
define( 'DB_USER', 'auditorulpd_q453' );
/** MySQL database password */
define( 'DB_PASSWORD', 'GTnNiqnj0xU7n7VX' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iRPoLyAg1#o8aV9jJY@ J%:[HE>o4N@L4rsxOpf,?u{2.cg!S/dpw.zN=|[5+d}N' );
define( 'SECURE_AUTH_KEY',  '~6 58$!qeU+k4RT ^#MB[/@_RfCsiRAsUwu m1#E7R+abJ{D)NNzK=k8;QPjO)Bf' );
define( 'LOGGED_IN_KEY',    'YH3>`.}hSruyg#yDt6V$U[*>q^E0re&zh?)W#./Lmg Az*3_ht6U^YLcruQxvXhY' );
define( 'NONCE_KEY',        'RVkRsSqYS9<_esw=&U.0uGT@G(@%Oh owk8hq>956KTAbseG=^,g|934k[(73P3c' );
define( 'AUTH_SALT',        'TH*?qcgaVC3H<~?r={qd_dz Hw,;cl+`fTZf4pR)#1C2Q%ZCZH>(0KO>Ga1ePHS8' );
define( 'SECURE_AUTH_SALT', ':BQLgq0d^ubb(&n}!LDR2DVa7X=qW?Ct;a@;6:eD=Wr1I<A:^:VId$,*s8%*3J$L' );
define( 'LOGGED_IN_SALT',   'M0jnq<Ki9h0Kk]}ssHA3mTm*#Xl[s.H?B,&=x]V}hY&8{wwshCFH8qxi5Kj2SGKx' );
define( 'NONCE_SALT',       '<zcm9,{@@KF*8W;(>vyn.jnSA#M=.1pz!eAwdDr^kHrW%0kTGyPW-RNdqu?S1.OE' );
/**#@-*/
/**
 * WordPress database table prefix.
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
/* Add any custom values between this line and the "stop editing" line. */
define( 'DISABLE_WP_CRON', true );
define( 'WP_CACHE_KEY_SALT', 'auditorsdesk.in_hrFNopw_' );
define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';