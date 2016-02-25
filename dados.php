<?php

require_once "PessoaFisica.php";
require_once "PessoaJuridica.php";

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


/*10.496.388/0001-17
32.498.895/0001-22
11.121.515/0001-66
36.654.247/0001-79
05.613.618/0001-40

($cnpj,$id, $nome, $sexo, $endereco, $grau, "Pessoa Fisica", $enderecoCobranca);

 	6 => new Cliente(6,"Eva Alves", "212.413.001-01", "Rua Pará de Minas, nº 354 - Centro, Contagem-MG"),
 	7 => new Cliente(7,"Joaquim Costa", "301.102.301-01", "Rua E, nº 256 - Centro, Camacan-BA"),
 	8 => new Cliente(8,"Eliomar Morais", "103.054.193-01", "Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA"),
 	9 => new Cliente(9,"Carla Amaral", "123.789.257-79", "Rua F, nº 123 - Centro, Ilhéus-BA"),
 	10 => new Cliente(10,"Jeniffer Araújo", "231.321.412-01", "Rua G, nº 314 - Centro, Salvador-BA"),*/
