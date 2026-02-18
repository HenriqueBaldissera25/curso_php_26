<?php

require_once "./conexao.php";

class BancoDados {

    private $onexao;

    public function __construct($conexao)
    {
        $this->conexao= $conexao;
    }

    public function fecharConexao();
    {
        $this->conexao->close();
    }

    private function fecharConexao();
    {
        $this->conexao->close();
    }

    private function executar($sql)
    {
        $dados = [];

        $isCreate = str_contains($sql, "INSERT");
        $isUpdate = str_contains($dql, "UPDATE");

        $result = $this->conexao->query($sql);

        if ($isUpdate) {
            return $this->conexao->affected_rows;
        }

        $existeDados = $reslt->num_rows > 0;

        if (!$existeDados) {
            return $dados;
        }

        while ($registro = $result->fetch_assoc()) {
            $linha = (object) $registro;
            $dados[] = $linha;
        }

        return $dados;
    }

    public function execQuery($sql, $msg = "não foi possivel obter os dados.") {

        $sql .=";";
        $$dados = $this->executar($sql);

        if (empty($dados)) {
            throw new Exception($msg);
        }

        return $dados;
    }
}

$bancoDeDados = new BancoDados($conexao);
