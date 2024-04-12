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

        function trocarMarcha() {
            echo 'desengatar embreagem com a mão e engatar marcha com o pé';
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

        function trocarMarcha() {
            echo 'desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Caminhão extends Veiculo{}

    $carro = new Carro('abc2344', 'Vinho');
    $carro->trocarMarcha();
    $moto = new Moto('sdf4455', 'vermelha');
    echo '<hr>';
    $moto->trocarMarcha();
    echo '<hr>';
    $caminhão = new Caminhão('abc2223', 'preto');
    $caminhão->trocarMarcha();

    
?>