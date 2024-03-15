<?php 
  class Paciente {
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $cep;
    private string $endereco;
    private string $sexo;
    private string $nascimento;
    private string $pai;
    private string $mae;
    private string $raca;
    private string $email;
    private string $sangue;
    private string $altura;
    private string $peso;
    private string $alergias;
    private string $observacoes;

    public function __construct($nome, $cpf, $telefone, $cep, $endereco, $sexo, $nascimento, $pai, $mae, $raca, $email, $sangue, $altura, $peso, $alergias, $observacoes){
      $this->nome = strtoupper($nome);
      $this->cpf = strtoupper($cpf);
      $this->telefone = strtoupper($telefone);
      $this->cep = strtoupper($cep);
      $this->endereco = strtoupper($endereco);
      $this->sexo = strtoupper($sexo);
      $this->nascimento = strtoupper($nascimento);
      $this->pai = strtoupper($pai);
      $this->mae = strtoupper($mae);
      $this->raca = strtoupper($raca);
      $this->email = strtoupper($email);
      $this->sangue = strtoupper($sangue);
      $this->altura = strtoupper($altura);
      $this->peso = strtoupper($peso);
      $this->alergias = strtoupper($alergias);
      $this->observacoes = strtoupper($observacoes);
    }

    public function getNome(){
      return $this->nome;
    }
    public function getCpf(){
      return $this->cpf;
    }
    public function getTelefone(){
      return $this->telefone;
    }
    public function getCep(){
      return $this->cep;
    }
    public function getEndereco(){
      return $this->endereco;
    }
    public function getSexo(){
      return $this->sexo;
    }
    public function getNascimento(){
      return $this->nascimento;
    }
    public function getMae(){
      return $this->mae;
    }
    public function getPai(){
      return $this->pai;
    }
    public function getRaca(){
      return $this->raca;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getSangue(){
      return $this->sangue;
    }
    public function getAltura(){
      return $this->altura;
    }
    public function getPeso(){
      return $this->peso;
    }
    public function getAlergias(){
      return $this->alergias;
    }

    public function getObservacoes(){
      return $this->observacoes;
    }
  }

?> 