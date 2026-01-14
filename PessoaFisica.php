<?php

require_once "./PessoaAbstract.php";

define("QUEBRAR_LINHA", "<br>");

class PessoaFisica extends PessoaAbstract {

}

public function __contruct()
{
    $this->resetarPessoa();
    $this->CPF = "";
}    

public function validarCPF($cpf) {
    $cpf = $this->CPF;

    $this->validarCPF($cpf);
}
