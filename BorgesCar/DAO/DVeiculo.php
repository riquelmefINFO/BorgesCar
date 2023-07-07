<?php

class DVeiculo
{

    public static function carregarVeiculo()
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "SELECT * FROM tb_veiculo;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchALL();
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
    public static function salvarVeiculo(
        $modelo,
        $fabricante,
        $cor,
        $ano,
        $preco,
        $chassi
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tb_veiculo(
            vei_codigo,
            vei_modelo,
            vei_fabricante,
            vei_cor,
            vei_ano,
            vei_preco,
            vei_chassi
            ) VALUES (NULL, ?, ?, ?, ?, ?, ?);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $modelo,
                    $fabricante,
                    $cor,
                    $ano,
                    $preco,
                    $chassi
                )
            );
            header("location: ../View/veiculo.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarVeiculo(
        $codigo,
        $modelo,
        $fabricante,
        $cor,
        $ano,
        $preco,
        $chassi
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tb_veiculo set 
        vei_modelo = ?,
        vei_fabricante = ?,
        vei_cor = ?,
        vei_ano = ?,
        vei_preco = ?,
        vei_chassi = ?
        where vei_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(
                array(
                    $modelo,
                    $fabricante,
                    $cor,
                    $ano,
                    $preco,
                    $chassi,
                    $codigo
                )
            );
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function excluirVeiculo($codigo)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "DELETE FROM tb_veiculo where vei_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($codigo));
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}