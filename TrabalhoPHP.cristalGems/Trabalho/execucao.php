<?php

/*require_once("Modelo/Gems.php");*/
require_once("Modelo/HomeWordGems.php");
require_once("Modelo/CristalGems.php");
require_once("Modelo/OffColors.php");


$gem = array();
do {

    echo "\n===== ESCOLHA SUA GEM =====\n";
    echo "1 - Perola\n";
    echo "2 - Garnet\n";
    echo "3 - Lazuli\n";
    echo "4 - Espinela\n";
    echo "0 = listar\n";

    $opcao = readline("escolha um numero dessas opções: ");
    switch ($opcao) {

        case '1':
            $gem1 = new OffColors();

            $gem1->setNome(readline("Qual o nome proprio da sua Perola incolor: "));
            $gem1->setCorteQueFugiu(readline("Qual era sua diamante: "));
            $gem1->setArma(readline("Qual sua arma: "));
            $gem1->setDefeituosa(readline("Sua gem é ou não defeituosa (sim ou não): "));
            $gem1->setFusao(readline("Sua gem é ou ja foi uma fusão: "));

            array_push($gem, $gem1);
            break;

        case '2':
            $gem2 = new CristalGems();

            $gem2->setNome(readline("Qual o nome proprio da sua Garnet: "));
            $gem2->setArma(readline("Qual a arma da sua Garnet: "));
            $gem2->setFusao(readline("É uma Garnet fusão (sim ou não):"));
            array_push($gem, $gem2);
            break;

        case '3':
            $gem3 = new HomeWordGems();

            $gem3->setNome(readline("qual o nome proprio da sua Lazuli: "));
            $gem3->setDiamanteQueServe(readline("Qual a sua diamante: "));
            array_push($gem, $gem3);
            break;

        case '4':
            echo "espere...\n";

            break;

        case '0':
            foreach ($gem as $gems) {
               if($gems instanceof HomeWordGems){
                echo "\nNome: " . $gems->getNome() . "\nDiamante: " . $gems->getDiamanteQueServe() . "\n";
            } else if($gems instanceof CristalGems){
                echo "\nNome: " . $gems->getNome() . "\nArma: " . $gems->getArma() . "\nFusão: " . $gems->getFusao() . "\n";
            } else if($gems instanceof OffColors){
                echo "\nNome: " . $gems->getNome() . "\nCorte que Fugiu: " . $gems->getCorteQueFugiu() . "\nArma: " . $gems->getArma() . "\nDefeituosa: " . $gems->getDefeituosa() . "\nFusão: " . $gems->getFusao() . "\n";
            }
            }
            break;
    }
} while ($opcao != 0);
