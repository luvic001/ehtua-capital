<?php  require( 'functions.php' );

get( 'header' );

get_modules( 'webdoor', 'home' );
get_modules( 'quem-somos', 'home' );
get_modules( 'portfolio', 'home' );
get_modules( 'clipping', 'home' );

get( 'footer' );