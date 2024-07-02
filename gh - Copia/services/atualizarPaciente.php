<?php

require_once 'backend/config/Database.php';
require_once 'backend/model/modelPaciente.php';
require_once 'backend/controller/controllerPaciente.php';

$data = json_decode(file_get_contents('php://input'), true);
$id_paciente = $data['id_paciente'];
$id_prontuario = $data['id_prontuario'];
$nome = $data['nome'];
$sobrenome = $data['sobrenome'];
$email = $data['email'];
$cep = $data['cep'];
$logradouro = $data['logradouro'];
$numero = $data['numero'];
$bairro = $data['bairro'];
$cidade = $data['cidade'];
$uf = $data['uf'];
$id_status = $data['id_status'];

$controllerPaciente = new controllerPaciente();
$resultado = $controllerPaciente->atualizarPaciente($id_paciente, $id_prontuario, $nome, $sobrenome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $id_status);

$msg = array("mensagem" => $resultado ? "Paciente atualizado com sucesso!" : "Falha ao atualizar paciente.");

echo json_encode($msg);
