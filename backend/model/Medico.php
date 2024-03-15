<?php 
  class Medico {
    private string $CRM;
    private string $nome;
    private string $telefone;
    private string $email;
    private string $cpf;
    private string $endereco;

    public function __construct($CRM, $nome, $telefone, $email, $cpf, $endereco) {
      $this->CRM = $CRM;
      $this->nome = strtoupper($nome);
      $this->telefone = $telefone;
      $this->email = strtoupper($email);
      $this->cpf = $cpf;
      $this->endereco = strtoupper($endereco);
    }

    public function getCRM(){
      return $this->CRM;
    }

    public function getNome(){
      return $this->nome;
    }

    public function getTelefone(){
      return $this->telefone;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getCpf(){
      return $this->cpf;
    }
    
    public function getEndereco(){
      return $this->endereco;
    }
  }
?>