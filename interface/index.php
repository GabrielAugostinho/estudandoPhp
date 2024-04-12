<?php 

// interface funciona como contrato para classe, você cria o metodo na interface e cria de novo na classe

    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }

    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface AquaticoInterface{
        public function nadar();
    }

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'abrir a porta';
        }

        public function ligar() {
            echo 'ligar';
        }
        public function desligar() {
            echo 'desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'trocar o canal';
        }

        public function ligar() {
            echo 'ligar';
        }
        public function desligar() {
            echo 'desligar';
        }
    }

    $x = new Geladeira();
    $y = new TV();





    class Humano implements MamiferoInterface, TerrestreInterface{
        public function respirar() {
            echo 'respirar';
        }

        public function andar() {
            echo 'andar';
        }

        public function conversar() {
            echo 'conversar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'respirar';
        }

        public function nadar() {
            echo 'nadar';
        }
    }

    $z = new Humano();
    $z->conversar();

?>