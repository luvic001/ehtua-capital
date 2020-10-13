<?php

header('content-type: application/json');

foreach ($_POST as $p => $value)
	$request_data[$p] = $value;


$verify = preg_replace('/[^0-9]/', '', $request_data['telefone']);
if (!telefone($verify))
{
	$error = '';
	$data['content'][] = [
		'ID' => '#telefone',
		'message' => 'Telefone Inválido'
	];
}

$verify = filter_var($request_data['email'], FILTER_VALIDATE_EMAIL);
if(!$verify)
{
	$error = '';
	$data['content'][] = [
		'ID' => '#email',
		'message' => 'E-mail Inválido'
	];
}

$verify = ( !!preg_match( '|^[\pL\s]+$|u', $request_data['nome'] ) );
if (!$verify)
{
	$error = '';
	$data['content'][] = [
		'ID' => '#nome',
		'message' => 'Não use caracteres especiais no campo nome'
	];
}

$verify = empty($_POST['g-recaptcha-response']);
if($verify){
	$error = '';
	$data['content'][] = [
		'ID' => '#g-recaptcha',
		'message' => 'Preencha o reCAPTCHA'
	];
}

if (!isset($error))
{
	$data['success'] = true;
	get('ajax/send_mail');

	$msg = sprintf(
		'<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Contato Ehtua</title></head><body><table align="center" style="border: 1px solid #001f27; width: 720px; background-color: #eee; padding: 3rem;"><thead><tr><td align="center" style="padding: 20px 0px"><img src="https://ehtua.agenciacampana.com.br/img/Logo.png" alt="Logo Ehtua"></td></tr></thead><tbody><tr><td><h2 style="font-size: 24px; text-align: center; color: #999; font-family: trebuchet MS;">%s</h2></td></tr><tr><td><p style="font-size: 18px; max-width: 480px; margin: 0 auto; text-align: center; color: #444; font-weight: 400; font-family: trebuchet ms;"><em>"%s"</em></p></td></tr></tbody><tfoot><tr><td><p style="max-width: 480px; margin: 0 auto;"><strong>Telefone:</strong>%s<br><strong>E-mail:</strong> %s</p></td></tr></tfoot></table></body></html>',
		$request_data['nome'],
		$request_data['mensagem'],
		telefone($request_data['telefone']),
		$request_data['email']
	);

	send_mail('lucas.victor@agenciacampana.com.br', explode(' ', $request_data['nome'])[0], 'Contato pelo site - Ehtua', $msg);
}
else 
	$data['success'] = false;

___(json_encode($data));