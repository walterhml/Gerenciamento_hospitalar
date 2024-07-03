<?php

class controllerCargos
{
    public function listarCargos()
    {
        try {
            $modelCargos = new modelCargos();
            return $modelCargos->listarCargos();
        } catch (PDOException $e) {
            return false;
        }
    }
    public function cadastrarCargos($descricao_cargo)
    {
        try {
            $modelCargos = new modelCargos();
            return $modelCargos->cadastrarCargos($descricao_cargo);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarCargos($nova_descricao, $id_cargo)
    {
        try {
            $modelCargos = new modelCargos();
            return $modelCargos->atualizarCargos($nova_descricao, $id_cargo);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function excluirCargos($id_cargo)
    {
        try {
            $modelCargos = new modelCargos();
            return $modelCargos->excluirCargo($id_cargo);
        } catch (PDOException $e) {
            return false;
        }
    }
}
