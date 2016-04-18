<?php

namespace SON\Pessoa;

use SON\Pessoa;

class PessoaFisica extends Pessoa {
  
    private $nome;
    private $cpf;
    private $tipo;


    public function setNome($nome) {
        $this->nome = $nome;
    }  

    public function getNome() {
        return $this->nome;
    }

    public function setCpf($cpf) {
        $this->cpf = str_replace(array('.','-'),'',$cpf);

        //$this->cpf = str_replace('.','',$cpf);
        //$this->cpf = str_replace('-','',$this->cpf);
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = 'Pessoa Física';
    }
}
