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
//define( 'DB_NAME', getenv('MYSQL_DATABASE'));       ALT
define( 'DB_NAME', 'wordpress'); 

/** MySQL database username */
//define( 'DB_USER', getenv('MYSQL_USER'));           ALT
define( 'DB_USER', 'wordpress');  

/** MySQL database password */
//define( 'DB_PASSWORD', getenv('MYSQL_HOST').':'.getenv('MYSQL_PORT'));   ALT
define( 'DB_PASSWORD', 'wordpress');  

/** MySQL hostname */
//define( 'DB_HOST', 'localhost' );                  ALT
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
    define('AUTH_KEY',         '![%na44+mg[oI4hSz+[SKx|GOd1N%FT~!6hb.3@#^S5:ilt,E@(4{f:F>aFp?|7h');
    define('SECURE_AUTH_KEY',  'Gl~h#_-v91RyOjtuN[{31)@5D%+!Ey@dC2z/t%)c:/;-[72(|1zh|uaj84|uyum|');
    define('LOGGED_IN_KEY',    ',$4X|eW@~8K5[~Bk!TXXZE 6 2VcCaZ(dh]-ps&mX3Q.xUlkM-d< p=]V_eksQd+');
    define('NONCE_KEY',        'DDYrjDxWzVc}~(@Dt<l;I:lj`CJJ{s,.5MImAEC2r(9<*m}}5-t=V:.+]S$+l-AY');
    define('AUTH_SALT',        '<Z=A&,:~|ybZ GC~Hji3y+Fw^U92!YMUy*YhS,+XADMkql2&pfszd7B@Ev==p85@');
    define('SECURE_AUTH_SALT', '-J`4:,%|$S&n#ubX=9(F;#/i6p5FZm0~f-t5avp%2FX]d;/R[;R2_K?<}:okr]=,');
    define('LOGGED_IN_SALT',   ',b.5FK,d@4Y-s=>|3B>muJHbi1@|qiQR%9]V_p)YlN~c:S]>AgJ.t|i-3Gp@~`-*');
    define('NONCE_SALT',       'iXAytaq;SeXT@oBK@J=*{?s2o?b>Ue[N($v;e*YJuS;YB|dJ.ve-5*DJ d;-Paiv');

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