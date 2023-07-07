<?php

class DCliente
{

    public static function carregarCliente()
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "SELECT * FROM tb_cliente;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchALL();
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
    public static function salvarCliente(
        $nome,
        $email,
        $senha,
        $cpf,
        $rg,
        $endereco
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tb_cliente(
            cli_codigo,
            cli_nome,
            cli_email,
            cli_senha,
            cli_cpf,
            cli_rg,
            cli_endereco
            ) VALUES (NULL, ?, ?, ?, ?, ?, ?);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $nome,
                    $email,
                    $senha,
                    $cpf,
                    $rg,
                    $endereco
                )
            );
            header("location: ../View/cliente.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarCliente(
        $codigo,
        $nome,
        $email,
        $senha,
        $cpf,
        $rg,
        $endereco
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tb_cliente set 
        cli_nome = ?,
        cli_email = ?,
        cli_senha = ?,
        cli_cpf = ?,
        cli_rg = ?,
        cli_endereco = ?
        where cli_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
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

    public static function excluirCliente($codigo)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "DELETE FROM tb_cliente where cli_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($codigo));
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}