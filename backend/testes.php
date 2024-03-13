<?php
  require_once "model/connectionDB.php";
  require_once "model/Paciente.php";
  $db = new ConnectionDB();

  $consultaID = $db->setNewPaciente("andré");
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
    // foreach($consultaID as $item){
    //   foreach($item as $i){
    //     echo $i."<br/>";
    //   }
    // }
  ?>
</body>
</html>