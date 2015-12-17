<?php 
 
 
class Jogador {
	private $nomeJogador;
    private $assassinatos;
    private $mortes;
    private $armasJogador;
    private $streakKillAtual;
    private $maiorStreakKill;
    private $awards;
 
    public function __construct($nomeJogador) {
        $this->setNomeJogador($nomeJogador);
        $this->setMortes(0);
        $this->setAssassinatos(0);
        $this->setStreakKillAtual(0);
        $this->setAwards(0);
    }

    public function addAssassinato($nomeArma) {
    	$this->setAssassinatos($this->getAssassinatos() + 1);

		if(empty($this->getArmasJogador()[$nomeArma])) {
			$this->setArmasJogador($nomeArma);
		}else {
			$this->setArmasJogador($nomeArma, $this->getArmasJogador()[$nomeArma]+1);
		}
    	

    }

    public function setNomeJogador($nomeJogador) {
        $this->nomeJogador = $nomeJogador;
    }
 
    public function getNomeJogador() {
        return $this->nomeJogador;
    }
 
    public function setAssassinatos($assassinatos) {
        $this->assassinatos = $assassinatos;
    }
 
    public function getAssassinatos() {
        return $this->assassinatos;
    }

    public function setArmasJogador($nomeArma, $totalVezes = 1) {
    	
		$this->armasJogador[$nomeArma] = $totalVezes;
			
    }

    public function getArmasJogador() {
    	return $this->armasJogador;
    }

    public function getArmaPreferida() {
        $armaPreferida = null;
        $maiorQtd = 0;
        foreach($this->getArmasJogador() as $nome => $total) {
            if($armaPreferida == null || $total > $maiorQtd) {
                $armaPreferida = $nome;
                $maiorQtd = $total;
            }
        }
        return $armaPreferida;
    }
 
    public function setMortes($mortes) {
        $this->mortes = $mortes;
    }
	
	public function addMorte() {
		$this->setMortes($this->getMortes()+1);
	}
 
	public function setMaiorStreakKill($maiorStreakKill) {
		$this->maiorStreakKill = $maiorStreakKill;
	}

	public function getMaiorStreakKill() {
		return $this->maiorStreakKill;
	}

    public function getMortes() {
        return $this->mortes;
    }

	private function addStreakKills() {
		$this->setStreakKillAtual($this->getStreakKillAtual()+1);

		if($this->getStreakKillAtual() > $this->getMaiorStreakKill()) {
			$this->setMaiorStreakKill($this->getStreakKillAtual());
		}

    }

    public function setStreakKillAtual($streakKillAtual) {
    	$this->streakKillAtual = $streakKillAtual;
    }

    public function getStreakKillAtual() {
    	return $this->streakKillAtual;
    }

    public function addAwards() {
    	$this->setAwards($this->getAwards() +1);
    }

    public function setAwards($awards) {
    	$this->awards = $awards;
    }

    public function getAwards() {
    	return $this->awards;
    }
}
 
 ?>
