<?php 

// Return CSS
function get_css()
{
    global $TEMPLATE_DIRECTORY_URI;

    $css = sprintf
    ( 
        '<link rel="stylesheet" href="%s/%s" lazyload>',
        $TEMPLATE_DIRECTORY_URI,
        'style.css'
    );
    return $css;
}

// Return JS
function get_script()
{
    global $TEMPLATE_DIRECTORY_URI;

    $script = sprintf
    ( 
        '<script async src="%s/%s"></script>',
        $TEMPLATE_DIRECTORY_URI,
        'js/script.min.js'
    );

    return $script;

}

// GETTING GOOGLE FONTS
if (GOOGLE_FONTS)
{
    function load_fonts()
    {
        return (
            sprintf
            (
                '<link href="https://fonts.googleapis.com/css?family=%s" rel="stylesheet" lazyload>',
                GOOGLE_FONTS
            )
        );
    }
}

// GET BOOTSTRAP
function bootstrap()
{
    global $TEMPLATE_DIRECTORY_URI
?>
    <link 
        rel="stylesheet" 
        href="<?php ___( $TEMPLATE_DIRECTORY_URI ) ?>/source/bootstrap/dist/css/bootstrap.min.css"
        lazyload />
<?php
}


// Load Everything
function sources()
{
    global $TEMPLATE_DIRECTORY_URI;
    jQuery();
    if(defined('USE_AJAX'))
        ___('<script>var plainscripts =  { ajax_url: "' . $TEMPLATE_DIRECTORY_URI . '/actions/" }</script>');
    #___(get_css());
    ___(get_script());
    ___(load_fonts());
    #bootstrap();
}