<?php

include "CCliente.php";
include "CUsuario.php";
include "CVeiculo.php";
include "CVenda.php";


if (filter_input(INPUT_GET, "acao") == "salvar" & filter_input(INPUT_GET, "tipo") == "usuario") {
    if(filter_input(INPUT_POST, "codigo") != ""){
        CUsuario::editarUsuario($_POST);
    } else {
        CUsuario::salvarUsuario($_POST);
    }
}

//excluir Usuario
else if (filter_input(INPUT_GET, "acao") == "excluir" & filter_input(INPUT_GET, "tipo") == "usuario" & filter_input(INPUT_GET, "codigo") != 0) {
    CUsuario::excluirUsuario(filter_input(INPUT_GET, "codigo"));
}

//INICIO de Cliente
if (filter_input(INPUT_GET, "acao") == "salvar" & filter_input(INPUT_GET, "tipo") == "cliente") {
    if(filter_input(INPUT_POST, "codigo") != ""){
        CCliente::editarCliente($_POST);
    } else {
        CCliente::salvarCliente($_POST);
    }
}

else if (filter_input(INPUT_GET, "acao") == "excluir" & filter_input(INPUT_GET, "tipo") == "cliente" & filter_input(INPUT_GET, "codigo") != 0) {
    CCliente::excluirCliente(filter_input(INPUT_GET, "codigo"));
}//FIM de Cliente

if (filter_input(INPUT_GET, "acao") == "salvar" & filter_input(INPUT_GET, "tipo") == "veiculo") {
    if(filter_input(INPUT_POST, "codigo") != ""){
        CVeiculo::editarVeiculo($_POST);
    } else {
        CVeiculo::salvarVeiculo($_POST);
    }
}


//excluir veiculo
else if (filter_input(INPUT_GET, "acao") == "excluir" & filter_input(INPUT_GET, "tipo") == "veiculo" & filter_input(INPUT_GET, "codigo") != 0) {
    CVeiculo::excluirVeiculo(filter_input(INPUT_GET, "codigo"));
}

if (filter_input(INPUT_GET, "acao") == "salvar" & filter_input(INPUT_GET, "tipo") == "venda") {
    if(filter_input(INPUT_POST, "codigo") != ""){
        CVenda::editarVenda($_POST);
    } else {
        CVenda::salvarVenda($_POST);
    }
}

//excluir venda
else if (filter_input(INPUT_GET, "acao") == "excluir" & filter_input(INPUT_GET, "tipo") == "venda" & filter_input(INPUT_GET, "codigo") != 0) {
    CVenda::excluirVenda(filter_input(INPUT_GET, "codigo"));
}