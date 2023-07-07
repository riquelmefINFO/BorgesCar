<?php

function btn_editar_excluir($href1, $href2, $codigo)
{
    $dados = "
    <td>
    <a href='$href1'>
        <input type='button' value='Editar' class='btn btn-danger text-white form-control'>
    </a>
</td>
<td>
    <a>
        <!-- Botão para acionar modal -->
        <input value='Excluir' type='button' class='btn btn-danger2 text-white form-control' data-toggle='modal' data-target='#ModalExcluir$codigo'>
    </a>
</td>
<!-- Modal -->
<div class='modal' fade id='ModalExcluir$codigo' tabindex='-1' role='dialog'
    aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title mx-auto' id='TituloModalCentralizado'>Deseja mesmo excluir?</h5>
            </div>
            <div class='modal-footer mx-auto'>
                <button type='button' class='btn btn-secondary btn-lg' data-dismiss='modal'>Não</button>
                <a href='$href2'>
                    <button value='Excluir' type='button' class='btn btn-danger btn-lg'>
                        Sim
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
";

return $dados;

}
?>