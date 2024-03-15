<?php
  require_once "model/connectionDB.php";
  require_once "model/Paciente.php";
  require_once "model/Consulta.php";
  require_once "model/Medico.php";
  $db = new ConnectionDB();

  // $pacienteObj = new Paciente("Tulio Juliano", "123456789-12", "31-91234-5678", "32111-158", "Rua : das cobras n18","M", "09/09/2001", "não consta", "não consta", "parda", "tuliojuliano12@gmail.com", "O+", "1.95", "90", []);

  // $consultaObj = new Consulta("idMedico", "idPaciente", [], [], "tosse com sangue", "Ebola");

  $medicoObj = new Medico("12456789-51321-456123", "Jose de Deus", "31 99999-9999", "josezin@gmail.com", "123456789-12", "Rua Alameda das correntes N79");
  $consultaID = $db->setNewMedico($medicoObj);
  // $consultaID = $db->setNewPaciente($pacienteObj);
  // $consultaID = $db->setNewPrescricao("241dcecb-1643-48b2-9387-9d608451ef8f", "4dd98ebb-ae6b-4b3e-a04d-d70710623d06", "137274d0-fe9c-480a-be78-9cfaf294ee12")
  // $consultaID = $db->setNewConsulta("241dcecb-1643-48b2-9387-9d608451ef8f","71865e18-c168-4f55-bd54-1187357e114f");
  // $consultaID = $db->setNewMedico("777-777-777", "João Pedro")
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
    print_r($consultaID)
    // echo $pacienteObj->getNome();
    // foreach($consultaID as $item){
    //   foreach($item as $i){
    //     echo $i."<br/>";
    //   }
    // }
  ?>
</body>
</html>