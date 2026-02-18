<?php

//CRUD - Create, Read, Update e Delete.
interface EntityInterface {
    public function criar();
    public function obter($id);
    public function obterTodos($filtros = "");
    public function atualizar($id);
    public function deletar($id);
}

// Model || Entity.
abstract class EntityAbstract implements EntityInterface {
    public $id; 
    public $tabelaNome;
    public $criadoEm;
    public $atualizadoEm;
    public $usuarioAlteracao;

    public function __construct(BancoDados $banco)
    {
        $this->bancoDeDados = $banco;
    }
    
    public function criar() {

    }
    

    public function obter($id) {
        $sql = "SELECT * FROM $this->tabelaNome WHERE id = $id";
        $this->
    }


    public function obterTodos($filtros = "") {

    }


    public function atualizar($id) {

    }


    public function deletar($id) {
        $sql = "DELETE FROM usuario WHERE id = $id";
    }

















}







