<?php

/**
 * Alterar dados de acordo com seu servidor
 */
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$banco = 'ouvidoria';

// iniciando conexão
$mysqli = mysqli_connect($servidor, $usuario, $senha, $banco);

// checando conexão
if (mysqli_connect_errno()) {
	echo 'Erro de conexão com o banco de dados';
	exit();
}

return $mysqli;
