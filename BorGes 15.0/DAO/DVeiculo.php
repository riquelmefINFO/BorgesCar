<?php

class DVeiculo
{
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
            usu_codigo,
            usu_modelo,
            usu_fabricante,
            usu_cor,
            usu_ano,
            usu_preco,
            usu_chassi
            ) VALUES (NULL, ?, ?);";

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
            header("location: ../view/index.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

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

    public static function editarVeiculo(
        $modelo,
        $fabricante,
        $cor,
        $ano,
        $preco,
        $chassi
    ) {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tb_usuario set 
        usu_modelo = ?,
        usu_fabricante = ?,
        usu_cor = ?,
        usu_ano = ?,
        usu_preco = ?,
        usu_chassi = ?,
        where usu_codigo = ?";
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

        $sql = "DELETE FROM tb_veiculo where usu_codigo = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($codigo));
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}