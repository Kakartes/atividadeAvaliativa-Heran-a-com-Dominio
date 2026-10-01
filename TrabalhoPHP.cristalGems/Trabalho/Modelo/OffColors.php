<?php

require_once("Gems.php");

class OffColors extends Gems{

    private $fusao;
    private $defeituosa;
    private $arma;
    private $corteQueFugiu;



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

    /**
     * Get the value of defeituosa
     */
    public function getDefeituosa()
    {
        return $this->defeituosa;
    }

    /**
     * Set the value of defeituosa
     */
    public function setDefeituosa($defeituosa): self
    {
        $this->defeituosa = $defeituosa;

        return $this;
    }

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
     * Get the value of corteQueFugiu
     */
    public function getCorteQueFugiu()
    {
        return $this->corteQueFugiu;
    }

    /**
     * Set the value of corteQueFugiu
     */
    public function setCorteQueFugiu($corteQueFugiu): self
    {
        $this->corteQueFugiu = $corteQueFugiu;

        return $this;
    }
}