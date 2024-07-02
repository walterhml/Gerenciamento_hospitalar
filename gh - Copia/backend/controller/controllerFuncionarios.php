<?php 

class controllerFuncionarios {
    public function listarFuncionarios() {
        try {
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->listarFuncionarios();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarFuncionarios($nome, $sobrenome, $id_cargo, $id_status) {
        try {
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->cadastrarFuncionarios($nome, $sobrenome, $id_cargo, $id_status);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarFuncionarios($nome, $sobrenome, $id_cargo, $id_status, $id_funcionario) {
        try {
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->atualizarFuncionarios($nome, $sobrenome, $id_cargo, $id_status, $id_funcionario);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deletarFuncionarios($id_funcionario) {
        try {
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->deletarFuncionarios($id_funcionario);
        } catch (PDOException $e) {
            return false;
        }
    }

}