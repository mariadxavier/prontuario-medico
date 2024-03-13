<?php 
    class Consulta {
        public string $idPaciente;
        public string $idMedico;
        public array $prescricao;
        public string $protocolo;
        public array $anamnese;
        public string $dadosAdicionais;
        public string $diagnostico;

        public function __construct($idPaciente, $idMedico, $prescricao, $protocolo, $anamnese, $dadosAdicionais, $diagnostico) {
            $this->idPaciente = $idPaciente;
            $this->idMedico = $idMedico;
            $this->prescricao = $prescricao;
            $this->protocolo = $protocolo;
            $this->anamnese = $anamnese;
            $this->dadosAdicionais = $dadosAdicionais;
            $this->diagnostico = $diagnostico;
        }
    }
?>