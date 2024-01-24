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
define( 'DB_NAME', 'telemina_wp781' );

/** Database username */
define( 'DB_USER', 'telemina_wp781' );

/** Database password */
define( 'DB_PASSWORD', 'S3!84p)eY8' );

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
define( 'AUTH_KEY',         'wttd24uxvluym1piy8f6vxvgrfqb979wthtiezjjwryzwjp4ckdtd0bim9c81gzg' );
define( 'SECURE_AUTH_KEY',  'doaoysdpn90q9lliwmrhk4eloofewh0izeg5duqjy9pxai3jhhuecygsupqpp63o' );
define( 'LOGGED_IN_KEY',    'enfrk38sttn3e1pvuvi0ypqvyb4bpvavps7nmmpt3aevxgcwgfkt2jtiatahvrro' );
define( 'NONCE_KEY',        'bmqwddb3dxvtdaw02m460zln3bbz9n5uhopfehrd4iebq0lfc0ahrvgzazef4xqp' );
define( 'AUTH_SALT',        'bojd5bmezezsjkcqcayrevqhtpkyyndn5h2mhs2tps5euqlunycamjd4vxirsyrk' );
define( 'SECURE_AUTH_SALT', 'jsbezappiahljuw7kcjuy9knj0hw8c1auilybxfhselp8sfweq887cv4c8bi59xm' );
define( 'LOGGED_IN_SALT',   'srnm2zalf1yfrccpvcdsevmzhtg0u4rcqgatws18xyel39kfjkn2slfnnwunotmn' );
define( 'NONCE_SALT',       'bl0y1bjbickadasewednnm7nycrjivqtadbgqldqrtkomwottuuosdj5c5jwmtlp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp40_';

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
