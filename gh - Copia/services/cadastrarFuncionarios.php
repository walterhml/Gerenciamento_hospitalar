<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerFuncionarios.php");
require_once("backend/model/modelFuncionarios.php");

$data = json_decode(file_get_contents('php://input', true));

$nome = $data["nome"];
$sobrenome = $data["sobrenome"];
$id_cargo = $data["id_cargo"];
$id_status = $data["id_status"];

$controllerFuncionarios = new controllerFuncionarios();
$resultado = $controllerFuncionarios->cadastrarFuncionarios($nome, $sobrenome, $id_cargo, $id_status);

if ($resultado) echo "Deu muiito bommm";