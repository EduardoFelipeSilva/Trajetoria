<?php

    class User{
        public $idUser, $nomeUser,$cpfUser, $emailUser, $enderecoUser, $nascUser, $contatoUser, $senhaUser,  $tokenUser ;

        public function getId(){
            return $this->idUser;
        }
        public function setId($id){
            $this->idUser = $id;
        }

        public function getNome(){
          return $this->nomeUser;
        }
        public function setNome($nome){
            $this->nomeUser = $nome;
        }

        public function getCpf(){
          return $this->cpfUser;
        }
        public function setCpf($cpf){
            $this->cpfUser= $cpf;
        }
        public function getEmail(){
            return $this->emailUser;
        }
        public function setEmail($email){
            $this->emailUser = $email;
        }

        public function getEndereco(){
            return $this->enderecoUser;
        }
        public function setEndereco($endereco){
            $this->enderecoUser = $endereco;
        }

        public function getNasc(){
            return $this->nascUser;
        }
        public function setNasc($nasc){
            $this->nascUser = $nasc;
        }
        public function getcontato(){
            return $this->contatoUser;
        }
        public function setContato($contato){
            $this->contatoUser = $contato;
        }

        public function getSenha(){
          return $this->senhaUser;
        }
        public function setSenha($senha){
            $this->senhaUser = $senha;
        }

        public function getToken(){
            return $this->tokenUser;
        }
        public function setToken($Token){
            $this->tokenUser= $Token;
        }
        
        public function generateToken() {
          return bin2hex(random_bytes(16));
        }




    }
?>