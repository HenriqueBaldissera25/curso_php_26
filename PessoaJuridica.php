<?php

require_once "./PessoaAbstract.php";

define("QUEBRAR_LINHA", "<br>");

class PessoaJuridica extends PessoaAbstract {
    
    public function __contruct()
{
    $this->resetarPessoa();
    $this->CNPJ = "";
}    

public function validar() {
    $cpf = $this->CPF;

    $this->validarCPF($cpf);
}
}

