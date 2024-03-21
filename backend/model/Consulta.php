<?php 

  class Consulta {
    private string $idMedico;
    private string $idPaciente;
    private string $prescricao;
    private array $anamnese;
    private string $dadosAdicionais;
    private string $diagnostico;
    public function __construct($idMedico, $idPaciente, $prescricao, $anamnese, $dadosAdicionais, $diagnostico) {
      $this->idMedico = $idMedico;
      $this->idPaciente = $idPaciente;
      $this->prescricao = $prescricao;
      $this->anamnese = $anamnese;
      $this->dadosAdicionais = strtoupper($dadosAdicionais);
      $this->diagnostico = strtoupper($diagnostico);;
    }

    public function getIdMedico() {
      return $this->idMedico;
    }

    public function getIdPaciente(){
      return $this->idPaciente;
    }

    public function getPrescricao(){
      return $this->prescricao;
    }

    public function getAnamnese(){
      return $this->anamnese;
    }
    public function getDadosAdicionais(){
      return $this->dadosAdicionais;
    }

    public function getDiagnostico(){
      return $this->diagnostico;
    }
  }

?>