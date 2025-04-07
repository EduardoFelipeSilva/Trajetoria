<?php
require_once '../../model/User.php';
require_once '../../dao/UsuarioDao.php';
if ($_POST['acao'] === "Salvar"){
$usuario = new User(); 

$usuario->setNome($_POST['nome']); 
$usuario->setCpf($_POST['cpf']); 
$usuario->setEmail($_POST['email']); 
$usuario->setSenha($_POST['senha']); 
$usuario->setEndereco($_POST['endereco']); 
$usuario->setNasc($_POST['nascimento']); 
$usuario->setContato($_POST['contato']);
$usuario->setToken($usuario->generateToken()); 


try {
    $UsuarioDao = UsuarioDao::insert($usuario);
    header("Location: index.php");
}catch(Exception $e) {
    echo 'Exceção capturada: ', $e->getMessage(), "\n";
}
}
if ($_POST['acao'] === "Delete"){

try {
    $UsuarioDao = UsuarioDao::delete($_POST['id']);
    header("Location: index.php");
}catch(Exception $e) {
        echo 'Exceção capturada: ', $e->getMessage(), "\n";
}
}

if ($_POST['acao'] === "Update"){
}
?> 
