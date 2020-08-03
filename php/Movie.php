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

        public function __construct($titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota, $genero, $capa)
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



       
    }

    

?>