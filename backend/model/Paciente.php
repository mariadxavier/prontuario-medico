<?php 
  class Paciente {
    public string $nome;
    public string $cpf;
    public string $telefone;
    public string $cep;
    public string $endereco;
    public string $sexo;
    public string $nascimento;
    public string $pai;
    public string $mae;
    public string $raca;
    public string $email;
    public string $sangue;
    public string $altura;
    public string $peso;
    public array $alergias;

    public function __constructor($nome, $cpf, $telefone, $cep, $endereco, $sexo, $nascimento, $pai, $mae, $raca, $email, $sangue, $altura, $peso, $alergias){
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
    }
  }

?> 