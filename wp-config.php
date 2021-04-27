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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bigmomsbeauty-healthshop_db' );

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
define( 'AUTH_KEY',         'C^^9#:{nt#)=!x~@./9tWSeo7>;uh!20;QaxZ0PC]]d552h:GpjtbdiG<1N?|=-0' );
define( 'SECURE_AUTH_KEY',  '4!$Nuzkhdk-Q/[Jj<ZuNMgA y|+<7 $1u>z],(>_bB+Ti*sB38^EVg`twK.~[b&M' );
define( 'LOGGED_IN_KEY',    'FfcRM7p7C6Z;Zi{0QFnJIq;CAt5=xW~qg!*wgU2Fg_.Co5%fd:<D[ZCjO*zgj5vE' );
define( 'NONCE_KEY',        'NBx&^7DmL@%/`5P{GU?Z+Ac}C9FyD}1r{Z~>IN[+%;CFMw{/a{|_l.8GMkDX{M(}' );
define( 'AUTH_SALT',        'H3M[#8+AlLOAZK`>;hzkJFoH,JQey>t$n!%%imWwdMQO}YYk,T]Y}EbrM&2kn4~A' );
define( 'SECURE_AUTH_SALT', 'Q<vMIu(BA/,XF}fB*pLhx[[5)#4<aun}93=n@A{AF]fG35F JS~ JYbyjJOTM.M,' );
define( 'LOGGED_IN_SALT',   'J$(~sihF^)x<M-te~H.1ozpWZz+1jSo+C~O.Owe;_[=j=+Fi}4OXaXNTGGHI]VdQ' );
define( 'NONCE_SALT',       '^q5!p@D_l%7+X-P{QxA:+bZ[k6]}etwPV||n#EgBh1_`3 Fk82`0+]rIa]r>*`XM' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
