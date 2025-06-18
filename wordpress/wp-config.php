<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '202425_5ia_abdelhamid_wordpress' );

/** Database username */
define( 'DB_USER', 'momo' );

/** Database password */
define( 'DB_PASSWORD', 'momo1234' );

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
define( 'AUTH_KEY',         'kt6yPg+[GJ:yKNp_JIJM,-w-egv&}vEhh6s&#5wqa-5V;[k6W3=.zLH9rETW8CK1' );
define( 'SECURE_AUTH_KEY',  'exN+d|N@:vRrppP+S}Tg%zVgGm)>6u@*SsBAe>R5(,8LN %@Ya5?4SftbsP%zt^9' );
define( 'LOGGED_IN_KEY',    'B~xP/UQ=-xMQ<d4<1(0I(0qDBZqO))19Y-,xn^2p,D/.kjXg:r[4!x uXU1jXk);' );
define( 'NONCE_KEY',        's$$|@%.IGt$a[XFwu}CPkn.Rdi/QAeT/?HTk)y^,lFaCF^=_e}Wo=_AzktCUP]S&' );
define( 'AUTH_SALT',        'zW7_,vORCtf+6b1yK]Q)-u1& 2tFS8WqS;%cck/.!oaQYx6dOJ@xrrB|&<N2=vbB' );
define( 'SECURE_AUTH_SALT', 'ZBJ6PF.y*]cJQM@O}s>,]2@&D*!_P>zDP->(c-wQWhi- &7zG`X2VNao*2h!TxAF' );
define( 'LOGGED_IN_SALT',   '5J1X&5*4jwU%LRT*ca!tlzqb>EOrk/*~CEVI*J,);A(Yy3l4YH? )(sZ&AwUtmqJ' );
define( 'NONCE_SALT',       '(.Dh~i#[WU)/tJ%p h8ybok{>D_U&2-JQKG3!.rla-(P)&}H?-U}6AV;oj$-?u*#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
