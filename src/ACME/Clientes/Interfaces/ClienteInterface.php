<?php

namespace src\ACME\Clientes\Interfaces;

interface ClienteInterface
{
	//namespace ACME\Clientes\Interfaces;

	public function getGrau();
	public function setGrau($grau);

	public function getEnderecoCobranca();
	public function setEnderecoCobranca($endereco); 
}