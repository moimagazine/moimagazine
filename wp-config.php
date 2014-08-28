<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'moimagazine');

/** MySQL database username */
define('DB_USER', 'moimagazine');

/** MySQL database password */
define('DB_PASSWORD', 'moimagazine');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tY4u.4J2NF{/ky1wbug0IC>>/lg3Y8H$ofFLc#&eyL0FGZtE7`$w;%<us^bZk=ie');
define('SECURE_AUTH_KEY',  'ifE{x~Q%J.,<iF_1aZJq@HU-.#80)ZO}ka35!n&{)~N]p>/F?3%h0Qv^a5B<Rv=m');
define('LOGGED_IN_KEY',    'U_-$3T;DmYwA3Cdp:mAabGjUX#Lk/1Q2;d<u/e(x$$>$_*Z w&*/D{,{$qruvmS*');
define('NONCE_KEY',        'g;8]#e-xjs)za5?c [(kd.s~V|Y9w|wnhV[>FS)Qv12C;:&W*Izw8*HR ;G(Co~E');
define('AUTH_SALT',        '5.13_hJ6T0LhApzwffcF)@.eU$pl6s ~ XyPbK8f44p}1o@SxzMeub]D?7YZN_h,');
define('SECURE_AUTH_SALT', 'TbUtX+ET40w>*:B+@D4Amxe[vc?1z@?6C6KO*$f/qg*}/w,TC5DY6[;AtapJPC#c');
define('LOGGED_IN_SALT',   ' yN|7`s)%GG>)J#$;6j*JHE@EM|;@Rid.`QynwUc5cW.:gjIEqf~L.a9Kj5->isz');
define('NONCE_SALT',       't/QqHd(H`td)!S>T2U99g#sf,`(D.CX$9N)iX(]FdA:5Z]O nQ:g1j2Q.[xym%F<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
