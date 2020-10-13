<?php 

// Definitions


global $TEMPLATE_DIRECTORY, $TEMPLATE_DIRECTORY_URI;

// Template Setting
$TEMPLATE_DIRECTORY = __dir__;
$TEMPLATE_DIRECTORY_URI = sprintf( 'http://%s/ehtuacapital.com', $_SERVER['HTTP_HOST']);

// Loading fonts from Google Fonts
define( 'GOOGLE_FONTS', 'Merriweather:900|Open+Sans:400,800' );

// Setting timezone to America/Sao_Paulo
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

// Setting database connection credentials
define( 'CONNECT_DB', false );
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'ehtua' );

// Turning on ajax

define('USE_AJAX', true);

// Setting Mail SMTP

define( 'SMTP_AUTH', true );
define( 'SMTP_HOST', 'smtp.dreamhost.com' );

define( 'SMTP_USER', 'INSERT_THE_DATA_HERE' );
define( 'SMTP_PASS', 'INSERT_THE_DATA_HERE' );

define( 'SMTP_FROM', 'INSERT_THE_DATA_HERE' );
define( 'SMTP_FROM_NAME', 'INSERT_THE_DATA_HERE' );


define( 'SMTP_PORT', 465 );
define( 'SMTP_PROTOCOL', 'ssl' );

define( 'SMTP_IS_HTML', true );
define( 'SMTP_DEBUG', 0 );

// Loading all functions
require( $TEMPLATE_DIRECTORY . '/inc/load.php' );