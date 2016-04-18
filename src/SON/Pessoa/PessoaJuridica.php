<?php

namespace SON\Pessoa;

use SON\Pessoa;

class PessoaJuridica extends Pessoa {

    private $cnpj;
    private $nomeempresa;
    private $tipo;
     
    public function getNome() {
        return $this->nomeempresa;
    }

    public function setNome($nomeempresa) {
        $this->nomeempresa = $nomeempresa;
    }


    public function setCnpj($cnpj) {
        $this->cnpj = str_replace(array('.','-'),'',$cnpj);

        //$this->cpf = str_replace('.','',$cpf);
        //$this->cpf = str_replace('-','',$this->cpf);
    }

     
    public function getCnpj() {
        return $this->cnpj;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = 'Pessoa Jurídica';
        return $this;
    }
}
