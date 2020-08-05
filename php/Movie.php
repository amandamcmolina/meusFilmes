<?php
    

    class Movie
    {
            public $titulo;
            public $descricao;
            public $atores;
            public $diretor;
            public $ano;
            public $comentario;
            public $nota;
            public $genero;
            public $capa;
            public $capa_name;
            public $capa_tmp_name;
            public $url;
            public $extensaoImg;
            public $id;
            

        public function __construct($titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota, $genero, $capa, $id)
        {
            $this->setTitulo($titulo);
            $this->setDescricao($descricao);
            $this->setAtores($atores);
            $this->setDiretor($diretor);
            $this->setAno($ano);
            $this->setComentario($comentario);
            $this->setNota($nota);   
            $this->setGenero($genero);
            $this->setCapa($capa);
            $this->capa_name = $capa['name'];
            $this->capa_tmp_name = $capa['tmp_name'];
            $this->extensaoImg = $capa['arquivo'];
            $this->setId($id);

        }    
            

        public function setId($id)
        {
            
            $this->id = $id;
        }

        public function setTitulo($titulo)
        {
            // if(mb_strlen($titulo) > 35){
            //     throw new Exception("Seu título não pode ter mais de 35 caracteres!");
            // }
            $this->titulo = $titulo;
        }

        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

        public function setAtores($atores)
        {
            $this->atores = $atores;
        }

        public function setDiretor($diretor)
        {
            $this->diretor = $diretor;
        }

        public function setAno($ano) 
        {
            // if($this->anoEstreia < 1800 || $this->anoEstreia > 2030){
            //     throw new Exception("Ano deve ter 4 caracteres.", 100);
            // }
            $this->ano = $ano;
        }

        public function setComentario($comentario)
        {
        $this->comentario = $comentario;
        }

        public function setNota($nota)
        {
            // if($this->nota > 10 || $this->nota <0){
            //     throw new Exception("A nota deve estar entre 0 e 10.", 200);
            // }
            $this->nota = $nota;
        }

        public function setGenero($genero)
        {
            $this->genero = $genero;
        }

        public function setCapa($capa)
        {
            $this->capa = $capa;
        }

        public function setUrlCapa($url){
            $this->url = $url;
        }

        public function registerCoverMovie(){
            $date = new DateTime();
            $timestamp = $date->getTimestamp();
            $capaSalva = $this->capa_tmp_name;
            $ext = pathinfo($this->capa_name, PATHINFO_EXTENSION);
            $capaNome = $this->capa_name . $timestamp . '.' . $ext;
            $dir = '../capas/';
            move_uploaded_file($capaSalva, $dir . $capaNome);
            $this->setUrlCapa($dir . $capaNome);
        }

        public function registerMovie($db){
            
            $query = $db->prepare("INSERT INTO movies (titulo, descricao, diretor, anoEstreia, comentario, nota, url_capa) VALUES (:t, :de, :di, :a, :c, :n, :u)");

            $query->bindValue(":t", $this->titulo);
            $query->bindValue(":de", $this->descricao);
            $query->bindValue(":di", $this->diretor);
            $query->bindValue(":a", $this->ano);
            $query->bindValue(":c", $this->comentario);
            $query->bindValue(":n", $this->nota);
            $query->bindValue(":u", $this->url);
            $query->execute();
        }

        public function checkRegister($db){
            $idTitulo = $db->prepare("SELECT id FROM movies WHERE titulo = :ti");
            $idTitulo->bindValue(":ti", $this->titulo);
            $idTitulo->execute();
            // if($idTitulo->rowCount() > 0){
            //     return false;
            // }else{
            //     $this->registerMovie($db);
            // }
            return $idTitulo->rowCount() > 0;
        }     
    }

    

?>