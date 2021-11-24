<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['updateItens']))
    // Se existir a variavel eu atualizo os dados

    {
        $id = $_POST['id'];
        $produto = $_POST['produto'];
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $estoque = $_POST['estoque'];
        
        $sqlUpdateItens = "UPDATE itens 
        SET produto='$produto',descricao='$descricao',categoria='$categoria',estoque='$estoque'
        WHERE id=$id";
        $result = $conexao->query($sqlUpdateItens);
        print_r($result);
    }
    // Se nao existir eu mando o usuario para sistema.php
    header('Location: itens.php');

?>