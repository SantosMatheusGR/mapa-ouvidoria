<?php

$mysqli = include 'includes/conexao.php';
include 'functions/ouvidoria.php';

$protocolo = $_POST['protocolo'];

$result = consultar($mysqli, $protocolo);

var_dump($result);
exit;

