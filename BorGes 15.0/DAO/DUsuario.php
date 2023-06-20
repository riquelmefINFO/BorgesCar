<?php

class DUsuario
{
    public static function salvarUsuario(
        $typeuser,
        $nome,
        $email,
        $senha,
        $cpf,
        $rg,
        $endereco
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tb_usuario(
            usu_codigo,
            usu_typeuser,
            usu_nome,
            usu_email,
            usu_senha,
            usu_cpf,
            usu_rg,
            usu_endereco
            ) VALUES (NULL, ?, ?);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $typeuser,
                    $nome,
                    $email,
                    $senha,
                    $cpf,
                    $rg,
                    $endereco
                )
            );
            header("location: ../view/index.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarUsuario()
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "SELECT * FROM tb_usuario;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchALL();
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarUsuario(
        $typeuser,
        $nome,
        $email,
        $senha,
        $cpf,
        $rg,
        $endereco
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tb_usuario set 
        usu_typeuser = ?,
        usu_nome = ?,
        usu_email = ?,
        usu_senha = ?,
        usu_cpf = ?,
        usu_rg = ?,
        usu_endereco = ?,
        where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $typeuser,
                    $nome,
                    $email,
                    $senha,
                    $cpf,
                    $rg,
                    $endereco,
                    $codigo
                )
            );
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function excluirUsuario($codigo)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "DELETE FROM tb_usuario where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($codigo));
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}