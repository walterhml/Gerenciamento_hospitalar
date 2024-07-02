<?php


require_once 'backend/model/modelPaciente.php';


class controllerPaciente {

    public function listarPacientes() {
        try {
            $modelPaciente = new modelPaciente();
            return $modelPaciente->listarPacientes();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarPaciente($id_prontuario, $nome, $sobrenome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $id_status) {
        try {
            $modelPaciente = new modelPaciente();
            return $modelPaciente->cadastrarPaciente($id_prontuario, $nome, $sobrenome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $id_status);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarPaciente($id_paciente, $id_prontuario, $nome, $sobrenome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $id_status) {
        try {
            $modelPaciente = new modelPaciente();
            return $modelPaciente->atualizarPaciente($id_paciente, $id_prontuario, $nome, $sobrenome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $id_status);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function excluirPaciente($id_paciente) {
        try {
            $modelPaciente = new modelPaciente();
            return $modelPaciente->excluirPaciente($id_paciente);
        } catch (PDOException $e) {
            return false;
        }
    }
}
