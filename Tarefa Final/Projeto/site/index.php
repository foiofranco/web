<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARtup - Login</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        .main-login {
            width: 100vw;
            height: 100vh;
            background: #201b2c;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-login {
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .left-login>h1 {
            font-size: 2.5vw;
            color: #ffd700;
        }

        .left-login>img {
            width: 40vw;
        }

        .right-login {
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-login {
            width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px 35px;
            background: #2f2841;
            border-radius: 20px;
            box-shadow: 0px 10px 40px #00000056;
        }

        .card-login>h1 {
            color: #ffd700;
            font-weight: 800;
        }

        .textfield {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0px;
        }

        .textfield>input {
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
        }

        .textfield>label {
            color: #f0ffffde;
            margin-bottom: 10px;
        }

        .textfield>input::placeholder {
            color: #f0ffff94;
        }

        .btn-login {
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

        .msg {
            color: #f0ffffde;
            font-size: 12pt;
        }

        @media only screen and (max-width: 950px) {
            .card-login {
                width: 85%;
            }
        }

        @media only screen and (max-width: 600px) {
            .main-login {
                flex-direction: column;
            }

            .left-login>h1 {
                display: none;
            }

            .left-login {
                width: 100%;
                height: auto;
            }

            .right-login {
                width: 100%;
                height: auto;
            }

            .left-login>img {
                width: 50vw;
            }

            .card-login {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Seja bem-vindo ao<br>sistema de registro da empresa!</h1>
            <img src="imgs/arte.svg" alt="Arte">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form method='POST' action='verificarLogin.php'>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="user" placeholder="Usuário" required="">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required="">
                    </div>
                    <input type="submit" name="login" value="Login" class="btn-login"></input>
                </form>
                <div class="msg">
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>