<?php 

global $TEMPLATE_DIRECTORY;

$files = glob( $TEMPLATE_DIRECTORY . '/inc/**/*.php' );

foreach ($files as $file)
    require( $file );