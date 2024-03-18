<?php
  require_once "../backend/model/connectionDB.php"; 
  $usuarioId = null;
  $db = new ConnectionDB();
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Estilo: -->
    <link rel="stylesheet" href="./src/css/home.css" />
    <!-- Funções JS: -->
    <script src="./src/js/modules/selecionar-paciente-buscado.js" defer></script>
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

        <div class="pacientes-retornados">
        <?php 
          if(isset($_GET["search-user"])) {
            $usuarioBuscado = $_GET["search-user"];
            $usuarioEncontrado = $db->getPacienteByCpf($usuarioBuscado);

            foreach($usuarioEncontrado as $usuario){
              echo '<div id="'.$usuario["id"].'" class="mostrar-paciente-buscado">
              <div class="area-id-paciente">
                <h2 class="title-area-id-paciente">'.$usuario["id"].' </h2>
              </div>
    
              <div class="conteudo-paciente-buscado">
                <div class="dado-paciente-buscado">
                  <label for="nome">Nome: </label>
                  <p name="nome">'.$usuario["nome"].'</p>
                </div>
    
                <div class="dado-paciente-buscado">
                  <label for="nascimento">Data de Nascimento: </label>
                  <p name="nascimento">'.$usuario["nascimento"].'</p>
                </div>
    
                <div class="dado-paciente-buscado">
                  <label for="cpf">CPF: </label>
                  <p name="cpf">'.$usuario["cpf"].'</p>
                </div>
              </div>
            </div>';


            }  
            // header("location:pagina-paciente.php?idPaciente=".);
          }
        ?>
        </div>
      </div>
    </section>
    <!-- "http://localhost/prontuario-medico/frontend/home.php?search-user=123456789-12&teste=123">-->

  </body>
</html>
