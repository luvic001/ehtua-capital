<?php

function HTTP_REQUEST_DATA( $method, $url, $datas = NULL )
{

    $metodo = $method == true ? 1: 0;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_setopt($ch, CURLOPT_POST, $metodo);
    if( $datas ) 
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datas) );

    $dados = curl_exec($ch);
    $data = json_decode($dados);
    curl_close($ch);

    return( $data );

}