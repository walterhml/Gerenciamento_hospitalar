<?php
class modelProcedimento
{
    public function listarProcedimentos()
    {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->query("SELECT * FROM tbl_tipos_procedimento");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            return true;
        }
    }

    public function cadastrarProcedimentos($descricao_procedimento)
    {
        try {
            $pdo = Database::conexao();
            $stmt = $pdo->prepare("INSERT INTO tbl_tipos_procedimento (descricao_procedimento) VALUES (:descricao_procedimento)");
            $stmt->bindParam("descricao_procedimento", $descricao_procedimento);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarProcedimentos($descricao_procedimento) {
        try {
            $pdo = Database::conexao();
            $prepare = $pdo->prepare("UPDATE tbl_tipos_procedimento SET descricao_procedimento = :descricao_procedimento WHERE id_tipos_procedimento = :id_tipos_procedimento");
            $prepare->bindParam(":descricao_procedimento", $descricao_procedimento);
            $prepare->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deletarProcedimentos() {
        try {
            $pdo = Database::conexao();



            
        } catch (PDOException $e) {
            
        }
    }
}
