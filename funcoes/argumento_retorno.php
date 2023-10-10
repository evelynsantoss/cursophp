<div class="titulo">Argumentos & Retornos</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(A)!'; // retornando a String
}

$mensagem = obterMensagem(); // guardando a string na variavel

echo $mensagem;

// função com parametro
function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}";
} 

echo '<br>' . obterMensagemComNome("João"); //chamou a função com argumento
echo '<br>' . obterMensagemComNome("Marcos");

function somaComParametros (){
    return $x + $y;
}

echo '<br>' . "A soma: " . soma(); // funcao sem parametro
echo '<br>' . "A soma com argumentos: " . somaComParametros(100, 25); // funcao com parametro


?>