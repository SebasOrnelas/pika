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
define( 'DB_NAME', 'pika' );

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
define( 'AUTH_KEY',         '_Q&9}r XgZ8,u7B0p1y RY_FCzF$8w)so1a|+~SRfU>&y6X2cPjE>2Ml&Z5*Ec*s' );
define( 'SECURE_AUTH_KEY',  'ycb^]mK>a(^,&HErTToV&eJpsv6$bj=Zd&(QA<sjCA/)BZ^lT5Exr[nwW(MfuytX' );
define( 'LOGGED_IN_KEY',    'R<Aui9_(*X$j/;dl|oNA| l &PTavuX%cvh>GZAP0s#!,(3{jh1:v&Epwl@)%Ho.' );
define( 'NONCE_KEY',        'x8f?}P4Ru4,+*3eEl[L,;[+niQcH}#s#8q3jg-1A=}U/,eQ~=^Dn$LYY;ak<)4{a' );
define( 'AUTH_SALT',        '4t?z+Er$`>hm1$`vXia*z!FHz@w?}8zR$iEqmRSIx}{8zE&,U}0eM4U_&Q%>MJ]]' );
define( 'SECURE_AUTH_SALT', 'z$SHu?=-S-Qo`NV<9K3W=/3.tHY`;A`*c~|`JfQ+=3 >jcs(;2*^oayN:FYUI~28' );
define( 'LOGGED_IN_SALT',   'T.-.iA+M{i-,7jV`x^up<}Wr@ESEB|-GmBfH[X~Er@qI1_zsG`^#QN#I Sh#$AnJ' );
define( 'NONCE_SALT',       '(}#.Z9<tJ4~5pgf[5I~EDed/C)FY<(b5U;]e?cM8z6=@%Av)l68+5lzVDk}P#.n%' );

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
