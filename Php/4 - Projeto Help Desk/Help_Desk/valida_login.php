<?php
session_start();

$usuarios_app = array(
    array ('id' => 1, 'email' => 'admin@gmail.com' , 'senha' => '123'),
    array ('id' => 2, 'email' => 'admin@gmail.com' , 'senha' => '123')
); 

 $usuario_autenticado = false; 

 foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user ['senha'] == $_POST['senha'] ) {
        $usuario_autenticado = true; 
    }
 }
 if($usuario_autenticado){
    echo "Usuario auteticado";
    header ('Location:  home.php'); 
    $_SESSION['autenticacao']="SIM";
 }else{
    echo "Erro na autenticação do usuario";
    header ('Location: index.php?login=erro');
    $_SESSION['autenticacao']="NAO";
 }
?>