<?php

include "../Controller/CUsuario.php";
$listaUsuario = CUsuario::retornarUsuario();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
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
                            <img src="../Imagens/func b.png" width="4%">
                            Cadastrar Funcionário
                        </h1>

                        <div class="container shadow p-3 mb-5 bg-white rounded w-auto">
                            <form action="../Controller/rotas.php?acao=salvar&tipo=usuario" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="codigo">Código</label>
                                        <input class="form-control" type="number" id="codigo" name="codigo" readonly
                                            placeholder="Código"
                                            value="<?php echo filter_input(INPUT_GET, "codigo") ?>">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                                            value="<?php echo filter_input(INPUT_GET, "nome") ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="funcao">Função</label>
                                        <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Função"
                                            value="<?php echo filter_input(INPUT_GET, "funcao") ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email" value="<?php echo filter_input(INPUT_GET, "email") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="username">Usuário</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Usuário" value="<?php echo filter_input(INPUT_GET, "username") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password">Senha</label>
                                        <input type="text" class="form-control" id="password" name="password"
                                            placeholder="Senha" value="<?php echo filter_input(INPUT_GET, "password") ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="Telefone">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                            placeholder="telefone" value="<?php echo filter_input(INPUT_GET, "telefone") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF"
                                            value="<?php echo filter_input(INPUT_GET, "cpf") ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="rg">RG</label>
                                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG"
                                            value="<?php echo filter_input(INPUT_GET, "rg") ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco"
                                        placeholder="Rua dos Bobos, nº 0"
                                        value="<?php echo filter_input(INPUT_GET, "endereco") ?>">
                                </div>
                                <div style="width: 90%;" class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <a>
                                                <input type="submit" class="btn btn-danger btn-lg w-100" name="salvar"
                                                    value="Salvar">
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="..\View\funcionario.php">
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
                                Funcionários</h1>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                    <table id="clientes" class="table table-striped" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm">Código</th>
                                                <th class="th-sm">Nome</th>
                                                <th class="th-sm">Função</th>
                                                <th class="th-sm">Email</th>
                                                <th class="th-sm">Usuário</th>
                                                <th class="th-sm">Senha</th>
                                                <th class="th-sm">Telefone</th>
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

                                            foreach ($listaUsuario as $usuario) {
                                                echo "
                                                <tr>
                                                    <td>
                                                    " . $usuario['usu_codigo'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_nome'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_funcao'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_email'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_username'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_password'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_telefone'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_cpf'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_rg'] . "
                                                    </td>
                                                    <td>
                                                    " . $usuario['usu_endereco'] . "
                                                    </td>

                                                    " . btn_editar_excluir(
                                                    'funcionario.php?codigo=' . $usuario['usu_codigo'] . '&nome=' . $usuario['usu_nome'] . '&funcao=' . $usuario['usu_funcao'] . '&email=' . $usuario['usu_email'] . '&username=' . $usuario['usu_username'] . '&password=' . $usuario['usu_password'] . '&telefone=' . $usuario['usu_telefone'] . '&cpf=' . $usuario['usu_cpf'] . '&rg=' . $usuario['usu_rg'] . '&endereco=' . $usuario['usu_endereco'] . '',
                                                    '../Controller/rotas.php?acao=excluir&tipo=usuario&codigo=' . $usuario['usu_codigo'] . '',
                                                    '' . $usuario['usu_codigo'] . ''
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