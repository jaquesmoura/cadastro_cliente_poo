<?php

class Cliente {
	public $id;
	public $nome;
	public $cpf;
	public $endereco;

	public static $client_list;
	public static $client_sel;	

	public function __construct($id, $nome, $cpf, $endereco){
		$this->id = $id;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
	}

}