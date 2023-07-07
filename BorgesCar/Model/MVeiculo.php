<?php

class MVeiculo
{
    private $codigo;
    private $modelo;
    private $fabricante;
    private $cor;
    private $ano;
    private $preco;
    private $chassi;

    function __construct(
        $codigo,
        $modelo,
        $fabricante,
        $cor,
        $ano,
        $preco,
        $chassi
    ) {
        $this->codigo = $codigo;
        $this->modelo = $modelo;
        $this->fabricante = $fabricante;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->preco = $preco;
        $this->chassi = $chassi;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getChassi()
    {
        return $this->chassi;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setChassi($chassi)
    {
        $this->chassi = $chassi;
    }
}
?>