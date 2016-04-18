<?php

namespace SON\Pessoa;

use SON\Pessoa;

abstract class EnderecoCobranca {

    private $rua;


    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function getRua() {
        return $this->rua;
    }


}
