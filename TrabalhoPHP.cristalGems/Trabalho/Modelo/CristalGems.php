<?php

require_once("Gems.php");

class CristalGems extends Gems{

    private $arma;
    private $fusao;

    private $nome;
    private $tipoGem;



    /**
     * Get the value of arma
     */
    public function getArma()
    {
        return $this->arma;
    }

    /**
     * Set the value of arma
     */
    public function setArma($arma): self
    {
        $this->arma = $arma;

        return $this;
    }

    /**
     * Get the value of fusao
     */
    public function getFusao()
    {
        return $this->fusao;
    }

    /**
     * Set the value of fusao
     */
    public function setFusao($fusao): self
    {
        $this->fusao = $fusao;

        return $this;
    }
}