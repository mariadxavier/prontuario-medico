<?php
    require_once "../backend/model/connectionDB.php";
    $db = new ConnectionDB();
    $id = $_GET["idPaciente"];
    $usuarioEncontrado = $db->getPacienteById($id);
    $collectionConsulta = $db->getConsultaByPacienteId($id);
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
    <script type="module" src="./src/js/paciente.js" defer></script>
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
                        <span id="alergias-paciente">
                            <?php
                                if(!$usuarioEncontrado["alergias"]){
                                    echo "Sem alergias cadastradas";
                                } else {
                                    echo $usuarioEncontrado["alergias"];
                                };
                            ?>
                        </span>
                    </p>
                    </div>
        
                    <div class="observacoes-paciente">
                    <h4 class="title-observacoes-paciente">Observações:</h4>
                    <p class="conteudo-observacoes-paciente">
                        <span id="observacoes-paciente">
                            <?php
                                if($usuarioEncontrado["observacoes"] == null){
                                    echo "Sem observações cadastradas";
                                } else {
                                    echo $usuarioEncontrado["observacoes"];
                                }; 
                            ?>
                        </span>
                    </p>
                    </div>
                </div>

                <div class="container historico-paciente" style="display: none">
                    <div class="container-historico" >                        
                        <?php 
                            if($collectionConsulta) {                        
                                foreach($collectionConsulta as $consulta) {                            
                                    // para cada consulta retornada do paciente consulta, imprime essa div, com os dados da mesma:
                                    echo '<div class="item-historico consulta">
                                    <div class="area-title-consulta">
                                        <h2 class="title-consulta">'.$consulta["diagnostico"].'</h2>
                                        <p class="data-consulta">16/03/2024</p> 
                                    </div>
                                    <div class="conteudo-consulta">
                                        <div class="item-minimizado">
                                            <div class="area-label-consulta">
                                                <label for="id-consulta">Protocolo:</label>
                                                <p name="id-consulta">'.$consulta["id"].'</p>                                
                                            </div>
                                            
                                            <div class="area-label-consulta">
                                                <label for="medicacao-utilizada">Medicação Utilizada:</label>
                                                <p name="medicacao-utilizada">'.$consulta["prescricao"]["remedios"].'</p>                                
                                            </div>       
                                            <button class="button-ver-tudo">VER TUDO</button>
                                        </div>

                                        <div class="item-maximizado">
                                            <div class="area-label-consulta-textarea">
                                                <label for="sintomas">Sintomas:</label>
                                                <p name="sintomas" class="textarea-consulta">
                                                '.$consulta["anamnese"]["sintomas"].'
                                                </p>                                
                                            </div>
                
                                            <div class="area-label-consulta-textarea">
                                                <label for="procedimentos">Procedimentos:</label>
                                                <p name="procedimentos" class="textarea-consulta">'.$consulta["procedimentos"].'</p>                                
                                            </div>
                
                                            <div class="area-label-consulta-textarea">
                                                <label for="prescricao">Prescrição:</label>
                                                <p name="prescricao" class="textarea-consulta">'.$consulta["prescricao"]["remedios"].' '.$consulta["prescricao"]["tempo"].'</p>                                
                                            </div>

                                            <div class="area-label-consulta-textarea">
                                                <label for="antecedentes">Fatores de risco/Antecedentes:</label>
                                                <p name="antecedentes" class="textarea-consulta">
                                                '.$consulta["anamnese"]["antecedentes"].'
                                                </p>                                
                                            </div>

                                            <div class="area-label-consulta-textarea">
                                                <label for="contraIndicacoes">Contra-indicações:</label>
                                                <p name="contraIndicacoes" class="textarea-consulta">
                                                '.$consulta["anamnese"]["contraIndicacoes"].'
                                                </p>                                
                                            </div>
                
                                            <button class="button-ver-menos">VER MENOS</button>
                                        </div>
                                    </div>
                                    </div>';}
                            }
                        ?>
                    </div>           
                </div>

                 <!-- Sessão: Consulta -->
                <div class="consulta-paciente" style="display: none;">
                    <div data-consulta="divs" class="anamnese-div-container div-selecionada">
                        <!-- Essa nova div utilizada para separar o conteúdo do botão, deverá ser repensada no refatoramento -->
                        <div class="container">
                            <div class="anamnese-div-title">
                                <h1>Anamnese</h1>
                                <div class="title-div-informations">
                                    <div class="area-label">
                                        <label for="">Protocolo:</label>
                                        <p>Dipirona</p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Protocolo:</label>
                                        <p>Dipirona</p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Protocolo:</label>
                                        <p>Dipirona</p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Protocolo:</label>
                                        <p>Dipirona</p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Protocolo:</label>
                                        <p>Dipirona</p>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="anemnese-space-bar"></div>
                            
                            <div class="ananmese-div-queixa">
                                <h1>Queixa do Paciente</h1>
                                <form action="" method="post">

                                    <div>
                                        <label for="queixa-atual">Atual:</label>
                                        <input type="text" name="queixa-atual" id="">
                                    </div>

                                    <div>
                                        <label for="queixa-progresso">Progresso:</label>
                                        <input type="text" name="queixa-progresso" id="">
                                    </div>

                                </form>
                            </div>
                        </div>

                        <button data-consulta="button" type="submit">Próximo</button>
                    </div>

                    <div data-consulta="divs" class="antecedentes-div-container">
                        <div class="container">
                            <h1>Fatores de Risco/Antecedentes</h1>
                            <form action="" method="post">
                                <div class="form-div-selects">
                                    <div class="area-label">
                                        <label for="hipertensao-arterial">Hipertensão:</label>
                                        <input type="checkbox" value="" for="hipertensao-arterial" >
                                    </div>
                                    <div class="area-label">
                                        <label for="tabaquismo">Tabaquismo:</label>
                                        <input type="checkbox" value="" for="tabaquismo" >
                                    </div>
                                    <div class="area-label">
                                        <label for="estresse">Estresse:</label>
                                        <input type="checkbox" value="" for="estresse" >
                                    </div>
                                    <div class="area-label">
                                        <label for="sedentarismo">Sedentarismo:</label>
                                        <input type="checkbox" value="" for="sedentarismo" >
                                    </div>
                                    <div class="area-label">
                                        <label for="obesidade">Obesidade:</label>
                                        <input type="checkbox" value="" for="obesidade" >
                                    </div>
                                    <div class="area-label">
                                        <label for="avc">AVC:</label>
                                        <input type="checkbox" value="" for="avc" >
                                    </div>
                                    <div class="area-label">
                                        <label for="hereditariedade">Hereditariedade:</label>
                                        <input type="checkbox" value="" for="hereditariedade" >
                                    </div>
                                    <div class="area-label">
                                        <label for="menopausa">Menopausa:</label>
                                        <input type="checkbox" value="" for="menopausa" >
                                    </div>
                                    <div class="area-label">
                                        <label for="diabetes">Diabetes:</label>
                                        <input type="checkbox" value="" for="diabetes" >
                                    </div>
                                    <div class="area-label">
                                        <label for="hipercolesterolemia">Hipercolesterolemia:</label>
                                        <input type="checkbox" value="" for="hipercolesterolemia" >
                                    </div>

                                </div>
                                <div class="form-div-questions">
                                    <div>
                                        <label for="questions-outros">Outros:</label>
                                        <input type="text" name="questions-outros" id="">
                                    </div>
                                    <div>
                                        <label for="medicamentos">Medicamentos?</label>
                                        <input type="text" name="medicamentos" id="" placeholder="Quais?">
                                    </div>

                                </div>
                            </form>
                        </div>

                        <button data-consulta="button" type="submit">Próximo</button>
                    </div>

                    <div data-consulta="divs" class="contra-indicacoes-div-container">
                        <div class="container">
                            <h1>Contra-Inidicações</h1>
                            <form action="" method="post">
                                <div class="form-div-selects">
                                    <div class="area-label">
                                        <label for="hipertensao">Hipertensão:</label>
                                        <input type="checkbox" value="" for="hipertensao" >
                                    </div>
                                    <div class="area-label">
                                        <label for="tabaquismo">Tabaquismo:</label>
                                        <input type="checkbox" value="" for="tabaquismo" >
                                    </div>
                                    <div class="area-label">
                                        <label for="estresse">Estresse:</label>
                                        <input type="checkbox" value="" for="estresse" >
                                    </div>
                                    <div class="area-label">
                                        <label for="sedentarismo">Sedentarismo:</label>
                                        <input type="checkbox" value="" for="sedentarismo" >
                                    </div>
                                    <div class="area-label">
                                        <label for="obesidade">Obesidade:</label>
                                        <input type="checkbox" value="" for="obesidade" >
                                    </div>

                                </div>
                                <div class="form-div-questions">
                                    <div>
                                        <label for="questions-outros">Outros:</label>
                                        <input type="text" name="questions-outros" id="">
                                    </div>
                                </div>
                            </form>

                        </div>

                        <button data-consulta="button" type="submit">Próximo</button>
                    </div>

                    <div data-consulta="divs" class="diagnostico-div-container">
                        <div class="container">
                            <!-- <h1>Diagnóstico</h1> -->
                            <div class="title-div-informations">
                                <div class="area-label">
                                    <label for="">Médico(a):</label>
                                    <p>Dipirona</p>
                                </div>
                                <div class="informations-div-additional">
                                    <div class="area-label">
                                        <label for="">Data:</label>
                                        <p>00/00/0000</p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Hora:</label>
                                        <p>00:00</p>
                                    </div>
                                </div>
                            </div>

                            <form class="form-div-questions" action="" method="post">
                                <div>
                                    <label for="diagnostico">Diagnóstico Médico:</label>
                                    <input type="text" name="diagnostico" id="">
                                </div>
                                <div>
                                    <label for="informacoes-adicionais">informações Adicionais:</label>
                                    <input type="text" name="informacoes-adicionais" id="" placeholder="Sintomas e observações">
                                </div>
                                <div>
                                    <label for="medicamento">Medicamento:</label>
                                    <input type="text" name="medicamento" id="" placeholder="Medicamento, quantos dias, quantidade">
                                </div>
                                <div id="diagnostico-questions-retorno">
                                    <label for="" id="question-retorno">Consulta de Retorno?</label>
                                    <input type="text" name="" id="retorno-input-protocolo">
                                </div>
                            </form>

                        </div>

                        <div>
                            <p>ID: 00000000000000000</p>
                            <button data-consulta="button" type="submit">Próximo</button>
                        </div>
                    </div>

                </div>
                <!-- FIm Sessão: Consulta -->

            </div>
       </div>
    </main>
  </body>
</html>