<?php

$usuarios = 'root';
$senha ='';
$database = 'tela login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuarios, $senha, $database);

if ($mysqli->error)
{
    die("Falha a conectar ao banco de dados: ". $mysqli->error);
}