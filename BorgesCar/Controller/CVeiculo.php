<?php

include "../Model/MVeiculo.php";
include "../DAO/DVeiculo.php";

class CVeiculo
{
    
    public static function retornarVeiculo()
    {
        $veiculo = DVeiculo::carregarVeiculo();
        return $veiculo;
    }

    public static function salvarVeiculo($dadosVeiculo)
    {
        $veiculo = new MVeiculo(
            $dadosVeiculo['codigo'],
            $dadosVeiculo['modelo'],
            $dadosVeiculo['fabricante'],
            $dadosVeiculo['cor'],
            $dadosVeiculo['ano'],
            $dadosVeiculo['preco'],
            $dadosVeiculo['chassi']
        );
        DVeiculo::salvarVeiculo(
            $veiculo->getModelo(),
            $veiculo->getFabricante(),
            $veiculo->getCor(),
            $veiculo->getAno(),
            $veiculo->getPreco(),
            $veiculo->getChassi()
        );
    }

    public static function editarVeiculo($dadosVeiculo)
    {
        $veiculo = new MVeiculo(
            $dadosVeiculo['codigo'],
            $dadosVeiculo['modelo'],
            $dadosVeiculo['fabricante'],
            $dadosVeiculo['cor'],
            $dadosVeiculo['ano'],
            $dadosVeiculo['preco'],
            $dadosVeiculo['chassi']
        );
        DVeiculo::editarVeiculo(
            $veiculo->getcodigo(),
            $veiculo->getModelo(),
            $veiculo->getFabricante(),
            $veiculo->getCor(),
            $veiculo->getAno(),
            $veiculo->getPreco(),
            $veiculo->getChassi()
        );
        
        $veiculo = null;
        header("location: ../View/veiculo.php");
    }

    public static function excluirVeiculo($codigo)
    {
        DVeiculo::excluirVeiculo($codigo);
        header("location: ../View/veiculo.php");
    }
}