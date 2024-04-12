<?php 
class Funcionario {
    public $nome = 'gabriel';
    public $telefone = '81-9-9585452' ;
    public $numFilhos = 3;

    public function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filhos e seu numero é $this->telefone";
    }

    public function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
}

    $funcionario = new Funcionario();
    echo $funcionario->resumirCadFunc();
    echo '<br>';
    $funcionario->modificarNumFilhos(5);
    echo $funcionario->resumirCadFunc();
    echo '<hr>';

    $g = new Funcionario();
    echo $g->resumirCadFunc();
    echo '<br>';
    $g->modificarNumFilhos(10);
    echo $g->resumirCadFunc();
?>