<div class="titulo">Interface</div>

<?php 
/*interface é uma estrutura que permite definirum conjunto 
de metodos que uma classe deve implementar. As interfaces são usadas 
para criar um contarato entre classes */
interface Veiculo {
      public function ligar();
      public function desligar();
      public function acelerar($velocidade);
}

//implementando a interface em uma classe
class Carro implements Veiculo{
    public $velocidade;
    public function ligar() {
        echo "ligar com o botão Power e precisa de chave especial <br> ";
    }

    public function desligar() {
        echo "Para desligar aperte e segure por 3 segundo o botão power <br> ";
    }

    public function acelerar($velocidade) {
       $this->velocidade +=$velocidade;
    }

}
class Moto implements Veiculo{
    public $velocidade;
    public function ligar() {
        echo "Inserir a chave e girar no sentido horario <br>";
    }

    public function desligar() {
        echo "girar no sentido anti-horario e retirar a chave <br>";
    }

    public function acelerar($velocidade) {
       $this->velocidade +=$velocidade;
    }
}

$car = new Carro();
echo "Carro...";
$car->ligar();
$car->desligar();
$moto = new Moto();
echo "<br>Moto...";
$moto->ligar();
$moto->desligar();
?>