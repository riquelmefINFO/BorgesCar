<?php

include "../Model/MUsuario.php";
include "../DAO/DUsuario.php";

class CUsuario
{
    public static function salvarUsuario($dadosUsuario)
    {
        $usuario = new MUsuario(
            $dadosUsuario['codigo'],
            $dadosUsuario['typeuser'],
            $dadosUsuario['nome'],
            $dadosUsuario['email'],
            $dadosUsuario['senha'],
            $dadosUsuario['cpf'],
            $dadosUsuario['rg'],
            $dadosUsuario['endereco']
        );
        DUsuario::salvarUsuario(
            $usuario->getTypeuser(),
            $usuario->getNome(),
            $usuario->getEmail(),
            $usuario->getSenha(),
            $usuario->getCpf(),
            $usuario->getRg(),
            $usuario->getEndereco(),
        );
    }

    public static function retornarUsuario()
    {
        $usuario = DUsuario::carregarUsuario();
        return $usuario;
    }

    public static function editarUsuario($dadosUsuario)
    {
        $usuario = new MUsuario(
            $dadosUsuario['codigo'],
            $dadosUsuario['typeuser'],
            $dadosUsuario['nome'],
            $dadosUsuario['email'],
            $dadosUsuario['senha'],
            $dadosUsuario['cpf'],
            $dadosUsuario['rg'],
            $dadosUsuario['endereco']
        );
        DUsuario::editarUsuario(
            $usuario->getTypeuser(),
            $usuario->getNome(),
            $usuario->getEmail(),
            $usuario->getSenha(),
            $usuario->getCpf(),
            $usuario->getRg(),
            $usuario->getEndereco(),
        );
        $usuario = null;
        header("location: ../view/index.php");
    }

    public static function excluirUsuario($codigo)
    {
        DUsuario::excluirUsuario($codigo);
        header("location: ../view/index.php");
    }
}