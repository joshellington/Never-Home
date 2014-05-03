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

// Define Environments
$environments = array(
    'local' => '.dev',
    'development' => '.dev',
    'staging' => 'stage.',
    'preview' => 'preview.',
);
// Get Server name
$server_name = $_SERVER['SERVER_NAME'];
 
foreach($environments AS $key => $env){
    if(strstr($server_name, $env)){
        define('ENVIRONMENT', $key);
        break;
    }
}
 
// If no environment is set default to production
if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'production');

switch(ENVIRONMENT){
    case 'local':
        define('DB_NAME', 'Neverhome_wp');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'localhost');
        define('WP_DEBUG', true);
        define('WP_SITEURL', 'http://neverhomemusic.dev/wp/');
        define('WP_HOME', 'http://neverhomemusic.dev/wp/');
        break;
}

if(!defined('DB_NAME'))define('DB_NAME', 'neverhome_prod_wp');
if(!defined('DB_USER')) define('DB_USER', 'ellingtj');
if(!defined('DB_PASSWORD')) define('DB_PASSWORD', 'uranus');
if(!defined('DB_HOST')) define('DB_HOST', 'mysql1.joshellington.com');
if(!defined('DB_CHARSET')) define('DB_CHARSET', 'utf8');
if(!defined('DB_COLLATE')) define('DB_COLLATE', '');
if(!defined('WP_SITEURL')) define('WP_SITEURL', 'http://neverhomemusic.com/wp/');
if(!defined('WP_HOME')) define('WP_HOME', 'http://neverhomemusic.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'Neverhome_wp');

// /** MySQL database username */
// define('DB_USER', 'root');

// /** MySQL database password */
// define('DB_PASSWORD', '');

// /** MySQL hostname */
// define('DB_HOST', 'localhost');

// /** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

// /** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C|(0-<|70VSO?|[wRJR!_}w7I>P.-__V&c:F7h;d=*=-d6V:1tsUf$Y;+:6.A^Vp');
define('SECURE_AUTH_KEY',  ']18:-.a{QQUTa1z;M4{OhI:iL$`&Jf+tP>5H|Ave3!X.K^|~g>K^!I(aPfj<8Oio');
define('LOGGED_IN_KEY',    '+r_5x:-Va5:[_M>fuyh3IThP8uPc$2G(<c*j`}z]}]B)!PZGEF)&3|q!rP3udwXV');
define('NONCE_KEY',        'Ye|aJ~.YegSii|4R9p+~Bw}A/!dJ2ew4JUb7-udNh15dy%!20vFYx[hfP+)`S4W?');
define('AUTH_SALT',        'Yel}dc;-^5<Z6@F>J,:%`6=0=m;~F%40|M)3E8g.T_mVm&SC5|E`opk1gcbH}H&]');
define('SECURE_AUTH_SALT', '2#M6qwPRIDhuKw,I|_(JQ&oH7p+E]?sd$@~eN<W%^b|O1Hk-^E_[dveC]O)?@ey.');
define('LOGGED_IN_SALT',   ':^+KC<Af#ZJtBeTRpx-A9 @Q^PKOjoJDAz[V}+F;I<+]-V(RvP=6n~iEGG%F?Z8[');
define('NONCE_SALT',       '-q,qD+J!XZQIF[.Lo%#MpnbyL(KYG$V0A)RUqp~&=w?mPU*%ZeG]RTM#NzMW}5a)');

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
