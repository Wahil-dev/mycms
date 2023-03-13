<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'wahil-chettouf_mycms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'S+h2e:2v/xCYD|11od_&]97~LQ@mqBwPP6btR7py)-:c#9@Z9h31iv#V|jU4Q72/');
define('SECURE_AUTH_KEY', '42(/5aCOAk[2nx-18SxA|JEU#VM1E)6P*5;_;ZcP0;]TvZ-tdN&CMet24&n6#++s');
define('LOGGED_IN_KEY', '7g2_O6_rKOXr550+Z0Y86|i*02eGv-Ethl#0~2t!QNyA28233o0GA)-d18GQeu1D');
define('NONCE_KEY', 'f]x[blV8H)@uD1Hr)g5p#7p5W:&|l&hx6_)3kS%n5~7XB3#t2#S0;VZM87&*zD6Q');
define('AUTH_SALT', '[2~vn3biNE2801_d@0omI0-:X03o&Zn/3skb785:12vl0@E)4x5|*~5b]KCmS7E[');
define('SECURE_AUTH_SALT', 'y75kM#I3@_R1IwH8D&S-%mu3H-1T|5-t4bz0b4a)ki3#x@8F;8kkh[s%L39HX7:&');
define('LOGGED_IN_SALT', 'r1*9J]8)*]]M[@X|7gciLE&dPsnl3g+W_d/*CY5V|SfeI4&tF)[tZ31hJv]FKVt]');
define('NONCE_SALT', '0Ar22(+VhE6bGst@k(8k9Ku[pA6XBH%9P-aAM7TljBf2rfIrL%O7d8~|k*@3/O[5');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p33tv_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
