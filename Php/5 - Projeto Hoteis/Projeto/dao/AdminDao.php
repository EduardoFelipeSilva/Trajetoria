<?php
    require_once '../../dao/Conexao.php';
    
    class AdminDao{
        public static function insert($admin){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbAdmin (nomeAdmin, sobrenomeAdmin, cpfAdmin, nascAdmin, emailAdmin, senhaAdmin, imagemAdmin, tokenAdmin) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $admin->getNome());
            $stmt->bindValue(2, $admin->getSobrenome());
            $stmt->bindValue(3, $admin->getCPF());
            $stmt->bindValue(4, $admin->getNasc());
            $stmt->bindValue(5, $admin->getEmail());
            $stmt->bindValue(6, $admin->getSenha());
            $stmt->bindValue(7, $admin->getImagem());
            $stmt->bindValue(8, $admin->getToken());
            $stmt->execute();
        }

    public static function selectAll(){
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbAdmin";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
        }

    public static function delete($id){
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbAdmin WHERE idAdmin = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        return  $stmt->execute();
        }
    }
?>