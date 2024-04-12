<?php 

namespace B;

    class Client implements cadastroInterface{
        public $nome = 'gabs';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
        }

        public function __get($attr)
        {
            return $this->$attr;
        }
        public function remover(){
            echo 'salvar';
        }
                                
    }
    interface cadastroInterface{
        public function remover();
    }

    // $c = new \B\Client();
    // print_r($c);
    // echo $c->__get('nome');

?>