<?php 

  class Consulta {
    private string $idMedico;
    private string $idPaciente;
    private array $prescricao;
    private array $anamnese;
    private string $dadosAdicionais;
    private string $diagnostico;
    private string $procedimentos;
    public function __construct($idMedico, $idPaciente, $prescricao, $anamnese, $diagnostico, $dadosAdicionais, $procedimentos) {
      $this->idMedico = $idMedico;
      $this->idPaciente = $idPaciente;
      $this->prescricao = $prescricao;
      $this->anamnese = $anamnese;
      $this->dadosAdicionais = strtoupper($dadosAdicionais);
      $this->diagnostico = strtoupper($diagnostico);
      $this->procedimentos = strtoupper($procedimentos);
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

    public function getProcedimentos() {
      return $this->procedimentos;
    }
  }

?>