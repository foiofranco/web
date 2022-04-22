<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARtup - Funcionários</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }

        body {
            background-color: #201b2c;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            margin-top: 10px;
            text-align: center;
            color: #ffd700;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .box {
            color: #f0ffffde;
            margin-bottom: 10px;
            width: 40%;
        }

        .infos {
            background-color: #2f2841;
            padding: 10px 10px;
            border-radius: 8px;
        }

        .back {
            text-align: right;
            color: #f0ffffde;
            font-size: 16pt;
            text-decoration: none;
        }

        hr {
            margin: 5px 0px;
        }

        label {
            color: #ffd700;
        }
    </style>
</head>

<body>
    <?php
    include "connectDB.php";
    $tbcliente = mysqli_query($link, "SELECT * FROM tbcliente");
    echo "<h1>Funcionários</h1>";
    while ($cliente = mysqli_fetch_assoc($tbcliente)) {
        echo "<div class='container'>";
        echo "  <div class='box'>";
        echo "      <div class='infos'>";
        echo "          <label><strong>ID:</strong> </label>" . $cliente['id_cli'] . "</br><hr>";
        echo "          <label><strong>Nome:</strong> </label>" . $cliente['nome_cli'] . "</br><hr>";
        echo "          <label><strong>E-mail:</strong> </label>" . $cliente['email_cli'] . "</br><hr>";
        echo "          <label><strong>Endereço:</strong> </label>" . $cliente['end_cli'] . "</br><hr>";
        echo "          <label><strong>Cidade:</strong> </label>" . $cliente['cidade_cli'] . "</br><hr>";
        echo "          <label><strong>Estado:</strong> </label>" . $cliente['uf_cli'] . "</br>";
        echo "      </div>";

        echo "  </div>";
        echo "</div>";
    }
    ?>
    <p align='center'><a href='site.php' class='back'>&#x2B05;</a></p>";
</body>

</html>