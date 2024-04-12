<?php 
    class Pessoa {
        public $nome = null;

        function __construct($nome)
        {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        function correr() {
            return $this->nome . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Gabriel');
    echo '<br> Nome: ' .  $pessoa->__get('nome');
    echo '<br> ' . $pessoa->correr();
?>