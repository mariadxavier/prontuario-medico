<?php
  require_once "model/connectionDB.php";
  require_once "model/Paciente.php";
  require_once "model/Consulta.php";
  require_once "model/Medico.php";
  $db = new ConnectionDB();

  // $novaConsulta = $db->setNewConsulta(new Consulta ("29422b9c-5d4b-4573-b6bc-6aa795374b63", "c4ca97b0-b7f1-473a-b7ad-55a83f077077", array("Dipirona 20mg"=> "a cada 8 horas", "Amoxilina 8mg" => "A cada 12 horas", "Paracetamol" => "Sempre que sentir desconforto"), array(), "TEA, TDAH", "Dengue Hemorrágica", "Nenhum"));

  // $pacienteObj = new Paciente("Tulio Juliano", "123456789-12", "31-91234-5678", "32111-158", "Rua : das cobras n18","M", "09/09/2001", "não consta", "não consta", "parda", "tuliojuliano12@gmail.com", "O+", "1.95", "90", []);

  // $consultaObj = new Consulta("idMedico", "idPaciente", [], [], "tosse com sangue", "Ebola");

  $medicoObj = new Medico("12456789-51321-456123", "Jose de Deus", "31 99999-9999", "josezin@gmail.com", "123456789-12", "Rua Alameda das correntes N79");
  // $consultaID = $db->setNewMedico($medicoObj);
  // $consultaID = $db->setNewPaciente($pacienteObj);
  // $consultaID = $db->setNewPrescricao("241dcecb-1643-48b2-9387-9d608451ef8f", "4dd98ebb-ae6b-4b3e-a04d-d70710623d06", "137274d0-fe9c-480a-be78-9cfaf294ee12")
  // $consultaID = $db->setNewConsulta("241dcecb-1643-48b2-9387-9d608451ef8f","71865e18-c168-4f55-bd54-1187357e114f");
  // $consultaID = $db->setNewMedico("777-777-777", "João Pedro")

// $consultaTulio3 = new Consulta("12456789-51321-456123", "c31f9b30-9fa8-427c-aa34-cdb13169127b", array("remedios"=>"Dipirona"), array("sintomas"=>"febre, dor de cabeça", "antecedentes"=>"nenhum","contraIndicacoes"=>"nenhum"), "Dengue", "Nenhum", "Exame de sangue após 8h de jejum");
// $novaConsulta3 = $db->setNewConsulta($consultaTulio3);

// $consultaMaria = new Consulta("12456789-51321-456123", "c31f9b30-9fa8-427c-aa34-cdb13169127b", array("remedios"=>"Paracetamol", "tempo" => "A cada 8 horas"), array("sintomas"=>"Dor no ombro, membro ligeiramente fora do lugar, membro sem movimentação", "antecedentes"=>"Fratura no rádio","contraIndicacoes"=>"nenhum"), "Ombro deslocado", "Uma semana de repouso, com fisioterapia", "Recolocação do membro com Ortopedista");
// $novaConsulta4 = $db->setNewConsulta($consultaMaria);

$teste = $db->setNewMedico($medicoObj);
// var_dump($teste);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    // print_r($consultaID)
    // echo $pacienteObj->getNome();
    // foreach($consultaID as $item){
    //   foreach($item as $i){
    //     echo $i."<br/>";
    //   }
    // }
  ?>
</body>
</html>