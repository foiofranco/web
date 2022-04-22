<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARtup - Resultados</title>
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
            color: #ffd700;
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
    session_start();
    if ($_SESSION['logou']) {
        include "connectDB.php";
        $buscar = $_POST['buscar'];

        switch ($_POST['select']) {
            case 1:
                $sql = "SELECT * FROM tbcliente WHERE nome_cli='$buscar'";
                break;
            case 2:
                $sql = "SELECT * FROM tbcliente WHERE email_cli='$buscar'";
                break;
            case 3:
                $sql = "SELECT * FROM tbcliente WHERE cidade_cli='$buscar'";
                break;
            case 4:
                $sql = "SELECT * FROM tbcliente WHERE uf_cli='$buscar'";
                break;
        }

        echo "<h1>Resultados</h1>";
        $tbcliente = mysqli_query($link, $sql);
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
    } else {
        $_SESSION['msg'] = "Página inexistente!";
        header("Location: index.php");
    }
    ?>
    <p align='center'><a href='site.php' class='back'>&#x2B05;</a></p>";
</body>

</html>