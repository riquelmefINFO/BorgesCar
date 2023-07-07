<?php

class DVenda
{

    public static function carregarVenda()
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "SELECT * FROM tb_venda;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchALL();
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
    public static function salvarVenda(
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
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tb_venda(
            vnd_codigo,
            vnd_modelo,
            vnd_cliente,
            vnd_vendedor,
            vnd_formadepagamento,
            vnd_servicoadd,
            vnd_comissao,
            vnd_desconto,
            vnd_valortotal,
            vnd_chassi
            ) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $modelo,
                    $cliente,
                    $vendedor,
                    $formadepagamento,
                    $servicoadd,
                    $comissao,
                    $desconto,
                    $valortotal,
                    $chassi
                )
            );
            header("location: ../View/venda.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarVenda(
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
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tb_venda set 
        vnd_modelo = ?,
        vnd_cliente = ?,
        vnd_vendedor = ?,
        vnd_formadepagamento = ?,
        vnd_servicoadd = ?,
        vnd_comissao = ?,
        vnd_desconto = ?,
        vnd_valortotal = ?,
        vnd_chassi  = ?
        where vnd_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $modelo,
                    $cliente,
                    $vendedor,
                    $formadepagamento,
                    $servicoadd,
                    $comissao,
                    $desconto,
                    $valortotal,
                    $chassi,
                    $codigo
                )
            );
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function excluirVenda($codigo)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "DELETE FROM tb_venda where vnd_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($codigo));
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}