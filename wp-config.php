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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hawier2384@#3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'SOVp&-_o)Xf5ZY!Nf8Uh9Tt`g;IqP#<S3eku/h1>Pp8$kU#<kj$1~V:*RVtof/QP' );
define( 'SECURE_AUTH_KEY',  'jk6c;NdqL5-:mqRye`L)V}}`(&Rt&[Qh1pqnCE2%2h;JT_#<Bt@qI{3`bE[_>__/' );
define( 'LOGGED_IN_KEY',    'Z-jIB~anzey,40Jj:ukOIhOk{(j4l/bC|v)_mh~}Q_2hs`~/!y&1Wl=?Hxk5pvv/' );
define( 'NONCE_KEY',        ']_GT4V$#On|3.VMD*_.!2F5$Qo YADeJ]PvSKr4Jbs36^WnAkL|_soY9,[_Ax!c)' );
define( 'AUTH_SALT',        'icH4Jamy>n`{&(XTv+LR+8=w|B+CJeRomsd_>LlBPUt&FmaqE}Cwf+Max_>Q;Ru4' );
define( 'SECURE_AUTH_SALT', 'E|-[WKA$oQVPrJm/I%57HAQG!XL^fT+srL}0$m}_-V[avt|L>LVR4B08wLw8H{&c' );
define( 'LOGGED_IN_SALT',   'RC0RGdp}9$3Mnru1t7_,E(y^XtwkCrJ?q_.)/,1flHmS#wwV>O+w;KdTpy!uvUKd' );
define( 'NONCE_SALT',       ';BdS2L?W=CPHNT%;L+G0On{+hLDRN;U.+Glu98q2m_u05k1_gVP!PVc7kx(LoDE.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'doc';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
