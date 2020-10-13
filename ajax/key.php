<?php

if (!defined('IS_AJAX'))
{
    http_response_code(403);
    die
    (
        json_encode
        (
            array
            (
                'code' => 403,
                'Você não tem permissões para acessar esta página'
            )
        )
    );
}