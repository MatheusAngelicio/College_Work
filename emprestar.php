<?php

if(!empty($_GET['id'])){
    
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM itens WHERE id = $id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        // Se achar o id na consulta
        $user_data = mysqli_fetch_assoc($result);

        $sqlUpdate = "UPDATE itens 
        SET estoque= estoque - 1
        WHERE id=$id";
        $result = $conexao->query($sqlUpdate);
        print_r($result);

    } 

    // Depois de atualizar o campo estoque eu atualizo a pagina
    header('Location: itens.php');


} else {
    header('Location: itens.php');
}
?>