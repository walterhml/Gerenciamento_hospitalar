<?php
    require_once("backend/services/db.php");
    require_once("backend/controller/controllerFuncionarios.php");
    require_once("backend/model/modelFuncionarios.php");

    $data = json_decode(file_get_contents("php://input"),true);
    $nome =  $data["nome"];
    $sobrenome =$data["sobrenome"];
    $id_cargo =$data["id_cargo"];
    $id_status =$data["id_status"];
    $id_funcionario =$data["id_funcionario"];


    $controllerFuncionarios=  new controllerFuncionarios();
    $resultado = $controllerFuncionarios->atualizarFuncionarios($nome,$sobrenome,$id_cargo,$id_status,$id_funcionario);
    

if($resultado) {
    echo ("Funcionario atualizado com sucesso!");
} else {
    echo ("deu erro");
}
