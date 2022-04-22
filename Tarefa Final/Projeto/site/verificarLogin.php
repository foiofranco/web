<?php
    session_start();
    include_once("connectDB.php");

    $_SESSION['logou'] = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);

    if($_SESSION['logou']){
        $usuario = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        

        if((!empty($usuario)) AND (!empty($senha))){
            $user_verificar = "SELECT user_login, pass_login FROM tblogin WHERE user_login='$usuario' LIMIT 1";
            $user_verificado = mysqli_query($link, $user_verificar);
            if($user_verificado){
                $row_user = mysqli_fetch_assoc($user_verificado);

                if(password_verify($senha, $row_user['pass_login'])){
                    header("Location: site.php");
                }else{
                    $_SESSION['msg'] = "Login ou senha incorretos!";

                    header("Location: index.php");
                }
            }else{
                $_SESSION['msg'] = "Login ou senha incorretos!";

                header("Location: index.php");
            }
        }else{
            $_SESSION['msg'] = "Digite login e senha!";

                header("Location: index.php");
        }
    }else{
            $_SESSION['msg'] = "Página não encontrada!";

            header("Location: index.php");
    }
?>