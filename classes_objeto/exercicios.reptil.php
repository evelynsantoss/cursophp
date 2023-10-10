<div class="titulo">Exercicio & Reptil</div>

<?php 

class Reptil {
    public $nome;
    public $habitat;
    public $escamas;
    public $caracteristicas;

    function __construct($novoNome, $habitat, $escamas, $caracteristicas) {
        $this->nome = $novoNome;
        $this->habitat = $habitat;
        $this->escamas = $escamas;
        $this->caracteristicas = $caracteristicas;
        }
        public function ApresentarReptil() {
            echo " <br> $this->nome, morar geralmente nas $this->habitat, as escamas dela é $this->escamas, as caracteristicas são $this->caracteristicas <br>";
        }
     }

$reptilNumero1 = new Reptil("Tartaruga", "Águas Costeiras, Ilhas ou Baías", "Carapaças", "Quatro pares de placas laterais de queratina de coloração verde ou verde-acinzentadas; marrom com manchas negras e amareladas quando juvenis.");
$reptilNumero2 = new Reptil("Lagarto", "Terra Firme", "Seca", "A maioria dos lagartos possui quatro pernas fortes, mas alguns não têm pernas.");
$reptilNumero3 = new Reptil("Jacaré", "Rios, lagoas e pântanos", "Córneas", "Os jacarés são répteis pertencentes à Família Alligatoridae. Dentre suas características, podemos citar: Apresentam uma pele seca, sem a presença de glândulas, recoberta por escamas córneas.");
$reptilNumero4 = new Reptil("Serpente", "Arbustos e Árvores", "Escama", "As características destes animais é a ausência de patas, pálpebras e ouvido externo, a presença de língua bífida ou bifurcada, e a pele recoberta por escamas.");

$reptilNumero1 -> ApresentarReptil();
$reptilNumero2 -> ApresentarReptil();
$reptilNumero3 -> ApresentarReptil();
$reptilNumero4 -> ApresentarReptil();
?>