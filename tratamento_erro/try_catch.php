<div class="titulo">TRY/CATCH</div>

<?php 
// echo 7 / 0;
// echo intdiv(10,2);

try {
    echo intdiv(7,0);

}catch(Error $e){
    echo "Teve um erro no codigo...!!!! <br>"; // capturar a exceção do erro;
}

try {
    throw new Exception(" um erro muito estranho");// Lança uma exceção do erro com uma mensagem
    echo intdiv(7,0);
}catch(DivisionByZeroError $e){ 
    echo "Divisão por zero"; // Captura a excecução específica de divisão por zero (que não ocorreu aqui).
}catch(Throwable $e){
    echo "Erro encontrado: " . $e->getMessage() . "<br>"; // Captura qualquer outra exceção (neste caso,
    // a Exception que foi lançada acima).
}finally {
    echo "Sempre executado ! <br>"; // O código dentro do bloco 'finally' sempre será executado,
    //independentemente de ter havido exceções ou não.
}

?>