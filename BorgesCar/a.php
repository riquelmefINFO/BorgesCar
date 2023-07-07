" . btn_editar_excluir(
    'cliente.php?codigo=' . $cliente['cli_codigo'] . '&nome=' . $cliente['cli_nome'] . '&email=' . $cliente['cli_email'] . '&senha=' . $cliente['cli_senha'] . '&cpf=' . $cliente['cli_cpf'] . '&rg=' . $cliente['cli_rg'] . '&endereco=' . $cliente['cli_endereco'] . '',
    '../Controller/rotas.php?acao=excluir&tipo=cliente&codigo=' . $cliente['cli_codigo'] . ''
) . "