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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         ']][t|vKE2P_Z.)x=CpU85uhr|0X:8#TE33%mp<C<+%}:M(c<CPHb0j+@zxSAoiQM' );
define( 'SECURE_AUTH_KEY',  '*pn~OVJQ.<oe[1OD:H0Qv*P|rEqL~NCT:WhlU%p$==!e<6A]E-/s%9dN-0KbQv*W' );
define( 'LOGGED_IN_KEY',    'J8C^-.v+6<odkgV^ZxM|A)]OC8UHA@QzY[(FZFU%SKbe}M=ki[#KMUAQ/o0^I,fQ' );
define( 'NONCE_KEY',        '`LKFTE1@pfwk%3-E^S>hA!axLs!Ujs_E|(cT4wR/&P71%uJ3b,lI<~K%d0;R}__&' );
define( 'AUTH_SALT',        'Zkcw:@=8pEcd*nt[,l%$TtlGuWjg7N:)D8i|n2YE,l~b1`hFz3aO5ePmjIr*/g;_' );
define( 'SECURE_AUTH_SALT', 'h,_VixBg$<q(Nb:?&=-u,U-ID=V-5:fg8~G3|qS}Qzj-1nQ;tmrz=3d&bNL+h{_L' );
define( 'LOGGED_IN_SALT',   '$$Z7);w]vIr5GQQzo*|O1*Mq*##cD_RE,k]5^I)7J~JfcqwB(lI&3`!SqRvHR=?4' );
define( 'NONCE_SALT',       'ie(`#%q0Ay.xFJ<4;-;>G1eQ-miz_Ku,L{f]Lz8t<(vEKDw!}L]_X$%O[VU{<Ekh' );

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
