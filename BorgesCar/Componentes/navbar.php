<nav class="navbar navbar-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand logo-p" href="principal.php">
        <img src="../Imagens/logo p-2.png" width="120%">
    </a>
    <a class="nav-link" style="cursor: pointer;" data-toggle="modal" data-target="#ModalSair">
        <div class="text-white d-flex justify-content-end">
            <img class="pl-1" src="../Imagens/sair.png" width="20%">
            <h5 class="pl-1">Sair</h5>
        </div>
    </a>
</nav>

<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="ModalSair" tabindex="-1" role="dialog"
    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header mx-auto">
                <h5 class="modal-title" id="TituloModalCentralizado">Deseja Mesmo Sair?</h5>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Não</button>
                <a href="logout.php" class="btn btn-danger2 text-white btn-lg">Sim</a>
            </div>
        </div>
    </div>
</div>