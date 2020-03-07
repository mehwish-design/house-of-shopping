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
define( 'DB_NAME', 'house-of-shopping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',8}{~)}n4%m8C&demvA`rdlF+Dbp:W}&>Ca(oXZci}-4K9D=$LnY[U#I+#*~98tP' );
define( 'SECURE_AUTH_KEY',  'nFw!L #`*/5Z+.8RAnj[U@bG#wiToK6oecG `Xrou(~@,^U5dGC8~6yG5r^+}RLu' );
define( 'LOGGED_IN_KEY',    '3U?4hFxx`v%J-5tKzcd^`?v,tZtgwt!o.-tC^HtB8oeT{S5i9oV!~F:b t}QMU0g' );
define( 'NONCE_KEY',        '8^]z+}2^~u^-1o4hQw74pd69E7T*|?e]1ObW{%e<@-C8;2&0UH_J*tIRAZ!rZG@x' );
define( 'AUTH_SALT',        'dXyVg`#2y8M`-Djo$yaIE4>q5Sxk^R1&SZXjK ;(prFFQ=B;)m=2ZLAxTe_!w=j4' );
define( 'SECURE_AUTH_SALT', 'Iy$6(8LARNG7Ef4A8iqk`~dl_zC~3W}?e{#X4@UW:-8CwZPJmR-g;F.QoE*cS/FR' );
define( 'LOGGED_IN_SALT',   'Q_=}bg@t>-tiG#[uiSq))3Et-TCaH!eFc$-BN Ah>LDDPMD3(dRK5mFrRMi*k1Xq' );
define( 'NONCE_SALT',       '{s~wi[}4Xsp>EmG;Hl;nWwN|2;SF^6%mN?~`_%^ekeF(e_B+[zNW(aTAADT+3nZ[' );

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
