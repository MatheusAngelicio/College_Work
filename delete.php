<?php
    if(!empty($_GET['id'])){
        // Incluindo conexao com banco de dados
        include_once('config.php');

        // Atribuindo a variavel id o id que vem da URL
        $id = $_GET['id'];
    
        // Verifica se esse id existe no meu banco de dados
        $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";
    
        $result = $conexao->query($sqlSelect);
    
        // Se result foir maior que 0, existe o registro e eles esta apto para ser deletado
        if($result->num_rows > 0){
            // Se achar o id na consulta
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    header('Location: sistema.php');
?>