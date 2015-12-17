<?php 
require_once("Jogador.php");
require_once("ListaJogadores.php");
require("Partida.php");

//$jogador = new Jogador("italo");
//$jogador2 = new Jogador("Joao");
 
    /*$teste = new ListaJogadores();
 
// $teste->addJogador($jogador);
// $teste->addJogador($jogador2);
 
*/
    $partida = new Partida();

    $partida->addAssassinato("Joao", "Martelo");
    $partida->addAssassinato("Joao", "Faca");
    $partida->addAssassinato("Joao", "Martelo");
    $partida->addAssassinato("Italo", "M16");
    $partida->addAssassinato("Claudio", "Martelo");
   // $partida->

    echo "O vencedor eh <pre>";
    print_r($partida->getVencedor());
    print_r($partida->getVencedor()->getArmaPreferida());

    echo "</pre>";
 ?>