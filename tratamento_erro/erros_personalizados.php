<div class="titulo">Erros Personalizados</div>

<?php 
class FaixaEtariaException extends Exception{
    public function __construct($message, $code = 0, $previous = null){
        echo "Erro Personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentador($idade){
    if($idade < 18){
        throw new FaixaEtariaException("Ainda está muito longe para se aposentar <br>");
    }
    if($idade > 70){
        throw new FaixaEtariaException("Já deveria estar aposentado");
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade){
     try {
       $tempoRestante = calcularTempoAposentador($idade);
       echo "Idade: $idade. $tempoRestante anos restantes. <br>";
     }catch(FaixaEtariaException $e){
         echo "Não foi Possível calcular para $idade anos. <br>";
         echo "Motivo: {$e->getMessage()}<br>";
     }
 }
 

?>