<?php 
    class Produto{

        public $titulo;
        public $descricao;
        public $img;
        public $usuario;
        public $ehInteressado;


        function __construct( $usuario, $titulo, $descricao, $img, $ehInteressado)
        {
            $this->$titulo              ( $titulo );
            $this->$descricao           ( $descricao );
            $this->$img                 ( $img);
            $this->$usuario             ( $usuario );
            $this->$ehInteressado       ($ehInteressado);
        }

    }
?>