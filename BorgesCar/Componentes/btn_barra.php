<?php

$user_id = $_SESSION['user_id'];

//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("localhost", "root", "");

//selecionando o banco de dados 
$db = mysqli_select_db($cx, "borgescar");

//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT `usu_nome`, `usu_funcao`, `usu_email`, `usu_telefone` FROM `tb_usuario` where `usu_codigo` = $user_id") or die(
    mysqli_error($cx) //caso haja um erro na consulta 
);

//pecorrendo os registros da consulta. 
while ($aux = mysqli_fetch_assoc($sql)) {
    $nome = $aux['usu_nome'];
    $funcao = $aux['usu_funcao'];
    $email = $aux['usu_email'];
    $telefone = $aux['usu_telefone'];

}

?>

<div class="col-sm-2 p-1 barra-p text-white" style="z-index: 1;">
    <div>
        <h3>
            <!-- Botão para acionar modal -->
            <a type="button" class="btn-barra row w-100 m-0" style="padding: .375rem 0.75rem; cursor: pointer;"
                data-toggle="modal" data-target="#ExemploModalCentralizado1">
                <div class="col-md-8 text-capitalize">
                    Olá
                    <?php echo $_SESSION['user_name']; ?>
                </div>
                <div class="col-md-4"><img src="../Imagens/usuario.png" width="50%"></div>
            </a>
        </h3>
    </div>

    <p>
        <a class="btn btn-barra text-left" href="principal.php">
            <img src="../Imagens/inicio.png" width="12%">
            Início
        </a>
    </p>

    <p>
        <a class="btn btn-barra text-left" href="funcionario.php">
            <img src="../Imagens/func.png" width="12%">
            Funcionários
        </a>
    </p>

    <p>
        <a class="btn btn-barra text-left" href="cliente.php">
            <img src="../Imagens/clientes.png" width="12%">
            Clientes
        </a>
    </p>

    <p>
        <a class="btn btn-barra text-left" href="veiculo.php">
            <img src="../Imagens/veiculo.png" width="12%" style="color: white;">
            Veículos
        </a>
    </p>

    <p>
        <a class="btn btn-barra text-left" href="venda.php">
            <img src="../Imagens/venda.png" width="12%">
            Venda
        </a>
    </p>

    <p>
        <a class="btn btn-barra text-left" href="sobre.php">
            <img src="../Imagens/sobre.png" width="12%">
            Sobre
        </a>
    </p>

</div>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado1" tabindex="-3" role="dialog"
    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">BorgesCar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">
                    <?php echo $nome; ?>
                </h5>
                Função:
                <?php echo $funcao; ?>
                <br>
                Email:
                <?php echo $email; ?>
                <br>
                Contato:
                <?php echo $telefone; ?>
            </div>
            <div class="modal-footer mx-auto">
                <a href="funcionario.php" type="button" class="btn btn-danger btn-lg">Editar Perfil</a>
                <a href="logout.php" type="button" class="btn btn-danger2 btn-lg text-white">Deslogar</a>
            </div>
        </div>
    </div>
</div>