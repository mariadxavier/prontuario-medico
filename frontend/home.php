<?php

  require_once "../backend/model/connectionDB.php";
  if(isset($_GET["search-user"])) {
    $usuarioBuscado = $_GET["search-user"];
    $usuarioId = null;
    $db = new ConnectionDB();
    $usuarioEncontrado = $db->getPacienteByCpf($usuarioBuscado);
    foreach($usuarioEncontrado as $usuario){
      $usuarioId =  $usuario["id"];

        // foreach($usuario as $item => $dado ){
        //   echo $item."<br/>";
        // }
      }
    // var_dump($usuarioEncontrado);

    header("location:pagina-paciente.php?idPaciente=01ad8604-f10f-4df8-b3e9-bf66385a3309");
  };
  
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
            <li class="links-li-link">
              <a href="#">Link</a>
            </li>
            <li class="links-li-link">
              <a href="#">Link</a>
            </li>
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
        <img src="./src/img/bg-index.png" alt="">
        <form action="" method="get" class="apresentation-form">
          <input type="text" name="search-user" id="search-user" placeholder="Nome ou CPF">
          <input type="submit" value="Buscar" id="search-button">
        </form>
      </div>
    </section>
    <form action="http://localhost/prontuario-medico/frontend/home.php?search-user=123456789-12&teste=123" method="post">
      <?php 
        foreach($usuarioEncontrado as $usuario){
          // $usuarioId =  $usuario["id"];
          echo '<div class="item-historico consulta" id="'.$usuario["id"].'">
          <div class="area-title-consulta">
              <h2 class="title-consulta">'.$usuario["nome"].'</h2>
              <p class="data-consulta">00/00/0000</p>
          </div>
          <div class="conteudo-consulta">
              <div class="item-minimizado">
                  <div class="area-label-consulta">
                      <label for="id-consulta">ID:</label>
                      <p name="id-consulta">"'.$usuario["id"].'"</p>                                
                  </div>
                  
                  <div class="area-label-consulta">
                      <label for="medicacao-utilizada">Medicação Utilizada:</label>
                      <p name="medicacao-utilizada">Dipirona</p>                                
                  </div>       
                  <button class="button-ver-tudo">VER TUDO</button>
              </div>';
            
          }
      ?>
    </form>

  </body>
</html>
