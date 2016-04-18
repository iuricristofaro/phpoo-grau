<?php

namespace SON;

use SON\Pessoa;
use SON\Pessoa\EnderecoCobranca;

use SON\Interfaces\GrauDeImportancia;

abstract class Pessoa extends EnderecoCobranca implements GrauDeImportancia {
  
    private $id;
    private $telefone;
    private $email;
    private $importancia;
    private $documentoTipo;
    private $documentoNumero;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getEmail() 
    {
        return $this->email;
    }

    public function setGrau($importancia) 
    {
        $this->importancia = $importancia;
        return $this;
    }

    public function getGrau() {
        $importancia = '';
        for($i = 0; $i < $this->importancia; $i++){
        $importancia .= '<span class="glyphicon glyphicon-star amarela" aria-hidden="true"></span>&nbsp;';
    }
        return $importancia;
    }

    public function setDocumentoTipo($documentoTipo){
        $this->documentoTipo = $documentoTipo;
        return $this;
    }
    
    public function getDocumentoTipo(){
        return $this->documentoTipo;
    }

    public function setDocumentoNumero($documentoNumero){
        $this->documentoNumero = $documentoNumero;
        return $this;
    }

    public function getDocumentoNumero(){
        return $this->documentoNumero;
    }
}
