<?php
    require_once '../../dao/Conexao.php';
    
    class AdminDao{
        public static function insert($Admin){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbAdmin (nomeAdmin, sobrenomeAdmin, cpfAdmin, nascAdmin, emailAdmin, senhaAdmin, imagemAdmin, tokenAdmin) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $Admin->getNome());
            $stmt->bindValue(2, $Admin->getSobrenome());
            $stmt->bindValue(3, $Admin->getCPF());
            $stmt->bindValue(4, $Admin->getNasc());
            $stmt->bindValue(5, $Admin->getEmail());
            $stmt->bindValue(6, $Admin->getPassword());
            $stmt->bindValue(7, $Admin->getImagem());
            $stmt->bindValue(8, $Admin->getToken());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdmin";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdmin WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbAdmin WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $Admin ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbAdmin SET 
            nomeAdmin = ?, 
            sobrenomeAdmin = ?, 
            cpfAdmin  = ?,
            nascAdmin = ?, 
            emailAdmin = ?, 
            passwordAdmin = ?, 
            imagemAdmin = ?, 
            tokenAdmin = ? 
            WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $Admin->getNome());
            $stmt->bindValue(2, $Admin->getSobrenome());
            $stmt->bindValue(3, $Admin->getCPF());
            $stmt->bindValue(4, $Admin->getNasc());
            $stmt->bindValue(5, $Admin->getEmail());
            $stmt->bindValue(6, $Admin->getPassword());
            $stmt->bindValue(7, $Admin->getImagem());
            $stmt->bindValue(8, $Admin->getToken());
            $stmt->bindValue(9, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdmin WHERE emailAdmin = ? and passwordAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
?>