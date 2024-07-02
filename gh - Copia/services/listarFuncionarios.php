<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerFuncionarios.php");
require_once("backend/model/modelFuncionarios.php");

$controllerFuncionarios = new controllerFuncionarios();
$resultado = $controllerFuncionarios->listarFuncionarios();

if ($resultado) {
    $result = array("Funcionarios", $resultado);
    echo json_encode($result);
} else {
    echo ("deu erro");
}