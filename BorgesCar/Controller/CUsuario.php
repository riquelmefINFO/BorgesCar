<?php

include "../Model/MUsuario.php";
include "../DAO/DUsuario.php";

class CUsuario
{
    
    public static function retornarUsuario()
    {
        $usuario = DUsuario::carregarUsuario();
        return $usuario;
    }

    public static function salvarUsuario($dadosUsuario)
    {
        $usuario = new MUsuario(
            $dadosUsuario['codigo'],
            $dadosUsuario['nome'],
            $dadosUsuario['funcao'],
            $dadosUsuario['email'],
            $dadosUsuario['username'],
            $dadosUsuario['password'],
            $dadosUsuario['telefone'],
            $dadosUsuario['cpf'],
            $dadosUsuario['rg'],
            $dadosUsuario['endereco']
        );
        DUsuario::salvarUsuario(
            $usuario->getNome(),
            $usuario->getFuncao(),
            $usuario->getEmail(),
            $usuario->getUsername(),
            $usuario->getPassword(),
            $usuario->getTelefone(),
            $usuario->getCpf(),
            $usuario->getRg(),
            $usuario->getEndereco()
        );
    }

    public static function editarUsuario($dadosUsuario)
    {
        $usuario = new MUsuario(
            $dadosUsuario['codigo'],
            $dadosUsuario['nome'],
            $dadosUsuario['funcao'],
            $dadosUsuario['email'],
            $dadosUsuario['username'],
            $dadosUsuario['password'],
            $dadosUsuario['telefone'],
            $dadosUsuario['cpf'],
            $dadosUsuario['rg'],
            $dadosUsuario['endereco']
        );
        DUsuario::editarUsuario(
            $usuario->getCodigo(),
            $usuario->getNome(),
            $usuario->getFuncao(),
            $usuario->getEmail(),
            $usuario->getUsername(),
            $usuario->getPassword(),
            $usuario->getTelefone(),
            $usuario->getCpf(),
            $usuario->getRg(),
            $usuario->getEndereco()
        );
        
        $usuario = null;
        header("location: ../View/funcionario.php");
    }

    public static function excluirUsuario($codigo)
    {
        DUsuario::excluirUsuario($codigo);
        header("location: ../View/funcionario.php");
    }
}