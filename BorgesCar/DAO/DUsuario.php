<?php

class DUsuario
{
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
    public static function salvarUsuario(
        $nome,
        $funcao,
        $email,
        $username,
        $password,
        $telefone,
        $cpf,
        $rg,
        $endereco
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tb_usuario(
            usu_codigo,
            usu_nome,
            usu_funcao,
            usu_email,
            usu_username,
            usu_password,
            usu_telefone,
            usu_cpf,
            usu_rg,
            usu_endereco
            ) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $nome,
                    $funcao,
                    $email,
                    $username,
                    $password,
                    $telefone,
                    $cpf,
                    $rg,
                    $endereco
                )
            );
            header("location: ../View/funcionario.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarUsuario(
        $codigo,
        $nome,
        $funcao,
        $email,
        $username,
        $password,
        $telefone,
        $cpf,
        $rg,
        $endereco
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tb_usuario set 
        usu_nome = ?,
        usu_funcao = ?,
        usu_email = ?,
        usu_username = ?,
        usu_password = ?,
        usu_telefone = ?,
        usu_cpf = ?,
        usu_rg = ?,
        usu_endereco = ?
        where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $nome,
                    $funcao,
                    $email,
                    $username,
                    $password,
                    $telefone,
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