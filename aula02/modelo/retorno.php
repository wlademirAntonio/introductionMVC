<?php

    $nome = $_REQUEST['nome'];
    $nasc = $_REQUEST['nasc'];
    $bebida = $_REQUEST['bebida'];

    if(empty($nome)){

        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(m) campo(s) obrigatório(s) não preenchido(s).'
        );

    } else {

        if($idade >= 18) {
            $dados = array(
                "mensagem" => 'Ola, '.$nome.', sabemos que sua bebida favorita e '.$bebida.' e voce não pode ingerir bebida alcoolica.' 
            );
        }
        else {
            $dados = array(
                "mensagem" => 'Ola, '.$nome.', sabemos que sua bebida favorita e '.$bebida.' e voce pode ingerir bebida alcoolica.' 
            );
        }

    }

    echo json_encode($dados);