<?php
    require_once "../backend/model/connectionDB.php";
    $db = new ConnectionDB();
    session_start();
    $nomeMedico = $_SESSION["nomeMedico"];
    $idMedico = $_SESSION["idMedico"];
    $medico = $db->getMedicoById($idMedico);
    $id = $_GET["idPaciente"];
    $usuarioEncontrado = $db->getPacienteById($id);
    $collectionConsulta = $db->getConsultaByPacienteId($id);
    date_default_timezone_set('America/Sao_Paulo');
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
    <script src="./src/js/clique-header-logo.js" defer></script>
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
                <li class="links-li-link" id="novo-paciente-link"><a href="pagina-cadastro.php">Novo Paciente</a></li>
            </ul>
            <div class="container-div-user">
                <p class="user-p-name"><?php echo $medico["nome"]; ?></p>
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
                    <button id="button-consulta" class="aside-select">CONSULTA</button>
                    <a href="home.php" id="button-busca">BUSCA</a>
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
                            try
                            { if(!is_array($collectionConsulta)){
                                throw new Exception ("Sem consultas cadastradas");
                                } else {
                                    foreach($collectionConsulta as $consulta) {   
                                        $remedios = "";
                                        $prescricao = "";
                                        foreach($consulta["prescricao"] as $chave => $valor) {
                                            $remedios .= "{$chave}; ";
                                            $prescricao .= "{$chave}: {$valor}; <br>";
                                        };
                                    // para cada consulta retornada do paciente consulta, imprime essa div, com os dados da mesma:                                 
                                                                                                    
                                    echo '<div class="item-historico consulta">
                                    <div class="area-title-consulta">
                                        <h2 class="title-consulta">'.$consulta["diagnostico"].'</h2>
                                        <p class="data-consulta">'. $consulta["data"].'</p> 
                                    </div>
                                    <div class="conteudo-consulta">
                                        <div class="item-minimizado">
                                            <div class="area-label-consulta">
                                                <label for="id-consulta">Protocolo:</label>
                                                <p name="id-consulta">'.$consulta["id"].'</p>                                
                                            </div>
                                            
                                            <div class="area-label-consulta">
                                                <label for="medicacao-utilizada">Medicação Utilizada:</label>
                                                <p name="medicacao-utilizada">'. $remedios .'
                                                </p>                                
                                            </div>       
                                            <button class="button-ver-tudo">VER TUDO</button>
                                        </div>

                                        <div class="item-maximizado">
                                            <div class="area-label-consulta-textarea">
                                                <label for="sintomas">Sintomas:</label>
                                                <p name="sintomas" class="textarea-consulta">Sintomas
                                                </p>                                
                                            </div>
                                            
                                            <div class="area-label-consulta-textarea">
                                                <label for="prescricao">Prescrição:</label>
                                                <p name="prescricao" class="textarea-consulta">'.$prescricao.'</p>                                
                                            </div>

                                            <div class="area-label-consulta-textarea">
                                                <label for="antecedentes">Fatores de risco/Antecedentes:</label>
                                                <p name="antecedentes" class="textarea-consulta">Antecedentes
                                                </p>                                
                                            </div>

                                            <div class="area-label-consulta-textarea">
                                                <label for="contraIndicacoes">Contra-indicações:</label>
                                                <p name="contraIndicacoes" class="textarea-consulta">
                                                Contra Indicações
                                                </p>                                
                                            </div>
                
                                            <button class="button-ver-menos">VER MENOS</button>
                                        </div>
                                    </div>
                                    </div>';
                                    }
                                }
                            }catch (Exception $error){
                                echo $error->getMessage();
                            }
                        ?>
                    </div>           
                </div>

                 <!-- Sessão: Consulta -->
                <form class="container consulta-paciente" style="display: none;" method="post">
                    <div data-consulta="divs" class="anamnese-div-container div-selecionada">
                        <!-- Essa nova div utilizada para separar o conteúdo do botão, deverá ser repensada no refatoramento -->
                        <div class="container-cadastro-consulta">
                            <div class="anamnese-div-title">
                                <h1>Anamnese</h1>
                                <div class="title-div-informations">
                                    <div class="area-label">
                                        <label for="">Nome:</label>
                                        <p><?php echo $usuarioEncontrado["nome"] ?></p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Data:</label>
                                        <p><?php echo date("d/m/Y") ?></p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Hora:</label>
                                        <p><?php echo date("H:i:s") ?></p>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="anemnese-space-bar"></div>
                            
                            <div class="ananmese-div-queixa">
                                <h1>Queixa do Paciente</h1>
                                <div action="pagina-paciente.php" method="post" id="teste-form" class="form-div">

                                    <div>
                                        <label  for="queixa-atual">Atual:</label>
                                        <textarea type="text" name="queixa-atual" id=""></textarea>
                                    </div>

                                    <div>
                                        <label for="queixa-progresso">Pregressa:</label>
                                        <textarea type="text" name="queixa-pregressa" id=""></textarea>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                        
                        <button data-consulta="button">Próximo</button>
                    </div>

                    <div data-consulta="divs" class="antecedentes-div-container">
                        <div class="container-cadastro-consulta">
                            <h1>Fatores de Risco/Antecedentes</h1>
                            <div action="" method="post" class="form-div">
                                <div class="form-div-selects">
                                    <div class="area-label">
                                        <label for="hipertensao-arterial">Hipertensão:</label>
                                        <input type="checkbox" value="" name="hipertensao" for="hipertensao-arterial" >
                                    </div>
                                    <div class="area-label">
                                        <label for="tabaquismo">Tabaquismo:</label>
                                        <input type="checkbox" value="" name="tabaquismo" for="tabaquismo" >
                                    </div>
                                    <div class="area-label">
                                        <label for="estresse">Estresse:</label>
                                        <input type="checkbox" value="" name="estresse" for="estresse" >
                                    </div>
                                    <div class="area-label">
                                        <label for="sedentarismo">Sedentarismo:</label>
                                        <input type="checkbox" value="" name="sedentarismo" for="sedentarismo" >
                                    </div>
                                    <div class="area-label">
                                        <label for="obesidade">Obesidade:</label>
                                        <input type="checkbox" value="" name="obesidade" for="obesidade" >
                                    </div>
                                    <div class="area-label">
                                        <label for="avc">AVC:</label>
                                        <input type="checkbox" value="" name="avc" for="avc" >
                                    </div>
                                    <div class="area-label">
                                        <label for="hereditariedade">Hereditariedade:</label>
                                        <input type="checkbox" value="" name="hereditariedade" for="hereditariedade" >
                                    </div>
                                    <div class="area-label">
                                        <label for="menopausa">Menopausa:</label>
                                        <input type="checkbox" value="" name="menopausa" for="menopausa" >
                                    </div>
                                    <div class="area-label">
                                        <label for="diabetes">Diabetes:</label>
                                        <input type="checkbox" value="" name="diabetes" for="diabetes" >
                                    </div>
                                    <div class="area-label">
                                        <label for="hipercolesterolemia">Hipercolesterolemia:</label>
                                        <input type="checkbox" value="" name="hipercolesterolemia" for="hipercolesterolemia" >
                                    </div>

                                </div>
                                <div class="form-div-questions">
                                    <div>
                                        <label for="questions-outros">Outros:</label>
                                        <textarea type="text" name="outros-antecedentes" id=""></textarea>
                                    </div>
                                    <div>
                                        <label for="medicamentos">Medicamentos?</label>
                                        <textarea type="text" name="medicamentos" id="" placeholder="Quais"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <button data-consulta="button">Próximo</button>
                    </div>

                    <div data-consulta="divs" class="contra-indicacoes-div-container">
                        <div class="container-cadastro-consulta">
                            <h1>Contra-Inidicações</h1>
                            <div action="" method="post" class="form-div">
                                <div class="form-div-selects">
                                    <div class="area-label">
                                        <label for="traumatismos">Traumatismos:</label>
                                        <input type="checkbox" value="" for="traumatismo" name="traumatismos">
                                    </div>
                                    <div class="area-label">
                                        <label for="cirurgias">Cirurgias:</label>
                                        <input type="checkbox" value="" for="cirurgias" name="cirurgias" >
                                    </div>
                                    <div class="area-label">
                                        <label for="ulcera">Úlcera:</label>
                                        <input type="checkbox" value="" for="ulcera" name="ulcera" >
                                    </div>
                                    <div class="area-label">
                                        <label for="sangramento">Sangramento:</label>
                                        <input type="checkbox" value="" for="sangramento" name="sangramento" >
                                    </div>
                                    <div class="area-label">
                                        <label for="coagulopatia">Coagulopatia:</label>
                                        <input type="checkbox" value="" for="coagulopatia" name="coagulopatia" >
                                    </div>

                                </div>
                                <div class="form-div-questions">
                                    <div>
                                        <label for="questions-outros">Outros:</label>
                                        <textarea type="text" name="contra-indicacoes-outros" id=""></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button data-consulta="button">Próximo</button>
                    </div>

                    <div data-consulta="divs" class="diagnostico-div-container">
                        <div class="container-cadastro-consulta">
                            <!-- <h1>Diagnóstico</h1> -->
                            <div class="title-div-informations">
                                <div class="area-label">
                                    <label for="">Médico(a):</label>
                                    <p><?php echo $medico["nome"]; ?></p>
                                </div>
                                <div class="informations-div-additional">
                                    <div class="area-label">
                                        <label for="">Data:</label>
                                        <p> <?php echo date("d/m/Y"); ?></p>
                                    </div>
                                    <div class="area-label">
                                        <label for="">Hora:</label>
                                        <p> <?php echo date("H:i:s"); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-div-questions" action="" method="post" class="form-div">
                                <div>
                                    <label for="diagnostico">Diagnóstico Médico:</label>
                                    <textarea type="text" name="diagnostico" id=""></textarea>
                                </div>
                                <div>
                                    <label for="informacoes-adicionais">informações Adicionais:</label>
                                    <textarea type="text" name="informacoes-adicionais" id="" placeholder="Sintomas e observações"></textarea>
                                </div>
                                <div id="container-medicamentos">
                                    <label for="medicamento">Medicamento:</label>
                                    <textarea type="text" name="medicamento" id="medicamento" placeholder="Medicamento"></textarea>
                                    <textarea type="text" name="medicamento" id="prescricao" placeholder="Prescrição"></textarea>
                                    <div id="medicamentos-button">+</div>
                                </div>
                                <div id="retorno-medicamentos">
                                    <textarea type="text" name="retorno" name="retorno-medicamentos" id="medicamentos-textarea-show"></textarea>
                                </div>
                                <input type="text" name="query" id="inputInv" style="display: none;">
                            </div>

                        </div>

                        <div>
                            <?php 

                                $_POST['queixa-atual']  = (isset($_POST['queixa-atual']))  ? true : null;
                                $_POST['queixa-pregressa']  = (isset($_POST['queixa-pregressa']))  ? true : null;

                                $_POST['hipertensao']  = (isset($_POST['hipertensao']))  ? true : null;
                                $_POST['tabaquismo']  = (isset($_POST['tabaquismo']))  ? true : null;
                                $_POST['tabaquismo']  = (isset($_POST['tabaquismo']))  ? true : null;
                                $_POST['estresse']  = (isset($_POST['estresse']))  ? true : null;
                                $_POST['sedentarismo']  = (isset($_POST['sedentarismo']))  ? true : null;
                                $_POST['obesidade']  = (isset($_POST['obesidade']))  ? true : null;
                                $_POST['avc']  = (isset($_POST['avc']))  ? true : null;
                                $_POST['hereditariedade']  = (isset($_POST['hereditariedade']))  ? true : null;
                                $_POST['menopausa']  = (isset($_POST['menopausa']))  ? true : null;
                                $_POST['diabetes']  = (isset($_POST['diabetes']))  ? true : null;
                                $_POST['hipercolesterolemia']  = (isset($_POST['hipercolesterolemia']))  ? true : null;
                                $_POST['outros-antecedentes']  = (isset($_POST['outros-antecedentes']))  ? $_POST['outros-antecedentes'] : null;
                                $_POST['input-antecedentes']  = (isset($_POST['input-antecedentes']))  ? $_POST['input-antecedentes'] : null;

                                $_POST['traumatismos']  = (isset($_POST['traumatismos']))  ? true : null;
                                $_POST['cirurgias']  = (isset($_POST['cirurgias']))  ? true : null;
                                $_POST['ulcera']  = (isset($_POST['ulcera']))  ? true : null;
                                $_POST['sangramento']  = (isset($_POST['sangramento']))  ? true : null;
                                $_POST['coagulopatia']  = (isset($_POST['coagulopatia']))  ? true : null;
                                $_POST['contra-indicacoes-outros']  = (isset($_POST['contra-indicacoes-outros']))  ? true : null;

                                $diagnostico  = (isset($_POST['diagnostico']))  ? $_POST['diagnostico'] : null;
                                $dadosAdicionais  = (isset($_POST['informacoes-adicionais']))  ? $_POST['informacoes-adicionais'] : null;
                                
                                if(isset($_POST["query"])) {
                                    $anamnese = [
                                        "queixa" => 
                                        ["queixaAtual" => $_POST["queixa-atual"], "queixaPregressa" => $_POST["queixa-pregressa"]], 
    
                                        "antecedentes" => 
                                        ["checkbox" =>["hipertensao" => $_POST["hipertensao"], ["tabaquismo" => $_POST["tabaquismo"]], ["estresse" => $_POST["estresse"]], ["sedentarismo" => $_POST["sedentarismo"]], ["obesidade" => $_POST["obesidade"]], ["avc" => $_POST["avc"]], ["hereditariedade" => $_POST["hereditariedade"]], ["menopausa" => $_POST["menopausa"]], ["diabetes" => $_POST["diabetes"]], ["hipercolesterolemia" => $_POST["hipercolesterolemia"]]],
                                        "texts" => ["outros-antecedentes" => $_POST["outros-antecedentes"]], ["input-antecedentes" => $_POST["input-antecedentes"]]], 
                                        
                                        "contraIndicacoes" => 
                                        ["checkbox" => ["traumatismos" => $_POST["traumatismos"], "cirurgias" => $_POST["cirurgias"], "ulcera" => $_POST["ulcera"], "sangramento" => $_POST["sangramento"], "coagulopatia" => $_POST["coagulopatia"]], 
                                        "texts" => ["contra-indicacoes-outros" => $_POST["contra-indicacoes-outros"]]]
                                    ];

                                    $novaConsulta  = new Consulta($medico["id"], $usuarioEncontrado["id"], array($_POST["query"]),$anamnese, $dadosAdicionais,$diagnostico);
                                    $db->setNewConsulta($novaConsulta);
                                    unset($_POST["query"]);
                                    echo $_POST["query"];
                                }
                            ?>
                            <button type="submit">Salvar</button>
                        </div>
                    </div>

                </form>
                <!-- FIm Sessão: Consulta -->

            </div>
       </div>
    </main>
  </body>
</html>