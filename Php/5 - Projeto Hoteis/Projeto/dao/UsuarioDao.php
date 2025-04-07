<?php
    require_once '../../dao/Conexao.php';
    
    class UsuarioDao{
        public static function insert($usuario){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbUser (nomeUser, cpfUser, emailUser, enderecoUser, nascUser, contatoUser, senhaUser, tokenUser) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getCpf());
            $stmt->bindValue(3, $usuario->getEmail());
            $stmt->bindValue(4, $usuario->getEndereco());
            $stmt->bindValue(5, $usuario->getNasc());
            $stmt->bindValue(6, $usuario->getContato());
            $stmt->bindValue(7, $usuario->getSenha());
            $stmt->bindValue(8, $usuario->getToken());
            $stmt->execute();
        }

    public static function selectAll(){
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbUser";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
        }

    public static function delete($id){
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbUser WHERE idUser = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        return  $stmt->execute();
        }
    }
?>