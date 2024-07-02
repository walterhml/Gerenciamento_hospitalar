<?php

require_once 'backend/config/Database.php';
require_once 'backend/model/modelPaciente.php';
require_once 'backend/controller/controllerPaciente.php';

$data = json_decode(file_get_contents('php://input'), true);
$id_paciente = $data['id_paciente'];

$controllerPaciente = new controllerPaciente();
$resultado = $controllerPaciente->excluirPaciente($id_paciente);

$msg = array("mensagem" => $resultado ? "Paciente excluído com sucesso!" : "Falha ao excluir paciente.");

echo json_encode($msg);
