<?php 

function get( $handle = '', $ext = '.php' )
{  
    global $TEMPLATE_DIRECTORY;
    if (file_exists($TEMPLATE_DIRECTORY . '/' . $handle . $ext))
        require ( $TEMPLATE_DIRECTORY . '/' . $handle . $ext);
    else
        return false;
}

function get_modules( $file, $module = 'components' )
{
    $mod = get( 
        sprintf(
            'modules/%s/%s', 
            $module, 
            $file 
        ) 
    );

    if ($mod)
        return true;
    else
        return false;

}