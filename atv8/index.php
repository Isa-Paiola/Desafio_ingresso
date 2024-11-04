<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio final</title>
</head>
<body>
    <div id="fundo">

        <form method="POST">
            <h1>Compre seu ingresso!</h1>
            <p>Nome:</p>
            <input type="text" name="nome" require>
            <br>
            <p>Idade:</p>
            <input type="number" name="number"  require>
            <br>
            <p>Tipo de ingresso:</p>
            <select name="ingresso" >
                <option value="R$100,00">VIP</option>
                <option value="R$50,00">Regular</option>
                <option value="R$20,00">Básico</option>
            </select>
            <br>
            <br>
            <button type="submit">Enviar</button>

            <?php

                if ($_SERVER['REQUEST_METHOD']== 'POST'){
                $nome = $_POST['nome'];
                $ingresso = $_POST['ingresso'];

                echo "<p>Bem vindo(a), $nome!</p>";
                }

                if (isset($_POST['number'])){
                    $idade = $_POST['number'];
    
                if($idade <18){
                echo "<p>O valor do seu ingresso VIP é $ingresso </p>";
                } else{
                echo "<p> Ingresso não permitido para menores de idade </p>";
                 }
        
                 }    
            ?>
        </form>
    </div>
    
    
</body>
</html>