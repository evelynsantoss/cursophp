<div class="titulo">Membros Estáticos</div>

<?php 

// this é para acessar membros de instancia(variaveis ou metodos) de uma classe
//a partir de dentro da classe

// self é usado para acessar membros estaticos(variaveis ou metodos) 
//a partir de dentro da classe


class A {
    public $naoStatica = "Variavel de instancia";
    public static $statico = "Variavel de classe (estática)";

    public function mostrarA(){
        echo "Não estática = {$this->naoStatica} <br>";
        // Primeira tentativa de imprimir a variavel estática
        //echo "Variavel Estatica = {$this->statico} <br>";
        // Segunda tentativa de imprimir a variavel estática
        echo "Variavel Estatica = " . self::$statico . "<br>";
     }

     public static function mostarStaticA(){
        echo "Estatica = " .self::$statico . "<br>";
     }
}

$obA = new A();
$obA -> mostrarA();
A::mostarStaticA();
A::$statico = "Alterando membro de classe";
A::mostarStaticA();
?>