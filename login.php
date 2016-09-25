<?php

header('Content-Type: application/json');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'samukajobs' && $senha == 'samuelfelipe')
{
	echo '{"sucesso":true}';
}else
{
	echo '{"sucesso":false}';
}