<?php

include "../Controller/CVeiculo.php";
$listaVeiculo = CVeiculo::retornarVeiculo();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiculos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../CSS/style.css">
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
                    <div class="container_form">
                        <h1 style="font-size: 300%; text-align: center;" class="font-weight-bold">
                            <img src="../Imagens/veiculo b.png" width="4%">
                            Cadastrar Veículos
                        </h1>

                        <div class="container shadow p-3 mb-5 bg-white rounded w-auto">
                            <form action="../Controller/rotas.php?acao=salvar&tipo=veiculo" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="codigo">Código</label>
                                        <input type="number" class="form-control" id="codigo" readonly name="codigo"
                                            placeholder="Código"
                                            value="<?php echo filter_input(INPUT_GET, "codigo") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="modelo">Modelo</label>
                                        <input type="text" class="form-control" id="modelo" name="modelo"
                                            placeholder="Modelo"
                                            value="<?php echo filter_input(INPUT_GET, "modelo") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fabricante">Fabricante</label>
                                        <input type="text" class="form-control" id="fabricante" name="fabricante"
                                            placeholder="Modelo"
                                            value="<?php echo filter_input(INPUT_GET, "fabricante") ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="cor">Cor</label>
                                        <input type="color" class="form-control" id="cor" name="cor" placeholder="Cor"
                                            value="<?php echo filter_input(INPUT_GET, "cor") ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="ano">Ano</label>
                                        <input type="number" class="form-control" id="ano" name="ano" placeholder="Ano"
                                            value="<?php echo filter_input(INPUT_GET, "ano") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="preco">preço</label>
                                        <input type="number" class="form-control" id="preco" name="preco"
                                            placeholder="Ano" value="<?php echo filter_input(INPUT_GET, "preco") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="chassi">Chassi</label>
                                        <input type="text" class="form-control" id="chassi" name="chassi"
                                            placeholder="Chassi"
                                            value="<?php echo filter_input(INPUT_GET, "chassi") ?>">
                                    </div>
                                </div>
                                <div style="width: 90%;" class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="submit" class="btn btn-danger btn-lg w-100" name="salvar"
                                                value="Salvar">
                                        </div>
                                        <div class="col-6">
                                            <a href="..\View\veiculo.php">
                                                <input type="button" class="btn btn-danger btn-lg btn-danger2"
                                                    name="Limpar" value="Limpar">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div style="color: black; background-color: white; border-radius: 5%;"
                            class="container shadow p-3 mb-5 bg-white rounded w-auto">
                            <h1 style="font-size: 300%; text-align: center;" class="font-weight-bold">
                                Veículos</h1>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="clientes" class="table table-striped" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">Código</th>
                                                    <th class="th-sm">Modelo</th>
                                                    <th class="th-sm">Fabricante</th>
                                                    <th class="th-sm">Cor</th>
                                                    <th class="th-sm">Ano</th>
                                                    <th class="th-sm">Preço</th>
                                                    <th class="th-sm">Chassi</th>
                                                    <th>Editar</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                include "../Componentes/btn_editar_excluir.php";

                                                foreach ($listaVeiculo as $veiculo) {
                                                    echo "
                                                                <tr>
                                                                    <td>
                                                                    " . $veiculo['vei_codigo'] . "
                                                                    </td>
                                                                    <td>
                                                                    " . $veiculo['vei_modelo'] . "
                                                                    </td>
                                                                    <td>
                                                                    " . $veiculo['vei_fabricante'] . "
                                                                    </td>
                                                                    <td>
                                                                    " . $veiculo['vei_cor'] . "
                                                                    </td>
                                                                    <td>
                                                                    " . $veiculo['vei_ano'] . "
                                                                    </td>
                                                                    <td>
                                                                    R$ 
                                                                    " . $veiculo['vei_preco'] . "
                                                                    </td>
                                                                    <td>
                                                                    " . $veiculo['vei_chassi'] . "
                                                                    </td>
                                                                    
                                                                    " . btn_editar_excluir(
                                                        'veiculo.php?codigo=' . $veiculo['vei_codigo'] . '&modelo=' . $veiculo['vei_modelo'] . '&fabricante=' . $veiculo['vei_fabricante'] . '&cor=' . $veiculo['vei_cor'] . '&ano=' . $veiculo['vei_ano'] . '&preco=' . $veiculo['vei_preco'] . '&chassi=' . $veiculo['vei_chassi'] . '',
                                                        '../Controller/rotas.php?acao=excluir&tipo=veiculo&codigo=' . $veiculo['vei_codigo'] . '',
                                                        '' . $veiculo['vei_codigo'] . ''
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
    </div>

    <?php include "../componentes/script.php" ?>

</body>

</html>