<?php
class controllerProcedimento
{
    public function listarProcedimentos()
    {
        try {
            $modelProcedimento = new modelProcedimento();
            return $modelProcedimento->listarProcedimentos();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarProcedimentos($descricao_procedimentos)
    {
        try {
            $modelProcedimento = new modelProcedimento();
            return $modelProcedimento->cadastrarProcedimentos($descricao_procedimentos);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarProcedimentos() {

    }

    public function deletarProcedimentos() {
        
    }
}
