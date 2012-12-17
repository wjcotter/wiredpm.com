<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local de$
*/

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'bill' );
define( 'DB_PASSWORD', 'Irish510' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'


// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ===============================
// Switch SITEURL & HOME Constants
// ===============================

define( 'RELOCATE', true);

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'p6B<B<eR05:a.tQMUGTp)eD[ju3H7DH0&[/<;Q|w# fd#)D~q]-10Y<)50B;pcLq');
define('SECURE_AUTH_KEY',  ':>RNMik-Y,O^[c^8;GXtT}`z> 0kD2j$0)|8SxJ;l*QJ?Kp^G^%4-X}yFw(I4{8z');
define('LOGGED_IN_KEY',    '53K:%*0eLAD6nk4wny%*t=0iV;tMe|W?EzeIOs|%MG=AH=jp 0=HbPI9ls7?-%]n');
define('NONCE_KEY',        'yh{dx1)rh(B@[7^:R{298UO5gYnE~3!<0RVfan%FYx?6++Pk;(laqdwj,.;_I|w+');
define('AUTH_SALT',        '%Diti[pIjlcy+Ctu WA MvZ#L3seTfCN&x7On!-OAC/oU*hGX_{:s4y%lZb7)<9P');
define('SECURE_AUTH_SALT', 'U3(V<mP/:~--=~lO|sFdlxUN}z5R7F~Ed@%_Z|Ix/&H9a;e2nlT}zR%*Na5{evx4');
define('LOGGED_IN_SALT',   'X!/u+i(2o2`w*kk-o7OC+XV*}V!)UXe2->Y(rj*SsP)+iX5X{/oNSN]HBF:- s#7');
define('NONCE_SALT',       '^]$!=->5CsN2>@f)v+a`bGJ`$Wo*,`:FuUW?th&6tPUaAYY]%sl-V|a~EqNo_E_:');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );

//==================================
//Bypass FTP connection credentials:
//==================================
define('FS_METHOD','direct');
