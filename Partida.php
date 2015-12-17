<?php 


class Partida {
	private $idPartida;
	private $dataInicio;
	private $dataTermino;
	private $listaJogadores;
	

	function __construct($idPartida, $dataInicio) {
		$this->setIdPartida($idPartida);
		$this->setDataInicio($dataInicio);
		$this->listaJogadores  =  new ListaJogadores();
	}

	public function addAssassinato($nomeJogador, $nomeArma) {
		$this->listaJogadores->addAssassinato($nomeJogador, $nomeArma);
	}

	public function addMorte($nomeJogador) {
		$this->listaJogadores->addMorte($nomeJogador);
	}

	public function addAwards() {
		$this->listaJogadores->addAwards();
	}

	public function getVencedor() {
		return $this->listaJogadores->getVencedor();
	}

	public function setIdPartida($idPartida) {
		$this->idPartida = $idPartida;
	}

	public function getIdPartida() {
		return $this->idPartida;
	}

	public function setDataInicio($dataInicio) {
		$this->dataInicio = $dataInicio;
	}

	public function getDataInicio() {
		return $this->dataInicio;
	}

	public function setDataTermino($dataTermino) {
		$this->dataTermino = $dataTermino;
	}

	public function getDataTermino() {
		return $this->dataTermino;
	}

}

 ?>