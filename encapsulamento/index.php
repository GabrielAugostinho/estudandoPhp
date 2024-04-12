<?php 
    class Pai {
        private $nome = 'Gabriel';
        protected $sobrenome = 'Tavares';
        public $humor = 'Feliz';

       public function __get($atribute)
       {
            return $this->$atribute;
       }

       public function __set($atribute, $value)
       {
            $this->$atribute = $value;
       }
       private function executarMania(){
        echo 'assobiar';
       }

       protected function responder() {
        echo 'oi';
       }

       public function executarAcao() {

            $x = rand(1, 10);

            if($x >= 1 && $x <= 8) {
                $this->executarMania();
            }else {
                $this->responder();
            }
       }
    }

    class Filho extends Pai{
        public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }
    }

    $gabs = new Filho();
    echo '<pre>';
    print_r(get_class_methods($gabs));
    
    
?>