<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARtup - Menu</title>
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
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            margin-bottom: 10px;
            color: #ffd700;
            text-transform: uppercase;
        }

        p {
            margin-bottom: 10px;
            color: #f0ffffde;
            font-size: 14pt;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        li {
            float: left;
            list-style-type: none;
            padding: 10px;
            text-transform: uppercase;
            font-size: 12pt;
            font-weight: 800;
            border-right: 1px solid #551a8b;
        }

        .last-child {
            border-right: none;
        }

        ul {
            margin-top: 10px;
            display: flex;
            padding: 8px;
            background-color: #ffd700;
            flex-direction: row;
            border-radius: 8px;
        }

        .msg {
            color: #f0ffffde;
            text-align: center;
        }

        img {
            width: 49vw;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['logou']) {
        echo "<div class='container'>";
        echo "      <h1>Olá, funcinário! &#x1F44B</h1>";
        echo "      <p>&#x2B50 Bem-vindo ao sistema de registro da STARtup! &#x2B50<br> &#x2728 A empresa onde os devs front-end brilham! &#x2728</p>";
        echo "      <ul>";
        echo "          <li><a href='cadastro.php'>Cadastrar<a/></li>";
        echo "          <li><a href='listaClientes.php'>Listar<a/></li>";
        echo "          <li><a href='excluir.php'>Excluir<a/></li>";
        echo "          <li><a href='atualizar_cli.php'>Alterar<a/></li>";
        echo "          <li><a href='pesquisar.php'>Pesquisar<a/></li>";
        echo "          <li class='last-child'><a href='sair.php'>Sair<a/></li>";
        echo "      </ul>";
        echo "      <img src='imgs/arte-menu.svg' alt='Arte'>";
        echo "      <div class='msg'> ";
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        echo "      </div>";
        echo "</div>";
    } else {
        $_SESSION['msg'] = "Página inexistente!";
        header("Location: index.php");
    }
    ?>
</body>

</html>