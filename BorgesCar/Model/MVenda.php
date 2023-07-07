<?php

class MVenda
{
    private $codigo;
    private $modelo;
    private $cliente;
    private $vendedor;
    private $formadepagamento;
    private $servicoadd;
    private $comissao;
    private $desconto;
    private $valortotal;
    private $chassi;

    function __construct(
        $codigo,
        $modelo,
        $cliente,
        $vendedor,
        $formadepagamento,
        $servicoadd,
        $comissao,
        $desconto,
        $valortotal,
        $chassi
    ) {
        $this->codigo = $codigo;
        $this->modelo = $modelo;
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->formadepagamento = $formadepagamento;
        $this->servicoadd = $servicoadd;
        $this->comissao = $comissao;
        $this->desconto = $desconto;
        $this->valortotal = $valortotal;
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

    public function getCliente()
    {
        return $this->cliente;
    }
    public function getVendedor()
    {
        return $this->vendedor;
    }

    public function getFormadepagamento()
    {
        return $this->formadepagamento;
    }

    public function getServicoadd()
    {
        return $this->servicoadd;
    }
    public function getComissao()
    {
        return $this->comissao;
    }

    public function getDesconto()
    {
        return $this->desconto;
    }

    public function getValortotal()
    {
        return $this->valortotal;
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

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;
    }

    public function setFormadepagamento($formadepagamento)
    {
        $this->formadepagamento = $formadepagamento;
    }

    public function setServicoadd($servicoadd)
    {
        $this->servicoadd = $servicoadd;
    }

    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }

    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    public function setValortotal($valortotal)
    {
        $this->valortotal = $valortotal;
    }

    public function setChassi($chassi)
    {
        $this->chassi = $chassi;
    }
}
?>