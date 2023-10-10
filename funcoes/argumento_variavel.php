<div class="titulo">Argumentos & variaveis</div>

<?php 
function soma($x , $y){
    return $x + $y;
}

echo soma(14, 15) . "<br>";
echo soma(6, 5, 4) . "<br>";

function somaCompleta(...$soma){
    $soma = 0;
    foreach ($numeros as $numero){
        $soma += $numero;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4,5,6,7) . "<br>";

function membros($titular, ...$dependentes){
    echo "titular: $titular <br>";
     if ($dependentes) {
        foreach($dependentes as $dep){
            echo "Dependete: $dep <br>";
        }
     }
}

echo "<br>";
membros("Ana silva", "Pedro", "Rafaela", "amanda");

echo "<br>";
membros("Roberto", "Junior", "matheus");

?>