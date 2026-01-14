<?php

abstract class PessoaAbstract {
    public $nome;
    public $idade;
    public $logradouro;
    public $cep;
    public $bairro;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $pontoReferencia;


    public function validarCPF($cpf) {
        echo "123.456.789-00";
    }

    public function validarCNPJ($cnpj) {
        echo "123.456.789/0001-11";
    }
}
