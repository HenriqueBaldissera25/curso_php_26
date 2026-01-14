<?php

interface AnimaisInterface {
    public function emitirSom();
}

abstract class Animais implements AnimaisInterface {
    public $nome;

    public function emitirSom() {}
}

class Cachorro extends Animais {
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;

    }
    
    public function emitirSom() {
        return "O {$this->nome} diz: Au au!";
    }
}    
class Gato extends Animais {
    public $nome;  
    
    public function __construct($nome) {
        $this->nome = $nome;

    }
    
    public function emitirSom() {
        return "O {$this->nome} diz:miau miau !";
    }
}


class Papagaio extends Animais{
    
    public $nome;  
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function emitirSom() {
        return "O {$this->nome} diz: Ola loro!";
    }
}

$cachorro = new Cachorro("Caramelo");
echo $cachorro->emitirSom();

$cachorro = new gato("pita");
echo $gato->emitirSom();

$cachorro = new papagaio("rico");
echo $papagaio->emitirSom();
