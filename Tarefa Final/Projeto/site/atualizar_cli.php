<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARtup - Alterar</title>
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

        h2 {
            margin-bottom: 5px;
            color: #ffd700;
            text-transform: uppercase;
        }

        .button {
            width: 100%;
            padding: 16px 0px;
            margin: 10px 0px;
            border: none;
            outline: none;
            border-radius: 8px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #2b134b;
            background: #ffd700;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #fbff0052;
            box-sizing: border-box;
        }

        label {
            color: #f0ffffde;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 15px;
            background: #514869;
            color: #f0ffffde;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #00000056;
            outline: none;
            box-sizing: border-box;
            margin-bottom: 5px;
        }

        .msg {
            color: #f0ffffde;
            text-align: center;
        }

        .back {
            text-align: right;
            color: #f0ffffde;
            font-size: 16pt;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['logou']) {
        echo "<div class='container'>";
        echo "      <h2>Funcionário a Alterar</h2>";
        echo "      <form action='atualizarDB.php' method='POST'>";
        echo "          <label class='id' >Identificador: <label><input type='text' name='id' placeholder='Insira o ID do funcionário.'>";
        echo "          <h2 align='center'>Alterar Dados</h2>";
        echo "          <label>Nome: </label><input type='text' name='nome' placeholder='Insira o nome do funcionário.'/><br>";
        echo "          <label>E-mail: </label><input type='text' name='email' placeholder='Insira o e-mail do funcionário.'/><br>";
        echo "              <label>Endereço: </label><input type='text' name='end' placeholder='Insira o endereço do funcionário.'/><br>";
        echo "              <label>Cidade: </label><input type='text' name='cidade' placeholder='Insira a cidade do funcionário.'/><br>";
        echo "              <label>Estado: </label><input type='text' name='uf' placeholder='Insira o estado do funcionário.'/><br>";
        echo "              <input type='submit' class='button' value='Confirmar'>";
        echo "      </form>";
        echo "  <div class='msg'>";
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        echo "  </div>";
        echo "  <p align='center'><a href='site.php' class='back' >&#x2B05;</a></p>";
        echo "</div>";
    } else {
        $_SESSION['msg'] = "Página inexistente!";
        header("Location: index.php");
    }
    ?>
</body>

</html>