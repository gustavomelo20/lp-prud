<?php
	function post($url, $data)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);
		return $server_output;
	}
	$nome = input('nome');
	$telefone = input('telefone');
	$email = input('email');
	$mensagem = input('mensagem');
	$token = input('ca7993ff73599c9f0003a6a424b6d13d');
	
	post('https://app.conectamanager.com.br/api', array(
		'token' => 'ca7993ff73599c9f0003a6a424b6d13d',
		'identifier' => 'LANDING',
        'nome' => $nome,
        'email' => $email,
		'telefone' => $telefone,
		'campo_431708' => $mensagem
	));
?>