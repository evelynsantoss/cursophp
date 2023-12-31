<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;
    public $sobrenome;

    function __construct($nome, $sobrenome, $idade) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
        echo "Pessoa Criada com sucesso!!!";
    }
    function __destruct(){
        echo "Fim!";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->sobrenome}, {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa {
    public $login;
    public $senha;

    function __construct($nome, $sobrenome, $idade, $login, $senha){
        parent::__construct($nome, $sobrenome, $idade);
        $this->login = $login;
        $this->senha = $senha;
    }
    function __destruct(){
        echo "Usuário diz: Tchau !!";
        parent::__destruct();
    }

    public function apresentar(){
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}


$usuarioCafeteria1 = new Usuario("João", "Teodoro", 22, "Joaoteodoro@gmail.com", "99999");
$usuarioCafeteria1->apresentar();
?>