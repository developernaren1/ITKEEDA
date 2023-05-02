<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'm{W#*qy$0({U^m=ZE@0$S^ba!%L3`$eh#E`YH1GGJw+.-Q==Kdd`x/SFcOk}x+Id' );
define( 'SECURE_AUTH_KEY',  ')^3#[^>)>gnZtoi?1HeO$Zl0C3&zsKMPjq+! iIHmqp*Z(Alv? H?Wuf8T9Mfmzh' );
define( 'LOGGED_IN_KEY',    'wWV^j brA}NZ[Gyw=J=)Wt$@yQ*-`MzK|L0)qFE33hbYtkR(BuaQAJL8<46T^d8}' );
define( 'NONCE_KEY',        '}moj}, xAelM*)-N_ddpWBD+ebwjor4_|O:A;EE#G/kA3H^eX^90f0?ig&I41`X:' );
define( 'AUTH_SALT',        'L,-S/>{/<1`.UcZV*zR[i]Vr#c#?AiU9DQ#1BRUFUq#wM@FA26$?A9TjIN>PiNF;' );
define( 'SECURE_AUTH_SALT', 'U3)*wPsuoF3#xsHz*CX8eZTl(bcyYI;^sXee*H@-7DQhIn1ui-JqZzp_.$XUf!|M' );
define( 'LOGGED_IN_SALT',   'XM5%xI_Xf:H3k}[8%Zy-FGrP{G<i,WLK6*xu2n.QAE^m?!Pn5{z<IdErzHuE&4*C' );
define( 'NONCE_SALT',       'gEi*Y8 (V%|_qdD9$H?4J1Mr! KR8Bu!(Y%,q5l0)J*>O9%zK=/czchki`{s/GV>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
