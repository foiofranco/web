<?php
    include "connectDB.php";
    session_start();
    
    //Verificar id:
    $id = $_POST['id'];
    $id_existe = "SELECT * FROM tbcliente WHERE id_cli='$id'";
    $testar_id = mysqli_query($link, $id_existe);
    $resultado = mysqli_fetch_array($testar_id);

    if($resultado['id_cli']){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $end = $_POST['end'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];

        $sql = "UPDATE tbcliente SET nome_cli='$nome', email_cli='$email', end_cli='$end', cidade_cli='$cidade', uf_cli='$uf' WHERE id_cli='$id'";
        mysqli_query($link, $sql);
        $_SESSION['msg'] = "Cliente alterado!";
        header("Location: site.php");
    }else{
        $_SESSION['msg'] = "Cliente não existe!";
        header("Location: atualizar_cli.php");
    }
?>