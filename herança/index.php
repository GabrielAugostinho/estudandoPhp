<?php 
    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'alterar posição do volante';
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuidao = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'empinou';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'acelerar';
        }

        function freiar() {
            echo 'freiou';
        }
    }

    $carro = new Carro('abc2344', 'Vinho');
    $moto = new Moto('sdf4455', 'vermelha');
    echo '<pre>';
    print_r($carro);
    echo '<br>';
    print_r($moto);
    echo '<hr>';
    $carro->abrirTetoSolar();
    echo '<hr>';
    $carro->freiar();
    echo '<hr>';
    $moto->empinar();
    echo '<hr>';
    $moto->freiar();
?>