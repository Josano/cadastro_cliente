<?php

namespace src\ACME\Clientes\Types;

use src\ACME\Clientes\Cliente;

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