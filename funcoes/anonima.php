<div class="titulo">Funções Anonimas</div>

<?php 
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(1,2) . "<br>";

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(2, 3, "+", $soma);

$dividir = function($a, $b){
    return $a / $b;
};

echo $dividir(1,2) . "<br>";

function executar2($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar2(50, 5, "/", $dividir);

?>

