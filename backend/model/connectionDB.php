<?php
  require __DIR__."/../vendor/autoload.php";
  use Kreait\Firebase\Factory;
  use Ramsey\Uuid\Uuid;

  class ConnectionDB {
    private Factory $factoryDB;
    private $connectionDB;

    function __construct(){
      $this->factoryDB = (new Factory())->withDatabaseUri("https://prontuario-medico-2d0af-default-rtdb.firebaseio.com/");
      $this->connectionDB = $this->factoryDB->createDatabase();
    }

    public function getColletionPaciente(){
      try{
        $allPacientes = $this->connectionDB->getReference("Paciente")->getSnapshot()->getValue();
        if(!$allPacientes){
          throw new Exception("Não há nenhum paciente na lista.");
        }
        return $allPacientes;
      }catch(Exception $err){
        return $err->getMessage();
      }

    }

    public function getPacienteById($id){
      try{
        $paciente = $this->connectionDB->getReference("Paciente/".$id)->getSnapshot()->getValue();
        if(!$paciente){
          throw new Exception("Este id não foi encontrado.");
        }
        return $paciente;
      }catch(Exception $err){
        return $err->getMessage();
      }
    }

    public function getPacienteByNome($nome){
      try{
        $paciente = $this->connectionDB->getReference("Paciente/")->orderByChild("nome")->equalTo($nome)->getSnapshot()->getValue();
        if(!$paciente){
          throw new Exception("Este nome não foi encontrado.");
        }
        return $paciente;
      }catch(Exception $err){
        return $err->getMessage();
      }
    }

    public function getPacienteByCpf($cpf){
      try{
        $paciente = $this->connectionDB->getReference("Paciente/")->orderByChild("cpf")->equalTo($cpf)->getSnapshot()->getValue();
        if(!$paciente){
          throw new Exception("Este cpf não foi encontrado.");
        }
        return $paciente;
      }catch(Exception $err){
        return $err->getMessage();
      }
    }

    public function setNewPaciente($nome, $cep, $cpf, $sexo){
      $uuid = Uuid::uuid4();
      try{
        $paciente = $this->connectionDB->getReference("Paciente/".$uuid)->set([
          "nome" => $nome,
          "cep"=> $cep,
          "cpf" => $cpf,
          "sexo" => $sexo
        ]);
        if(!$paciente){
          throw new Exception("Falha ao cadastrar o paciente.");
        }
        return "paciente criado com sucesso";
      }catch(Exception $err){
        return $err->getMessage();
      }
    }
  }
?>