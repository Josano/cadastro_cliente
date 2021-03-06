<?php

// require_once('autoload.php');
include ("./autoload.php");


// echo realpath('autoload.php');exit;

// namespace ACME\Clientes\Types;

use src\ACME\Clientes\Types\PessoaFisica,src\ACME\Clientes\Types\PessoaJuridica;

$clientes = array(
 	1 => new PessoaFisica("123.321.456-01",1, "Nilton Morais", "Masculino",  "Rua A, nº 354 - Centro, Ilhéus-BA", "***", 
 						  "Pessoa Fisica", "Rua B, nº 98 - Saudade, Ilhéus-BA"),
 	2 => new PessoaFisica("789.541.369-01",2, "Jéssica Abreu", "Feminino",  "Rua B, nº 147 - Coceição, Itabuna-BA", "*****", 
 						  "Pessoa Fisica", ''),
 	3 => new PessoaFisica("987.741.364-05",3, "Maria do Carmo", "Feminino",  "Rua C, nº 451 - Mangabinha, Itabuna-BA", "**", 
 						  "Pessoa Fisica", "Rua C, nº 76 - Pinhoes, Ilhéus-BA"),
 	4 => new PessoaFisica("854.001.140-01",4, "João Pedro", "Masculino",  "Rua D, nº 09 - Centro, Contagem-MG", "*", 
 						  "Pessoa Fisica", "Rua Estrada, nº 153 - Castelo, Ilhéus-BA"),
 	5 => new PessoaFisica("059.905.154-01",5, "Manoel Cruz", "Masculino",  "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA", "*****", 
 						  "Pessoa Fisica", "Rua Belga, nº 333 - Barreiras, Ilhéus-BA"),
 	6 => new PessoaJuridica("10.496.388/0001-17",6, "Maria ltda", '', "Rua A, nº 354 - Centro, Ilhéus-BA", "***", 
 						  "Pessoa Juridica", "Rua B, nº 98 - Saudade, Ilhéus-BA"),
 	7 => new PessoaJuridica("32.498.895/0001-22",7, "Cortinas ltda", '', "Rua B, nº 147 - Coceição, Itabuna-BA", "*****", 
 						  "Pessoa Juridica", ''),
 	8 => new PessoaJuridica("11.121.515/0001-66",8, "Marmoraria do Ze", '', "Rua C, nº 451 - Mangabinha, Itabuna-BA", "**", 
 						  "Pessoa Juridica", "Rua C, nº 76 - Pinhoes, Ilhéus-BA"),
 	9 => new PessoaJuridica("36.654.247/0001-79",9, "Pizzaria Legal", '', "Rua D, nº 09 - Centro, Contagem-MG", "*", 
 						  "Pessoa Juridica", "Rua Estrada, nº 153 - Castelo, Ilhéus-BA"),
 	10 => new PessoaJuridica("05.613.618/0001-40",10, "Padaria Sonho", '', "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA", "*****", 
 						  "Pessoa Juridica", "Rua Belga, nº 333 - Barreiras, Ilhéus-BA") 	

);
