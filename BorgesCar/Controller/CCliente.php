<?php

include "../Model/MCliente.php";
include "../DAO/DCliente.php";

class CCliente
{

    public static function retornarCliente()
    {
        $cliente = DCliente::carregarCliente();
        return $cliente;
    }

    public static function salvarCliente($dadosCliente)
    {
        $cliente = new MCliente(
            $dadosCliente['codigo'],
            $dadosCliente['nome'],
            $dadosCliente['email'],
            $dadosCliente['senha'],
            $dadosCliente['cpf'],
            $dadosCliente['rg'],
            $dadosCliente['endereco']
        );
        DCliente::salvarCliente(
            $cliente->getNome(),
            $cliente->getEmail(),
            $cliente->getSenha(),
            $cliente->getCpf(),
            $cliente->getRg(),
            $cliente->getEndereco()

        );
    }

    public static function editarCliente($dadosCliente)
    {
        $cliente = new MCliente(
            $dadosCliente['codigo'],
            $dadosCliente['nome'],
            $dadosCliente['email'],
            $dadosCliente['senha'],
            $dadosCliente['cpf'],
            $dadosCliente['rg'],
            $dadosCliente['endereco']
        );
        DCliente::editarCliente(
            $cliente->getCodigo(),
            $cliente->getNome(),
            $cliente->getEmail(),
            $cliente->getSenha(),
            $cliente->getCpf(),
            $cliente->getRg(),
            $cliente->getEndereco()
        );

        $cliente = null;

        header("location: ../View/cliente.php");
    }

    public static function excluirCliente($codigo)
    {
        DCliente::excluirCliente($codigo);
        header("location: ../View/cliente.php");
    }
}