<?php
    session_start();
    include "connectDB.php";

    //Verificar id:
    $id = $_POST['id'];
    $id_existe = "SELECT * FROM tbcliente WHERE id_cli='$id'";
    $testar_id = mysqli_query($link, $id_existe);
    $resultado = mysqli_fetch_array($testar_id);

    if($resultado['id_cli']){
        $sql = "DELETE FROM tbcliente WHERE id_cli='$id'";
        mysqli_query($link, $sql);
        $_SESSION['msg'] = "Cliente excluído!";
        header("Location: site.php");
    }else{
        $_SESSION['msg'] = "Cliente não existe!";
        header("Location: excluir.php");
    }
?>