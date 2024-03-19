<?php
    // require_once "../backend/model/connectionDB.php";
    // $db = new ConnectionDB();
    // $id = $_GET["idPaciente"];
    // $usuarioEncontrado = ";
    // $collectionConsulta = $db->getConsultaByPacienteId($id);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prontuário Médico</title>
    <!-- Folha de estilo: -->
    <link rel="stylesheet" href="./src/css/cadastro.css" />
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
            <h2 class="aside-title">CADASTRO</h2>
            <div class="aside-conteudo">
            <nav class="aside-nav-dados-paciente">
                <ul>
                <li
                    id="aside-select-pessoal"
                    class="aside-select aba-selecionada"
                >
                    PESSOAL
                </li>
                </ul>
            </nav>
            <div class="aside-buttons">
                <button id="button-busca">BUSCA</button>
            </div>
            </div>
            </aside>
            <div class="div-show-dados-paciente">
    



                <form class="dados-pessoais-paciente cadastro-paciente container">
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
                        <input type="text" name="nome" required>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="idade-paciente"
                            >DN:
                        </label>
                        <input type="text" name="dataNascimento" placeholder="dd/mm/aaaa" id="" required>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="genero-paciente"
                            >Sexo:
                        </label>
                        <select name="sexo" required>
                            <option value="m">M</option>
                            <option value="f">F</option>
                        </select>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="raca-paciente"
                            >Raça:
                        </label>
                        <select name="raca" required>
                            <option value="branco">Braco</option>
                            <option value="preto">Preto</option>
                            <option value="pardo">Pardo</option>
                            <option value="indigena">Indigena</option>
                            <option value="amarelo">Amarelo</option>
                        </select>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="peso-paciente"
                            >Peso (kg):
                        </label>
                        <input type="text" name="peso" id="" required>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="altura-paciente"
                            >Altura (m):
                        </label>
                        <input type="text" name="altura" id="" required>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="sangue-paciente"
                            >Sangue:
                        </label>
                        <select name="sangue" required>
                            <option value="o-positivo">O+</option>
                            <option value="o-negativo">O-</option>
                            <option value="a-positivo">A+</option>
                            <option value="a-negativo">A-</option>
                            <option value="b-positivo">B+</option>
                            <option value="b-negativo">B-</option>
                            <option value="ab-positivo">AB+</option>
                            <option value="ab-negativo">AB-</option>
                        </select>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="mae-paciente"
                            >Mãe:
                        </label>
                        <input type="text" name="mae" id="" required>
                        </div>
        
                        <div class="item-caracteristicas-paciente">
                        <label class="label-dados-paciente" for="pai-paciente"
                            >Pai:
                        </label>
                        <input type="text" name="pai" id="" required>
                        </div>
                    </div>
                    </div>
        
                    <div class="contatos-paciente">
                    <div class="item-contatos-paciente">
                        <label class="label-dados-paciente" for="celular-paciente"
                        >Celular:
                        </label>
                        <input type="text" name="name" id="" placeholder="00000000000" required>
                    </div>
        
                    <div class="item-contatos-paciente">
                        <label class="label-dados-paciente" for="email-paciente"
                        >E-mail:
                        </label>
                        <input type="email" name="email" id="" required>
                    </div>
        
                    <div class="item-contatos-paciente">
                        <label class="label-dados-paciente" for="endereco-paciente"
                        >Endereço:
                        </label>
                        <input type="text" name="endereco" placeholder="País, UF, Cidade, Bairro, Rua/Avenida, Número, Complemento" id="" required>
                    </div>
                    </div>
        
                    <div class="container-alergias-paciente">
                    <h4 class="title-alergias-paciente">ALERGIAS:</h4>
                        <input type="text" name="alergias" id="">
                    </div>
        
                    <div class="observacoes-paciente">
                    <h4 class="title-observacoes-paciente">Observações:</h4>
                    <!-- <p class="conteudo-observacoes-paciente"> -->
                        <input type="text" class="conteudo-observacoes-paciente" name="alergias" id="" placeholder="Doenças crônicas, Deficiências Visíveis/Invisíveis">
                    <!-- </p> -->
                    </div>
                    <button type="submit">Cadastrar Paciente</button>
                </form>




            </div>
       </div>
    </main>
  </body>
</html>