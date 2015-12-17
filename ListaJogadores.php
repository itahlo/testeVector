<?php 
 
class ListaJogadores {
 
     private $listaJogadores = array();
 
    public function addJogador($jogador) {
        
        $this->listaJogadores[$jogador->getNomeJogador()] = $jogador;
        
    }
 
    public function addAssassinato($nomeJogador, $nomeArma) {
        
                            
        if(array_key_exists($nomeJogador, $this->getListaJogadores())) {
            // ja existe o jogador
            $this->getListaJogadores()[$nomeJogador]->addAssassinato($nomeArma);
            
        }else {
            $this->addJogador(new Jogador($nomeJogador));
            $this->getListaJogadores()[$nomeJogador]->addAssassinato($nomeArma);
        }
        
    }

    public function addMorte($nomeJogador) {
        if(!empty($this->getListaJogadores()[$nomeJogador])) {
            $this->getListaJogadores()[$nomeJogador]->addMorte();
        }else {
            $this->addJogador(new Jogador($nomeJogador));
            $this->getListaJogadores()[$nomeJogador]->addMorte();
        }
    }

    public function addAwards() {
        foreach($this->getListaJogadores() as $jogador) {
            if($jogador->getMortes() == 0) {
                $jogador->addAwards();
            }
        }
    }

    public function getVencedor() {
        $vencedor = null;
        foreach($this->getListaJogadores() as $jogador) {
            if($vencedor == null || $jogador->getAssassinatos() > $vencedor->getAssassinatos()) {
                $vencedor = $jogador;
            }
        }
        return $vencedor;
    }
 
    public function getListaJogadores() {
        return $this->listaJogadores;
    }
 
}
 
    


 ?>
