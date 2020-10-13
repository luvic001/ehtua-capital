<?php 

function get_image( $file )
{

    global $TEMPLATE_DIRECTORY_URI;

    $src = sprintf( '%s/img/%s', $TEMPLATE_DIRECTORY_URI, $file );

    return( $src );

}