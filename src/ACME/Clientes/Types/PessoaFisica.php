<?php

namespace ACME\Clientes\Types;

use ACME\Clientes\Types\Cliente;

class PessoaFisica extends Cliente {

    private $cpf;

    public function __construct($cpf, $id, $nome, $sexo, $endereco, $grau, $tipo, $enderecoCobranca)
    {
        $this->setCpf($cpf);
        parent::__construct($id, $nome, $sexo, $endereco, $grau, "Pessoa Fisica", $enderecoCobranca);
    }

    public function setCpf($cpf)
    {
        if(strlen($cpf) == 14){
            $this->cpf = $cpf;
            return $this;
        }else{
            $this->cpf = 'CPF Invalido';
            return $this;
        }
    }

    public function getCpf()
    {
        return $this->cpf; 
    }
} 