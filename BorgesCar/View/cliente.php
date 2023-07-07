<?php

include "../Controller/CCliente.php";
$listaCliente = CCliente::retornarCliente();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
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
            include "../componentes/btn_barra.php";
            ?>

            <div class="col-sm-10 m-0 p-1 bg-light" id="myGroup">
                <div class="container">
                    <div class="container_form">
                        <h1 style="font-size: 300%; text-align: center;" class="font-weight-bold">
                            <img src="../Imagens/clientes b.png" width="4%">
                            Cadastrar Clientes
                        </h1>

                        <div class="container shadow p-3 mb-5 bg-white rounded w-auto">
                            <form action="../Controller/rotas.php?acao=salvar&tipo=cliente" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="codigo">Código</label>
                                        <input class="form-control" type="number" id="codigo" name="codigo" readonly
                                            placeholder="Código"
                                            value="<?php echo filter_input(INPUT_GET, "codigo") ?>">
                                    </div>
                                    <div class="form-group col-md-11">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                                            value="<?php echo filter_input(INPUT_GET, "nome") ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email" value="<?php echo filter_input(INPUT_GET, "email") ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="senha">Senha</label>
                                        <input type="text" class="form-control" id="senha" name="senha"
                                            placeholder="Senha" value="<?php echo filter_input(INPUT_GET, "senha") ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="cpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF"
                                            value="<?php echo filter_input(INPUT_GET, "cpf") ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="rg">RG</label>
                                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG"
                                            value="<?php echo filter_input(INPUT_GET, "rg") ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco"
                                        placeholder="Rua dos Bobos, nº 0" placeholder="RG"
                                        value="<?php echo filter_input(INPUT_GET, "endereco") ?>">
                                </div>
                                <div style="width: 90%;" class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="submit" class="btn btn-danger btn-lg w-100" name="salvar"
                                                value="Salvar">
                                        </div>
                                        <div class="col-6">
                                            <a href="..\View\cliente.php">
                                                <input type="button" class="btn btn-danger btn-danger2 btn-lg"
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
                                Clientes</h1>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="clientes" class="table table-striped" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">Código</th>
                                                    <th class="th-sm">Nome</th>
                                                    <th class="th-sm">Email</th>
                                                    <th class="th-sm">Senha</th>
                                                    <th class="th-sm">CPF</th>
                                                    <th class="th-sm">RG</th>
                                                    <th class="th-sm">Endereço</th>
                                                    <th>Editar</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                include "../Componentes/btn_editar_excluir.php";

                                                foreach ($listaCliente as $cliente) {
                                                    echo "
                                                        <tr>
                                                            <td>
                                                            " . $cliente['cli_codigo'] . "
                                                            </td>
                                                            <td>
                                                            " . $cliente['cli_nome'] . "
                                                            </td>
                                                            <td>
                                                            " . $cliente['cli_email'] . "
                                                            </td>
                                                            <td>
                                                            " . $cliente['cli_senha'] . "
                                                            </td>
                                                            <td>
                                                            " . $cliente['cli_cpf'] . "
                                                            </td>
                                                            <td>
                                                            " . $cliente['cli_rg'] . "
                                                            </td>
                                                            <td>
                                                            " . $cliente['cli_endereco'] . "
                                                            </td>

                                                            " . btn_editar_excluir(
                                                        'cliente.php?codigo=' . $cliente['cli_codigo'] . '&nome=' . $cliente['cli_nome'] . '&email=' . $cliente['cli_email'] . '&senha=' . $cliente['cli_senha'] . '&cpf=' . $cliente['cli_cpf'] . '&rg=' . $cliente['cli_rg'] . '&endereco=' . $cliente['cli_endereco'] . '',
                                                        '../Controller/rotas.php?acao=excluir&tipo=cliente&codigo=' . $cliente['cli_codigo'] . '',
                                                        '' . $cliente['cli_codigo'] . ''
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