<?php

require_once 'backend/config/Database.php';

require_once 'backend/model/modelPaciente.php';
require_once 'backend/controller/controllerPaciente.php';

$controllerPaciente = new controllerPaciente();
$resultado = $controllerPaciente->listarPacientes();

$msg = array("Pacientes" => $resultado);

echo json_encode($msg);
