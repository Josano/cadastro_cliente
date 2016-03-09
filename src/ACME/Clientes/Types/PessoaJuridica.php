<?php

namespace src\ACME\Clientes\Types;

// use ACME\Clientes\Cliente;

use src\ACME\Clientes\Cliente;

class PessoaJuridica extends Cliente {

    private $cnpj;
    
    public function __construct($cnpj, $id, $nome, $sexo, $endereco, $grau, $tipo, $enderecoCobranca)
    {
        $this->setCnpj($cnpj);
        parent::__construct($id, $nome, '', $endereco, $grau, "Pessoa Juridica", $enderecoCobranca);
    }

    public function setCnpj($cnpj)
    {
        if(strlen($cnpj) == 18){
            $this->cnpj = $cnpj;
            return $this;
        }else{
            $this->cnpj = 'CPF Invalido';
            return $this;
        }
    }

    public function getCnpj()
    {
        return $this->cnpj; 
    }
} 