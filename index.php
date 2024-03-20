<?php 
  require_once "./backend/model/connectionDB.php";
  $db = new ConnectionDB();
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./frontend/src/css/index.css">
    <link rel="stylesheet" href="./frontend/src/css/reset.css">
    <title>Prontuário médico - login</title>
    <script type="module" src="./frontend/src/js/medico.js" defer></script>

  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="header-div-logo">
          <img src="./frontend/src/img/logo.svg" alt="Logo" />
          <p class="logo-p-name">UniSOS</p>
        </div>
      </div>
    </header>
    <main>
      <div class="mainDiv">
        <section class="mainDiv-imgArea">
          <img src="./frontend/src/img/casual-life-3d-boy-online-doctor.png" alt="logo" />
        </section>
        <section class="mainDiv-formArea">
          <h1 class="title-form">LOGIN</h1>
          <form class="mainDiv-form" action="" method="post">
            <input type="text" placeholder="CRM" id="crm" name="inputCrm">
            <input type="password" placeholder="SENHA" id="password" name="inputPassword">
            <button class="btn-submit-login" type="submit">ENTRAR</button>
          </form>
          <?php 
            if(isset($_POST["inputCrm"])){
              $crmMedico = $_POST["inputCrm"];
              $senhaMedico = $_POST["inputPassword"];
              try {
                $medicoBuscado = $db->getMedicoByCrm($crmMedico);
                if(!is_array($medicoBuscado)) {
                  throw new Exception("Falha ao logar");
                } else {
                  $idMedico = array_key_first($medicoBuscado);
                  if ($senhaMedico == $medicoBuscado[$idMedico]["senha"]){
                    $_SESSION["idMedico"] = $idMedico;
                    header('Location: frontend/home.php');                    
                  }
                }
              } catch (Exception $erro) {
                echo $erro->getMessage();
              }
            }           
            
          ?>
        </section>
      </div>
    </main>
  </body>
</html>