<?php
    require_once '../dao/Conexao.php';
    
    class HotelDao{
        public static function insert($hotel){
             $conexao = Conexao::conectar();
            $query = "INSERT INTO tbHotel (nomeHotel, estadoHotel, cidadeHotel, precoHotel, qntdQuartoHotel, descQuartoHotel,  statusHotel, fotoHotel, tokenHotel) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $hotel->getNome());
            $stmt->bindValue(2, $hotel->getEstadoHotel());
            $stmt->bindValue(3, $hotel->getCidadeHotel());
            $stmt->bindValue(4, $hotel->getPreco());
            $stmt->bindValue(5, $hotel->getQntdQuartoHotel());
            $stmt->bindValue(6, $hotel->getdescQuartoHotel());
            $stmt->bindValue(7, $hotel->getStatusHotel());
            $stmt->bindValue(8, $hotel->getImagem());
            $stmt->bindValue(9, $hotel->getToken());
            $stmt->execute();

        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbHotel";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
            }


    
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbHotel WHERE idHotel = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
            }

        public static function update($id, $hotel ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbhotel SET 
            nomeHotel = ?, 
            estadoHotel = ?, 
            precoHotel  = ?,
            qntdQuartoHotel = ?, 
            descQuartoHotel = ?, 
            statusHotel = ?, 
            fotoHotel = ?, 
            tokenHotel = ? 
            WHERE idHotel = ?";
            $stmt = $conexao->prepare($query);
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $hotel->getNome());
            $stmt->bindValue(2, $hotel->getEstadoHotel());
            $stmt->bindValue(3, $hotel->getCidadeHotel());
            $stmt->bindValue(4, $hotel->getPreco());
            $stmt->bindValue(5, $hotel->getQntdQuartoHotel());
            $stmt->bindValue(6, $hotel->getdescQuartoHotel());
            $stmt->bindValue(7, $hotel->getStatusHotel());
            $stmt->bindValue(8, $hotel->getImagem());
            $stmt->bindValue(9, $hotel->getToken());
            $stmt->bindValue(9, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
    }
?>