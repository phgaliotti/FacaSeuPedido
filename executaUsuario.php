<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once 'classes/UsuarioDAO.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

$UsuarioDAO = new UsuarioDAO();
$UsuarioDAO->insertUsuario($nome, $email, $cpf, $rg, $bairro, $endereco, $numero, $telefone, $celular);

echo "Usuário inserido com sucesso";

