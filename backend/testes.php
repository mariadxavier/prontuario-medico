<?php
  require_once "model/connectionDB.php";
  $db = new ConnectionDB();

  $consultaID = $db->getPacienteByCpf("123456789-12");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php print_r($consultaID)?>
</body>
</html>