<?php 

header('content-type: application/json');

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

$pre = json_encode(
            array (
                'http_state' => array (
                    'code' => '403',
                    'description' => 'Forbidden'
                ),
                'message' => "You're not allowed to access this page. Sorry"
            )
        );

if (!IS_AJAX){
    http_response_code(403);
    die($pre);
}

$pos = strpos($_SERVER['HTTP_REFERER'], getenv('HTTP_HOST'));
if ($pos === false){
    http_response_code(403);
    die($pre);
}

if (isset($_POST['action']))
{
    require( 'functions.php' );
    define( 'AJAXING', 'AJAXING' );
    get( "ajax/{$_POST['action']}" );
}

else
{
    die($pre);
}