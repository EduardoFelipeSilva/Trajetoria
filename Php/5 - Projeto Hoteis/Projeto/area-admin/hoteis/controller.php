<?php



require_once '../../model/Hotel.php';
require_once '../../dao/HotelDao.php';
if ($_POST['acao'] === "Salvar"){
    $hotel = new  Hotel(); 

    $hotel->setNome($_POST['nome']); 
    $hotel->setEstadoHotel($_POST['Estado']); 
    $hotel->setCidadeHotel($_POST['cidade']); 
    $hotel->setPreco($_POST['preco']); 
    $hotel->setQntdQuartoHotel($_POST['QntdQuarto']); 
    $hotel->setStatusHotel($_POST['status']);
    $hotel->setdescQuartoHotel($_POST['descQuarto']); 
    $hotel->setToken($hotel->generateToken()); 
    $hotel->setImagem($hotel->salvarImagem('')); 


    try {
        $HotelDao = HotelDao::insert($hotel);
        header("Location: index.php");
    }catch(Exception $e) {
        echo 'Exceção capturada: ', $e->getMessage(), "\n";
    }
}
if ($_POST['acao'] === "Delete"){
    try {
        $HotelDao = HotelDao::delete($_POST['id']);
        header("Location: index.php");
    }catch(Exception $e) {
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
    }
}

if ($_POST['acao'] === "Update"){
    try {

        $HotelDao = HotelDao::Update($_POST['id']);
        header("Location: index.php");
    }catch(Exception $e) {
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
    }
}
?> 

