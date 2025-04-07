<?php
session_start();
if(!isset($_SESSION['autenticacao']) || $_SESSION['autenticacao']=='NAO'){

header('location: index.php?login=naoautenticado');
}
?>