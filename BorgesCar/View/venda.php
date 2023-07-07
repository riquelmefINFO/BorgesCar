<?php

include "../Controller/CVenda.php";
$listaVenda = CVenda::retornarVenda();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Imagens/logo.png">
</head>

<body>

    <?php
    include "../Controller/Auth.php"; // Perform session validation
    include "../componentes/navbar.php"
        ?>

    <div class="container mw-100">
        <div class="row" style="height: 100vh;">

            <?php
            include "../componentes/btn_barra.php"
                ?>

            <div class="col-sm-10 m-0 p-1 bg-light" id="myGroup">
                <div class="container">
                    <h1 style="font-size: 300%; text-align: center;" class="font-weight-bold">
                        <img src="../Imagens/vendas b.png" width="4%">
                        Vendas
                    </h1>
                    <div class="container shadow p-3 mb-5 bg-white rounded w-auto">
                        <form action="../Controller/rotas.php?acao=salvar&tipo=venda" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="codigo">Código</label>
                                    <input class="form-control" type="number" name="codigo" id="codigo" readonly
                                        placeholder="Código" value="<?php echo filter_input(INPUT_GET, "codigo") ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo"
                                        value="<?php echo filter_input(INPUT_GET, "modelo") ?>">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="cliente">Cliente</label>
                                    <input type="text" class="form-control" id="cliente" name="cliente"
                                        placeholder="Cliente" value="<?php echo filter_input(INPUT_GET, "cliente") ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="vendedor">Vendedor</label>
                                    <input type="text" class="form-control" id="vendedor" name="vendedor"
                                        placeholder="Vendedor"
                                        value="<?php echo filter_input(INPUT_GET, "vendedor") ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="formadepagamento">Forma de Pagamento</label>
                                    <input type="text" class="form-control" id="formadepagamento"
                                        name="formadepagamento" placeholder="Forma de Pagamento"
                                        value="<?php echo filter_input(INPUT_GET, "formadepagamento") ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="servicoadd">Serviços Adicionais</label>
                                    <input type="text" class="form-control" id="servicoadd" name="servicoadd"
                                        placeholder="Serviços Adicionais"
                                        value="<?php echo filter_input(INPUT_GET, "servicoadd") ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="comissao">Comissão</label>
                                    <input type="number" class="form-control" id="comissao" name="comissao"
                                        placeholder="Comissão"
                                        value="<?php echo filter_input(INPUT_GET, "comissao") ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="desconto">Desconto</label>
                                    <input type="number" class="form-control" id="desconto" name="desconto"
                                        placeholder="Desconto"
                                        value="<?php echo filter_input(INPUT_GET, "desconto") ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="valortotal">Valor Total</label>
                                    <input type="number" class="form-control" id="valortotal" name="valortotal"
                                        placeholder="Valor Total"
                                        value="<?php echo filter_input(INPUT_GET, "valortotal") ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="chassi">Chassi</label>
                                    <input type="text" class="form-control" id="chassi" name="chassi"
                                        placeholder="Chassi" value="<?php echo filter_input(INPUT_GET, "chassi") ?>">
                                </div>
                            </div>
                            <div style="width: 90%;" class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="submit" class="btn btn-danger btn-lg w-100" name="salvar"
                                            value="Salvar">
                                    </div>
                                    <div class="col-6">
                                        <a href="..\View\venda.php">
                                            <input type="button" class="btn btn-danger btn-lg btn-danger2" name="Limpar"
                                                value="Limpar">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div style="color: black; background-color: white; border-radius: 5%;"
                        class="container shadow p-3 mb-5 bg-white rounded w-auto">
                        <h1 style="font-size: 300%; text-align: center;" class="font-weight-bold">
                            Vendas</h1>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="clientes" class="table table-striped" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm">Código</th>
                                                <th class="th-sm">Modelo</th>
                                                <th class="th-sm">Cliente</th>
                                                <th class="th-sm">Vendedor</th>
                                                <th class="th-sm">Forma de pagamento</th>
                                                <th class="th-sm">Serviços Adicionais</th>
                                                <th class="th-sm">Comissão</th>
                                                <th class="th-sm">Desconto</th>
                                                <th class="th-sm">Valor Total</th>
                                                <th class="th-sm">Chassi</th>
                                                <th>Editar</th>
                                                <th>Excluir</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            include "../Componentes/btn_editar_excluir.php";

                                            foreach ($listaVenda as $venda) {
                                                echo "
                                                            <tr>
                                                                <td>
                                                                " . $venda['vnd_codigo'] . "
                                                                </td>
                                                                <td>
                                                                " . $venda['vnd_modelo'] . "
                                                                </td>
                                                                <td>
                                                                " . $venda['vnd_cliente'] . "
                                                                </td>
                                                                <td>
                                                                " . $venda['vnd_vendedor'] . "
                                                                </td>
                                                                <td>
                                                                " . $venda['vnd_formadepagamento'] . "
                                                                </td>
                                                                <td>
                                                                " . $venda['vnd_servicoadd'] . "
                                                                </td>
                                                                <td>R$
                                                                " . $venda['vnd_comissao'] . "
                                                                </td>
                                                                <td>R$
                                                                " . $venda['vnd_desconto'] . "
                                                                </td>
                                                                <td>R$
                                                                " . $venda['vnd_valortotal'] . "
                                                                </td>
                                                                <td>
                                                                " . $venda['vnd_chassi'] . "
                                                                </td>
                                                                
                                                                " . btn_editar_excluir(
                                                    'venda.php?codigo=' . $venda['vnd_codigo'] . '&modelo=' . $venda['vnd_modelo'] . '&cliente=' . $venda['vnd_cliente'] . '&vendedor=' . $venda['vnd_vendedor'] . '&formadepagamento=' . $venda['vnd_formadepagamento'] . '&comissao=' . $venda['vnd_comissao'] . '&servicoadd=' . $venda['vnd_servicoadd'] . '&desconto=' . $venda['vnd_desconto'] . '&valortotal=' . $venda['vnd_valortotal'] . '&chassi=' . $venda['vnd_chassi'] . '',
                                                    '../Controller/rotas.php?acao=excluir&tipo=venda&codigo=' . $venda['vnd_codigo'] . '',
                                                    '' . $venda['vnd_codigo'] . ''
                                                ) . "
                                                        </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../componentes/script.php" ?>

</body>

</html>