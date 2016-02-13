<?php

class Cliente
{
	public $id;
	public $nome;
	public $cpf;
	public $endereco;
	public $estado;

	public function __construct($id, $nome, $cpf, $endereco, $estado)
	{
		$this->id 	    	= $id;
		$this->nome 	    = $nome;
		$this->cpf    		= $cpf;
		$this->endereco 	= $endereco;
		$this->estado       = $estado;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}		

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}	

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}	

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}		
}