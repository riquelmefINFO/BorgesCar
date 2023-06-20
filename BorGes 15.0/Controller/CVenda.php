<?php

include "../Model/MVenda.php";
include "../DAO/DVenda.php";

class CVenda
{
    public static function salvarVenda($dadosVenda)
    {
        $venda = new MVenda(
            $dadosVenda['codigo'],
            $dadosVenda['modelo'],
            $dadosVenda['cliente'],
            $dadosVenda['formadepagamento'],
            $dadosVenda['servicoadd'],
            $dadosVenda['desconto'],
            $dadosVenda['valortotal'],
            $dadosVenda['chassi']
        );
        DVenda::salvarVenda(
            $venda->getModelo(),
            $venda->getCliente(),
            $venda->getFormadepagamento(),
            $venda->getServicoadd(),
            $venda->getDesconto(),
            $venda->getValortotal(),
            $venda->getChassi()
        );
    }

    public static function retornarVenda()
    {
        $venda = DVenda::carregarVenda();
        return $venda;
    }

    public static function editarVenda($dadosVenda)
    {
        $venda = new MVenda(
            $dadosVenda['codigo'],
            $dadosVenda['modelo'],
            $dadosVenda['cliente'],
            $dadosVenda['formadepagamento'],
            $dadosVenda['servicoadd'],
            $dadosVenda['desconto'],
            $dadosVenda['valortotal'],
            $dadosVenda['chassi']
        );
        DVenda::editarVenda(
            $venda->getModelo(),
            $venda->getCliente(),
            $venda->getFormadepagamento(),
            $venda->getServicoadd(),
            $venda->getDesconto(),
            $venda->getValortotal(),
            $venda->getChassi()
        );
        $venda = null;
        header("location: ../view/index.php");
    }

    public static function excluirVenda($codigo)
    {
        DVenda::excluirVenda($codigo);
        header("location: ../view/index.php");
    }
}