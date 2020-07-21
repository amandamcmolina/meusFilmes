<?php

    class Movie
    {
            public $id;
            public $titulo;
            public $descricao;
            public $atores;
            public $diretor;
            public $ano;
            public $comentario;
            public $nota;

        public function __construct($id, $titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota)
        {
            $this->id;
            $this->setTitulo($titulo);
            $this->setDescricao($descricao);
            $this->setAtores($atores);
            $this->setDiretor($diretor);
            $this->setAno($ano);
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



       
    }

    

?>