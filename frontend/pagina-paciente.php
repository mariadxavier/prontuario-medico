<?php
    require_once "../backend/model/connectionDB.php";
    $db = new ConnectionDB();
    $id = $_GET["idPaciente"];
    $usuarioEncontrado = $db->getPacienteById($id);
    var_dump($usuarioEncontrado);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prontuário Médico</title>
    <!-- Folha de estilo: -->
    <link rel="stylesheet" href="./src/css/paciente.css" />
    <!-- Javascript: -->
    <script src="./src/js/troca-conteudo-pacienteHTML.js" defer></script>
    <script src="./src/js/abrir-item-historico-paciente.js" defer></script>
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
            <li class="links-li-link" id="novo-paciente-link">
              <a href="#">Novo Paciente</a>
            </li>
          </ul>
          <div class="container-div-user">
            <p class="user-p-name">Nome Medico</p>
            <img class="user-img-chevron" src="./src/img/chevron.svg" alt="" />
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="mainDiv">
            <aside class="aside-dados-paciente">
            <h2 class="aside-title">DADOS</h2>
            <div class="aside-conteudo">
            <nav class="aside-nav-dados-paciente">
                <ul>
                <li
                    id="aside-select-pessoal"
                    class="aside-select aba-selecionada"
                >
                    PESSOAL
                </li>
                <li id="aside-select-historico" class="aside-select">
                    HISTÓRICO
                </li>
                </ul>
            </nav>
            <div class="aside-buttons">
                <button id="button-consulta">CONSULTA</button>
                <button id="button-busca">BUSCA</button>
            </div>
            </div>
            </aside>
            <div class="div-show-dados-paciente">
                <div class="dados-pessoais-paciente container">
                    <div class="area-caracteristicas-paciente">
                    <img
                        id="pacient-profile-img"
                        src="./src/img/user.png"
                        alt="Foto do paciente"
                    />
                    <div class="caracteristicas-paciente">
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="nome-paciente"
                            >Nome:
                        </label>
                        <span class="conteudo-dados-paciente" id="nome-paciente"
                            ><?php echo $usuarioEncontrado["nome"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="idade-paciente"
                            >DN:
                        </label>
                        <span class="conteudo-dados-paciente" id="idade-paciente"
                            ><?php echo $usuarioEncontrado["nascimento"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="genero-paciente"
                            >Gênero:
                        </label>
                        <span class="conteudo-dados-paciente" id="genero-paciente"
                            ><?php echo $usuarioEncontrado["sexo"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="raca-paciente"
                            >Raça:
                        </label>
                        <span class="conteudo-dados-paciente" id="raca-paciente"
                            ><?php echo $usuarioEncontrado["raca"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="peso-paciente"
                            >Peso (kg):
                        </label>
                        <span class="conteudo-dados-paciente" id="peso-paciente"
                            ><?php echo $usuarioEncontrado["peso"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="altura-paciente"
                            >Altura (m):
                        </label>
                        <span class="conteudo-dados-paciente" id="altura-paciente"
                            ><?php echo $usuarioEncontrado["altura"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="sangue-paciente"
                            >Sangue:
                        </label>
                        <span class="conteudo-dados-paciente" id="sangue-paciente"
                            ><?php echo $usuarioEncontrado["sangue"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="mae-paciente"
                            >Mãe:
                        </label>
                        <span class="conteudo-dados-paciente" id="mae-paciente"
                            ><?php echo $usuarioEncontrado["mae"]?></span
                        >
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="pai-paciente"
                            >Pai:
                        </label>
                        <span class="conteudo-dados-paciente" id="pai-paciente"
                            ><?php echo $usuarioEncontrado["pai"]?></span
                        >
                        </div>
                    </div>
                    </div>
        
                    <div class="contatos-paciente">
                    <div class="item-contatos-paciente">
                        <label class="label-dados-paciente" for="celular-paciente"
                        >Celular:
                        </label>
                        <span class="conteudo-dados-paciente" id="celular-paciente"
                        ><?php echo $usuarioEncontrado["telefone"]?></span
                        >
                    </div>
        
                    <div class="item-contatos-paciente">
                        <label class="label-dados-paciente" for="email-paciente"
                        >E-mail:
                        </label>
                        <span class="conteudo-dados-paciente" id="email-paciente"
                        ><?php echo $usuarioEncontrado["email"]?></span
                        >
                    </div>
        
                    <div class="item-contatos-paciente">
                        <label class="label-dados-paciente" for="endereco-paciente"
                        >Endereço:
                        </label>
                        <span class="conteudo-dados-paciente" id="endereco-paciente"
                        ><?php echo $usuarioEncontrado["endereco"]?></span>
                    </div>
                    </div>
        
                    <div class="container-alergias-paciente">
                    <h4 class="title-alergias-paciente">ALERGIAS:</h4>
                    <p class="conteudo-dados-paciente">
                        <span id="alergias-paciente"><?php echo $usuarioEncontrado["alergias"]?></span>
                    </p>
                    </div>
        
                    <div class="observacoes-paciente">
                    <h4 class="title-observacoes-paciente">Observações:</h4>
                    <p class="conteudo-observacoes-paciente">
                        <span id="observacoes-paciente"
                        ></span>
                    </p>
                    </div>
                </div>

                <div class="container historico-paciente" style="display: none">
                    <div class="container-historico" >                        
                        <?php 
                            $collectionConsulta = $db->getConsultaByPacienteId($id);
                            echo $collectionConsulta;
                        
                        //     foreach($collectionConsulta as $key => $value) {                            
                        //     // foreach consulta , isso: com os dados da mesma:
                        //     echo '<div class="item-historico consulta">
                        //     <div class="area-title-consulta">
                        //         <h2 class="title-consulta">'.$key .'</h2>
                        //         <p class="data-consulta">00/00/0000</p>
                        //     </div>
                        //     <div class="conteudo-consulta">
                        //         <div class="item-minimizado">
                        //             <div class="area-label-consulta">
                        //                 <label for="id-consulta">ID:</label>
                        //                 <p name="id-consulta">7655645678832</p>                                
                        //             </div>
                                    
                        //             <div class="area-label-consulta">
                        //                 <label for="medicacao-utilizada">Medicação Utilizada:</label>
                        //                 <p name="medicacao-utilizada">Dipirona</p>                                
                        //             </div>       
                        //             <button class="button-ver-tudo">VER TUDO</button>
                        //         </div>

                        //         <div class="item-maximizado">
                        //             <div class="area-label-consulta-textarea">
                        //                 <label for="sintomas">Sintomas:</label>
                        //                 <p name="sintomas" class="textarea-consulta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolorum, quo rem incidunt porro cum blanditiis aut vitae repellendus, dolorem labore quaerat a recusandae perferendis. Consequuntur explicabo accusantium eveniet tempore.</p>                                
                        //             </div>
        
                        //             <div class="area-label-consulta-textarea">
                        //                 <label for="procedimentos">Procedimentos:</label>
                        //                 <p name="procedimentos" class="textarea-consulta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolorum, quo rem incidunt porro cum blanditiis aut vitae repellendus, dolorem labore quaerat a recusandae perferendis. Consequuntur explicabo accusantium eveniet tempore.</p>                                
                        //             </div>
        
                        //             <div class="area-label-consulta-textarea">
                        //                 <label for="sintomas">Medicação:</label>
                        //                 <p name="sintomas" class="textarea-consulta">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>                                
                        //             </div>
        
                        //             <button class="button-ver-menos">VER MENOS</button>
                        //         </div>
                        //     </div>
                        // </div>';};
                        ?>
                    </div>           
                </div>
            </div>
       </div>
    </main>
  </body>
</html>