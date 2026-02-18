<?php

require_once "./EntityAbstract.php";

class BancoDados {

    private $onexao;

    public_function __construct($conexao)
    {
        $this->conexao= $conexao;
    
    }

    public function fecharConexao()
    {
        $this->conxao->close();
    }

    
}
