<?php

    class Movie
    {
            public $titulo;
            public $descricao;
            public $atores;
            public $diretor;
            public $anoEstreia;
            public $comentario;
            public $nota;

        public function __construct($titulo, $descricao, $atores, $diretor, $anoEstreia, $comentario, $nota)
        {
            $this->setTitulo($titulo);
            $this->setDescricao($descricao);
            $this->setAtores($atores);
            $this->setDiretor($diretor);
            $this->setAnoEstreia($anoEstreia);
            $this->setComentario($comentario);
            $this->setNota($nota);   
        }    
            
        public function setTitulo($titulo)
        {
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

        public function setAnoEstreia($anoEstreia) 
        {
            // if($this->anoEstreia < 1800 || $this->anoEstreia > 2030){
            //     throw new Exception("Ano deve ter 4 caracteres.", 100);
            // }
            $this->anoEstreia = $anoEstreia;
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



       
    }

    

?>