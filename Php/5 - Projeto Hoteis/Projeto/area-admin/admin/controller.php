<?php
require_once '../../model/Admin.php';
require_once '../../dao/AdminDao.php';
if ($_POST['acao'] === "Salvar"){
    $admin = new Admin(); 

    $admin->setNome($_POST['nome']); 
    $admin->setSobrenome($_POST['sobrenome']); 
    $admin->setCpf($_POST['cpf']); 
    $admin->setEmail($_POST['email']); 
    $admin->setNasc($_POST['nasc']); 
    $admin->setSenha($_POST['senha']); 
    $admin->setImagem($admin->salvarImagem('')); 
    $admin->setToken($admin->generateToken()); 





    try {
        $AdminDao = AdminDao::insert($admin);
        header("Location: index.php");
    }catch(Exception $e) {
        echo 'Exceção capturada: ', $e->getMessage(), "\n";
    }
}
if ($_POST['acao'] === "Delete"){

    try {
        $AdminDao = AdminDao::delete($_POST['id']);
        header("Location: index.php");
    }catch(Exception $e) {
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
    }
}

if ($_POST['acao'] === "Update"){
}
    ?> 
