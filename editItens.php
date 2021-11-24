<?php

if(!empty($_GET['id'])){
    
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM itens WHERE id = $id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        // Se achar o id na consulta

        while($user_data = mysqli_fetch_assoc($result)){
            $produto = $user_data['produto'];
            $descricao = $user_data['descricao'];
            $categoria = $user_data['categoria'];
            $estoque = $user_data['estoque'];
        }
    

    } else {
        // Se nao achar
        header('Location: itens.php');
    }

} else {
    //header('Location: itens.php');
    print_r("Deu errado");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #updateItens{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #updateItens:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="itens.php">Voltar</a>
    <div class="box">
        <form action="saveEditItens.php" method="POST">
            <fieldset>
                <legend><b>Editar Item</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="produto" id="produto" class="inputUser" value="<?php echo $produto?>" required>
                    <label for="produto" class="labelInput">Produto</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" value="<?php echo $descricao?>" required>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="categoria" id="categoria" class="inputUser" value="<?php echo $categoria?>" required>
                    <label for="categoria" class="labelInput">Categoria</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="estoque" id="estoque" class="inputUser" value="<?php echo $estoque?>" required>
                    <label for="estoque" class="labelInput">Estoque</label>
                </div>
                <br><br>
                <!-- Enviar id escondido -->
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="updateItens" id="updateItens">
            </fieldset>
        </form>
    </div>
</body>
</html>