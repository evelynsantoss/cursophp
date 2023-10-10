<div class="titulo">Classe Abstrata</div>

<?php 
abstract class AbstrataExemplo{
    public abstract function metodo01();
    abstract protected function metodo02($parametro);
}

abstract class FilhaAbstrataExemplo extends AbstrataExemplo{
    public function metodo01(){
        echo "Executando método 01 <br>";
    }
    abstract public function metodo03();
}

class Concreta extends FilhaAbstrataExemplo{
    public function metodo01(){
        echo "Executando... metodo 1 extendido <br>";
        parent::metodo01();
    }
    public function metodo02($parametro){
       echo "Executando metodo 02, com parametro $parametro <br>";
    }

    public function metodo03(){
        echo "Executando o metodo 03";
        $this->metodo02('Interno');
    }
}

$c = new Concreta();
$c->metodo01();
$c->metodo02("Externo");
$c->metodo03();
echo "Fim...";

/* a diferença interface não tem corpo
interface Veiculo {
      public function ligar();
      public function desligar();
      public function acelerar($velocidade);
}

ja a abstrata pode ou não ter corpo porem é obrigatorio implementar

abstract class Animal {
    abstract public function fazerBarulho();

    public function mover() {
        // Implementar concreta de um método
    }
}
*/


?>