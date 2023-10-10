<div class="titulo">Petshop</div>

<?php

class Animal {
    protected $nome;
    protected $tipo;

    public function __construct($nome, $tipo) {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function calcularPrecoBanhoTosa($imposto, $gastosProdutos) {
        return ($imposto + $gastosProdutos);
    }
}

interface RegrasNegocio {
    public function calcularImposto();
    public function calcularGastosProdutos();
}

class Pessoa {
    protected $nome;
    protected $cargo;

    public function __construct($nome, $cargo) {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }
}

class Cliente extends Pessoa {
    protected $animal;

    public function __construct($nome, $animal) {
        parent::__construct($nome, 'Cliente');
        $this->animal = $animal;
    }

    public function getAnimal() {
        return $this->animal;
    }
}
class Gerente extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Gerente');
    }

    public function calcularImposto() {
        return 1000;
    }

    public function calcularGastosProdutos() {
        return 500;
    }
}

class Banhista extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Banhista');
    }

    public function calcularImposto() {
        return 200;
    }

    public function calcularGastosProdutos() {
        return 100;
    }
}
class Tosador extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Tosador');
    }

    public function calcularImposto() {
        return 250;
    }

    public function calcularGastosProdutos() {
        return 150;
    }
}
class Caixa extends Pessoa implements RegrasNegocio {
    public function __construct($nome) {
        parent::__construct($nome, 'Caixa');
    }

    public function calcularImposto() {
        return 300;
    }

    public function calcularGastosProdutos() {
        return 200;
    }
}

$animal1 = new Animal('Braddock', 'Cachorro');
$cliente1 = new Cliente('Vania', $animal1);
$gerente1 = new Gerente('Camila');
$banhista1 = new Banhista('Bernado');
$tosador1 = new Tosador('Gabriel');
$caixa1 = new Caixa('Guilherme');

$animal2 = new Animal('Luna', 'Gato');
$cliente2 = new Cliente('Vanessa', $animal2);
$gerente2 = new Gerente('Camila');
$banhista2 = new Banhista('Bernado');
$tosador2 = new Tosador('Gabriel');
$caixa2 = new Caixa('Guilherme');

$imposto = $gerente1->calcularImposto() + $banhista1->calcularImposto() + $tosador1->calcularImposto() + $caixa1->calcularImposto();
$gastosProdutos = $gerente1->calcularGastosProdutos() + $banhista1->calcularGastosProdutos() + $tosador1->calcularGastosProdutos() + $caixa1->calcularGastosProdutos();

$precoBanhoTosa = $animal1->calcularPrecoBanhoTosa($imposto, $gastosProdutos);

echo "Cliente: {$cliente1->getNome()}\n" . "<br>";
echo "Animal: {$cliente1->getAnimal()->getNome()} ({$cliente1->getAnimal()->getTipo()})\n" . "<br>";
echo "Preço do banho e tosa: $precoBanhoTosa\n";

$imposto1 = $gerente2->calcularImposto() + $banhista2->calcularImposto() + $tosador2->calcularImposto() + $caixa2->calcularImposto();
$gastosProdutos2 = $gerente2->calcularGastosProdutos() + $banhista2->calcularGastosProdutos() + $tosador2->calcularGastosProdutos() + $caixa2->calcularGastosProdutos();

$precoBanhoTosa2 = $animal2->calcularPrecoBanhoTosa($imposto, $gastosProdutos);

echo "<br> Cliente: {$cliente2->getNome()}\n" . "<br>";
echo "Animal: {$cliente2->getAnimal()->getNome()} ({$cliente2->getAnimal()->getTipo()})\n" . "<br>";
echo "Preço do banho e tosa: $precoBanhoTosa2\n";

?>
