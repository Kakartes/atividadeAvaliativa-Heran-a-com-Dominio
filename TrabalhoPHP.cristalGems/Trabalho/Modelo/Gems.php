<?php

class Gems {

    private $nome;
    private $tipoGem;


    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tipoGem
     */
    public function getTipoGem()
    {
        return $this->tipoGem;
    }

    /**
     * Set the value of tipoGem
     */
    public function setTipoGem($tipoGem): self
    {
        $this->tipoGem = $tipoGem;

        return $this;
    }
}