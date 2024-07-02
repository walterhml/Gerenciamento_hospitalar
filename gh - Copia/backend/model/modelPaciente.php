<?php

class modelPaciente {

    public function listarPacientes() {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->query("SELECT * FROM tbl_pacientes");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarPaciente($dados) {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("INSERT INTO tbl_pacientes (nome, sobrenome, email, cep, logradouro, numero, bairro, cidade, uf, id_status) 
                                  VALUES (:nome, :sobrenome, :email, :cep, :logradouro, :numero, :bairro, :cidade, :uf, :id_status)");
            $sql->execute($dados);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarPaciente($dados) {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("UPDATE tbl_pacientes 
                                  SET nome = :nome, sobrenome = :sobrenome, email = :email, cep = :cep, 
                                      logradouro = :logradouro, numero = :numero, bairro = :bairro, 
                                      cidade = :cidade, uf = :uf, id_status = :id_status 
                                  WHERE id_paciente = :id_paciente");
            $sql->execute($dados);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function excluirPaciente($id_paciente) {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("DELETE FROM tbl_pacientes WHERE id_paciente = :id_paciente");
            $sql->bindParam(":id_paciente", $id_paciente);
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
