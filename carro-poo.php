<?php
// POO || OOP
// Programação Orientada a Objeto

/**
 * Caracteristicas Propriedades || Atributos
 * */


define("QUEBRA_LINHA", "<br>");


class Carro {
    private $ligado = false;
    private $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $combustivel;

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function ligar($chave) {
        if (!$chave) {
        echo "O carro já está ligado."; 
        return;
    }


    if (!$this->combustivel) {
        echo "Impossivel ligar o carro sem combustivel, GAS: $this->combustivel.";
        return;
    }

    $this->ligado = true;
    echo "Carro esta ligado";

}

$objCarro = new Carro();
$objCarro->setMarca("Hyudai");
$objCarro->modelo = "I30";
$objCarro->ano = "2015";
$objCarro->cor = "branco";
$objCarro->combustivel = "5L";



$chave = "presencial";
$objCarro->ligar($chave);
$objCarro->ligar($chave);

class Cachorro {
    public $patas;
    public $pelagem;
    public $raça;

}

