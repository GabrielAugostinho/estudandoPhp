<?php 

namespace A;

    class Client implements cadastroInterface{
        public $nome = 'gabriel';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
        }

        public function __get($attr)
        {
            return $this->$attr;
        }
        public function salvar(){
            echo 'salvar';
        }
    }

    interface cadastroInterface{
        public function salvar();
    }

?>