<?php 
    //namespace é uma area que pode ser reaproveitada
    // namespace serve para evitar conflitos
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

    $c = new \A\Client();
    print_r($c);
    echo $c->__get('nome');

    

?>