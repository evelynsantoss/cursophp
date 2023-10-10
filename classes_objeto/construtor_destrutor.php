<div class="titulo">Construtor & Destrutor</div>



<?php 

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
    echo "Construtor invocado !! <br>";
    $this->nome = $novoNome;
    $this->idade = $idade;
    }
    function __destruct() {
        echo " classe pessoa morreu !!! <br>";
    }

    public function ApresentarPessoa() {
        echo " <br> $this->nome, $this->idade anos <br>";
    }
}

$pessoaNumero1 = new Pessoa("Rebeca", 40);
$pessoaNumero2 = new Pessoa("João", 60);
$pessoaNumero3 = new Pessoa("Roberto", 98);
$pessoaNumero4 = new Pessoa("Márcia", 55);

$pessoaNumero1 -> ApresentarPessoa();
unset($pessoaNumero1);
$pessoaNumero2 -> ApresentarPessoa();
unset($pessoaNumero2);
$pessoaNumero3 -> ApresentarPessoa();
unset($pessoaNumero3);
$pessoaNumero4 -> ApresentarPessoa();
unset($pessoaNumero4);



?>