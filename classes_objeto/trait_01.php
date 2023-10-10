<div class="titulo>">traits #01</div>

<?php 
/*Trait é um mecanismo que permite a reutilização do codigo em classes. Ou seja, em vez de usar a herança 
para compartilhar funcionalidades entre classes voce pode usar traits para adicionar metodos e propriedades a varias 
classes independentes*/

/* Isset() é usada para verificar se uma variável foi definida e se seu valor não é nulo (null). 
Ela retorna true se a variável estiver definida e tiver um valor diferente de null, e false caso contrário.*/

/*trim() remover espaços em branco (ou outros caracteres especificados) do início e do final de uma string
exemplo _felipe__
*/

trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validarMelhorAString {
    public $a = "Valor A";
    public $b = "Valor B";
    public $c = "Valor Privado";
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}


class UsuarioNovo {
    use validacao, validarMelhorAString;

    public function imprimirValorC(){
        echo "<br>" . $this->c; 
    }
}

$usuario01 = new UsuarioNovo();
var_dump($usuario01->validarString(" ")); //errado devido a contagem do espaço 
echo "<br>";
var_dump($usuario01->validarStringMelhor("     "));
echo "<br>";

echo $usuario01->a . "<br>", $usuario01->b;
echo $usuario01->imprimirValorC();
?>