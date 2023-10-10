<div class="titulo">Métodos Mágicos</div>

<?php 

class PessoaN {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "É morreu !!";
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function __get($atrib){
        echo " Lendo atributo não declarado: {$atrib} <br>";
    }
    public function __set($atrib, $valor){
        echo " Alterando atributo não declarando: {$atrib} / {$valor} <br>";
    }
    public function __call($metodo, $params){
        echo "Tentando executar o metodo: '{$metodo}'";
        echo " , com os parametros: ";
        print_r($params);// print_r serve para imprimir de forma legível para o humano
    }
}

$pessoa = new PessoaN("Ricardo", 40);
echo $pessoa; // chamando o toString
$pessoa->NomeCompletoDaPessoa = "Ricardo da Silva"; // __set
$pessoa->NomeCompletoDaPessoa; // __get
$pessoa->exec(1 , "teste", true, [1,2,3,4,5,6]); // __call
$pessoa = null // __destruct

?>