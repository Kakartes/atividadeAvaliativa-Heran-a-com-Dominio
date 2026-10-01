<?php

require_once("Gems.php");

class HomeWordGems extends Gems{

    private $diamanteQueServe;

    
    /**
     * Get the value of diamanteQueServe
     */
    public function getDiamanteQueServe()
    {
        return $this->diamanteQueServe;
    }

    /**
     * Set the value of diamanteQueServe
     */
    public function setDiamanteQueServe($diamanteQueServe): self
    {
        $this->diamanteQueServe = $diamanteQueServe;

        return $this;
    }
}