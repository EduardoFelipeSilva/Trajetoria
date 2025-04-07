<?php

    class Hotel{
        public $idHotel,$nomeHotel, $estadoHotel, $cidadeHotel, $precoHotel, $qntdQuartoHotel, $descQuartoHotel, $statusHotel, $fotoHotel,$tokenHotel ;

        public function getId(){
            return $this->idHotel;
        }
        public function setId($id){
            $this->idHotel = $id;
        }

        public function getNome(){
          return $this->nomeHotel;
        }
        public function setNome($nome){
            $this->nomeHotel = $nome;
        }
        public function getCidadeHotel(){
            return $this->cidadeHotel;
          }
          public function setCidadeHotel($cidade){
              $this->cidadeHotel = $cidade;
          }

        public function getEstadoHotel(){
            return $this->estadoHotel;
        }
        public function setEstadoHotel($estado){
            $this->estadoHotel = $estado;
          }
        public function getPreco(){
          return $this->precoHotel;
        }
        public function setPreco($preco){
            $this->precoHotel= $preco;
        }
        public function getQntdQuartoHotel(){
            return $this->qntdQuartoHotel;
        }
        public function setQntdQuartoHotel($qntdQuarto){
            $this->qntdQuartoHotel = $qntdQuarto;
        }

        public function getdescQuartoHotel(){
          return $this->descQuartoHotel;
        }
        public function setdescQuartoHotel($descricao){
            $this->descQuartoHotel = $descricao;
        }
        public function getStatusHotel(){
            return $this->statusHotel;
          }
          public function setStatusHotel($status){
              $this->statusHotel = $status;
          }

          public function getImagem(){
            return $this->fotoHotel;
        }
    public function setImagem($imagem){
        $this->fotoHotel = $imagem;
    }
    

          public function getToken(){
            return $this->tokenHotel;
        }
        public function setToken($Token){
            $this->tokenHotel = $Token;
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
                $diretorio = "../../img/";
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