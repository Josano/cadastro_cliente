<?php

require_once "ClienteInterface.php";

class Cliente implements ClienteInterface
{
	protected $id;
	protected $nome;
	protected $endereco;
	protected $sexo;
	protected $grau;
	protected $tipo;
	protected $enderecoCobranca;


	public function __construct($id, $nome, $sexo, $endereco, $grau, $tipo, $enderecoCobranca )
	{
		$this->setId($id)
			 ->setNome($nome)
			 ->setSexo($sexo)
		     ->setEndereco($endereco)
		     ->setGrau($grau)
		     ->setTipo($tipo)
		     ->setEnderecoCobranca($enderecoCobranca);
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
		return $this;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
		return $this;
	}		

	public function getSexo(){
		return $this->cpf;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
		return $this;
	}	


	public function getEndereco(){
		return $this->endereco;
	}	

	public function setEndereco($endereco){
		$this->endereco = $endereco;
		return $this;
	}

	public function getGrau(){
		return $this->grau;
	}

	public function setGrau($grau){
		$this->grau = $grau;
		return $this;		

	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
		return $this;		

	}			

	public function getEnderecoCobranca(){
		return $this->enderecoCobranca;
	}

	public function setEnderecoCobranca($enderecoCobranca){
		//SE ENDERECO DE COBRANCA FOR VAZIO O CLIENTE RECEBE O PROPRiO ENDERECO COMO ENDERECO COBRANCA
		if($enderecoCobranca != ''){
			$this->enderecoCobranca = $enderecoCobranca;
			return $this;		
		}else{
			$this->enderecoCobranca = $this->getEndereco();
			return $this;	
		}				
	}	
}