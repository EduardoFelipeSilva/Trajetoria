<?php

    class Admin{
        public $idAdmin, $nomeAdmin, $sobrenomeAdmin, $cpfAdmin, $emailAdmin, $senhaAdmin, $nascAdmin, $imagemAdmin, $tokenAdmin;

            public function getId(){
                return $this->idAdmin;
            }
            public function setId($id){
                $this->idAdmin = $id;
            }

            public function getNome(){
            return $this->nomeAdmin;
            }
            public function setNome($nome){
                $this->nomeAdmin = $nome;
            }
            public function getsobrenome(){
                return $this->sobrenomeAdmin;
            }
            public function setsobrenome($sobrenome){
                $this->sobrenomeAdmin = $sobrenome;
            }
            public function getCpf(){
            return $this->cpfAdmin;
            }
            public function setCpf($cpf){
                $this->cpfAdmin= $cpf;
            }
            public function getEmail(){
                return $this->emailAdmin;
            }
            public function setEmail($email){
                $this->emailAdmin = $email;
            }

            public function getSenha(){
            return $this->senhaAdmin;
            }
            public function setSenha($senha){
                $this->senhaAdmin = $senha;
            }
            public function getNasc(){
                return $this->nascAdmin;
            }
            public function setNasc($nasc){
                $this->nascAdmin = $nasc;
            }
            public function getToken(){
                return $this->tokenAdmin;
            }
            public function setToken($Token){
                $this->tokenAdmin = $Token;
            }
            public function getImagem(){
                return $this->imagemAdmin;
            }
        public function setImagem($imagem){
            $this->imagemAdmin = $imagem;
        }
        
        public function generateToken() {
          return bin2hex(random_bytes(16));
        }
        
        public function salvarImagem($novo_nome) {
            //a foto vem com a extenção $_FILES
            if(empty($_FILES['foto']['size']) != 1){
                //pegar as extensão do arquivo
                if ($novo_nome ==""){
                    //Ciando um nome novo
                    $novo_nome = md5(time()). ".jpg";
                }
                //definindo o diretorio
                $diretorio = "../img/admin/";
                //juntando o nome com o diretorio
                $nomeCompleto = $diretorio.$novo_nome;
                //efetuando o upload
                    move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
                return $novo_nome;
                }else{
                    return $novo_nome;
             }
          }




    }
?>