<?php

function validate_fields($fields)
{
    $fields = to_object($fields);

    $data['telefone'] = in_array 
    (
        strlen(preg_replace( '/\D/', '', $fields->telefone )),
        array 
        (
            10, 11
        )
    );

    $data['nome'] = ( !!preg_match( '|^[\pL\s]+$|u', $fields->nome ) AND
                    ( strlen($fields->nome) > 3 ) );

    return (to_object($data));

}