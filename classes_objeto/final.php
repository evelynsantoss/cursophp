<div class="titulo">Modificador Final</div>

<?php

//metodo = funcao ------- propriedades de uma classe = variavel
/* O modificador final é usado para restringir a herança de uma classe
ou a capacidade de sobrescrever um metodo isso é usado para indicar que uma
classe ou método não deve ser modificado ou estendido no futuro */
abstract class Abstrata{
    abstract public function metodo01();
    public final function metodo02(){
        echo "não vou mudar ! <br>";
    }

}

class Classe extends Abstrata{
    public function metodo01(){
        echo "Executando metodo 01 ! <br>";
    }

//     public function metodo02(){
//        echo "Extendendo metodo 02 ! <br>";
//    }

}

$classe01 = new Classe();
$classe01->metodo01();
$classe01->metodo02();



final class Unica {
    public $attr = "Valor unico, não irei mudar !!";
}

$unica = new Unica();
echo $unica->attr;

// class Duplicata extends Unica{
//     public $att = 5;
// }
?>