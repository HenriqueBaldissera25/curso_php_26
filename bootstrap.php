<?php

require_once "./conexao.php";
require_once "./BancoDeDados.php";
require_once "./Usuario.php";

$banco = new BancoDadps ($conexao);
$usuarioModel = new UsuarioEntity($banco);
