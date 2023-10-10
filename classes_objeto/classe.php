<div class="titulo">Primeira Classe</div>

<?php

Class Cliente {
    //atributos
    public $nome = "Anônimo";
    public $idade = 18;
    public function apresentar(){
        echo "Nome: {$this->nome} Idade: {$this->idade} <br>";
    }
}

$c1 = new Cliente(); //Criação de objeto --- Instalar uma Classe
$c1 -> nome = "evelyn";
$c1 -> idade = 17;
$c1 ->apresentar(); // acessando uma função dentro da classe

$cliente2 = new Cliente(); // criação do segundo objeto
$cliente2 -> nome = "camila";
$cliente2 -> idade = 18;
$cliente2 -> apresentar();

?>