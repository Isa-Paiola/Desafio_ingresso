<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio final</title>
</head>
<body>
    <div class="fundo">

        <form method="POST">
            <h1>Compre seu ingresso!</h1>
            <p>Nome:</p>
            <input type="text" name="nome" required>
            <br>
            <p>Idade:</p>
            <input type="number" name="idade" required>
            <br>
            <p>Tipo de ingresso:</p>
            <select name="ingresso">
                <option value="VIP">VIP</option>
                <option value="Regular">Regular</option>
                <option value="Básico">Básico</option>
            </select>
            <br>
            <br>
            <button type="submit">Enviar</button>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nome = $_POST['nome'];
                    $ingresso = $_POST['ingresso'];
                    $idade = $_POST['idade']; // Corrigido de 'number' para 'idade'

                    echo "<p>Bem-vindo(a), $nome!</p>";

                    if ($idade < 18) {
                        echo "<p>Ingresso não permitido para menores de idade.</p>";
                    } else {
                        switch ($ingresso) {
                            case 'Regular': // Corrigido para 'Regular'
                                $valor = 50;
                                break;

                            case 'Básico': // Corrigido para 'Básico'
                                $valor = 20;
                                break;

                            case 'VIP':
                                $valor = 100;
                                break;

                            default:
                                echo "<p>Tipo de ingresso inválido.</p>";
                                exit;
                        }

                        echo "<p>O valor do seu ingresso $ingresso é R$ " . number_format($valor, 2, ',', '.') . "</p>";
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>