<?php

class DVenda
{
    public static function salvarVenda(
        $modelo,
        $cliente,
        $formadepagamento,
        $servicoadd,
        $desconto,
        $valortotal,
        $chassi
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tb_venda(
            usu_codigo,
            usu_modelo,
            usu_cliente,
            usu_formadepagamento,
            usu_servicoadd,
            usu_desconto,
            usu_valortotal,
            usu_chassi
            ) VALUES (NULL, ?, ?);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $modelo,
                    $cliente,
                    $formadepagamento,
                    $servicoadd,
                    $desconto,
                    $valortotal,
                    $chassi
                )
            );
            header("location: ../view/index.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

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

    public static function editarVenda(
        $modelo,
        $cliente,
        $formadepagamento,
        $servicoadd,
        $desconto,
        $valortotal,
        $chassi
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tb_usuario set 
        usu_modelo = ?,
        usu_cliente = ?,
        usu_formadepagamento = ?,
        usu_servicoadd = ?,
        usu_desconto = ?,
        usu_valortotal = ?,
        usu_chassi  = ?,
        where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $modelo,
                    $cliente,
                    $formadepagamento,
                    $servicoadd,
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

        $sql = "DELETE FROM tb_venda where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($codigo));
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}