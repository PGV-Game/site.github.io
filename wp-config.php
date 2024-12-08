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
define( 'DB_NAME', 'police-pgv_mysql' );

/** Database username */
define( 'DB_USER', '388993' );

/** Database password */
define( 'DB_PASSWORD', 'Poline_PGV10@P' );

/** Database hostname */
define( 'DB_HOST', 'mysql-police-pgv.alwaysdata.net' );

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
define( 'AUTH_KEY',         '-,CsFKKRM6WL<*cC OXKqFJ^|JuW3-W]R(oGdwi*lfPhOGN&J}N08kiXBQ:qvVkz' );
define( 'SECURE_AUTH_KEY',  '+?UNp)n<+h21)fXrEd[YEpH>vy|E*&;]ZUAhd/JF.]O%IYe5(^!3;fZDd5sHe4+u' );
define( 'LOGGED_IN_KEY',    '#m&5?B<bO~u 7`O5|40Z@pZ?}Wnfeh?#]M+WtD^-JMdf>X~Edf/nB}uHzA=& )|x' );
define( 'NONCE_KEY',        '>P`_(<8)H6$d3I(g}bw60~(wm$f5*g+<$BfR!!Eb5}mdvXzA]%7O<.,:}:qsZdXw' );
define( 'AUTH_SALT',        ' >wD+o$KP~`sML1]*[5A6H/}.YR}KRx3)$N=KB-P;OS*;?3y0u3O2<?mR?prw9,t' );
define( 'SECURE_AUTH_SALT', ')/jo$HoL;NP>?Vc;PSneX![fuDJx}VMM(L5-(97`x^LocR<2RudBZ./uk!R74-{~' );
define( 'LOGGED_IN_SALT',   '},?=-Y|{jUN3n x]sM)$XnUg]]#lijh1AzXJE<M71{%lvn>0yDe{:0onOOR!lZ$Z' );
define( 'NONCE_SALT',       'MaxJ2d bX*6aCiCIPp%#(G]Z#H+>?TP6DCf;:qQ77?em!}5Q]d4oxQHV3M{O%rxl' );

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
