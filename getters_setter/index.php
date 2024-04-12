<?php

class Funcionario {
    public $nome = null;
    public $telefone = null ;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //overloading/ sobrecarga function __set($atributo, $valor)

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }

    //getters setters
    /*
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }
    */

    public function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filhos e seu numero é $this->telefone e seu cargo é de $this->cargo e tem o salário de $this->salario";
    }

    public function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
}

    $x = new Funcionario();
    $x->__set('nome', 'guga');
    $x->__set('numFilhos', '5');
    $x->__set('telefone', 812212121);
    $x->__set('cargo', 'contador');
    $x->__set('salario', 3400);
    echo $x->resumirCadFunc();

    echo '<hr>';
    
    $y = new Funcionario();
    $y->__set('nome','gabriel');
    $y->__set('numFilhos', '10');
    $y->__set('telefone', 8144544);
    $y->__set('cargo', 'administrador');
    $y->__set('salario', 1500);
    echo $y->resumirCadFunc();
    
    
    
?>