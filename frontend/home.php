<?php
  require_once "../backend/model/connectionDB.php"; 
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Como será feito o link das páginas css? Usará Import? -->
    <link rel="stylesheet" href="./src/css/home.css" />
    <title>Início</title>
  </head>
  <body>

    <header>
      <div class="header-container">
        <div class="header-div-logo">
          <img src="./src/img/logo.svg" alt="" />
          <p class="logo-p-name">UniSOS</p>
        </div>
        <div class="header-div-container">
          <ul class="container-ul-links">
            <li class="links-li-link" id="novo-paciente-link"><a href="#">Novo Paciente</a></li>
          </ul>
          <div class="container-div-user">
            <p class="user-p-name">Nome Medico</p>
            <img class="user-img-chevron" src="./src/img/chevron.svg" alt="" />
          </div>
        </div>
      </div>
    </header>

    <!-- Titulo -->
    <section class="section-apresentation">
      <div class="apresentation-text">
        <h1>Seu sistema de saúde<br>unificado</h1>
      </div>
      <div class="apresentation-search">
        <!-- <img src="./src/img/bg-index.png" alt=""> -->
        <form action="" method="get" class="apresentation-form">
          <input type="text" name="search-user" id="search-user" placeholder="Nome ou CPF">
          <input type="submit" value="Buscar" id="search-button">
        </form>

        <?php 
          if(isset($_GET["search-user"])) {
            $usuarioBuscado = $_GET["search-user"];
            $usuarioId = null;
            $db = new ConnectionDB();
            $usuarioEncontrado = $db->getPacienteByCpf($usuarioBuscado);
            var_dump($usuarioEncontrado);

            if (!$usuarioEncontrado) {
              $usuarioEncontrado = $db->getPacienteByNome($usuarioBuscado);
              var_dump($usuarioEncontrado);
            }

            // foreach($usuarioEncontrado as $usuario){
            //   echo "achou";
            // }  
            // header("location:pagina-paciente.php?idPaciente=01ad8604-f10f-4df8-b3e9-bf66385a3309");
          }
        ?>
      </div>
    </section>
    <!-- "http://localhost/prontuario-medico/frontend/home.php?search-user=123456789-12&teste=123">-->

  </body>
</html>
