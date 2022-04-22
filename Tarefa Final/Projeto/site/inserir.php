<?php
session_start();
include "connectDB.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$end = $_POST['end'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

//Verificar e-mail:
$email_existe = "SELECT * FROM tbcliente WHERE email_cli='$email'";
$testar_email = mysqli_query($link, $email_existe);
$resultado = mysqli_fetch_array($testar_email);
echo $resultado;
if ($resultado['email_cli']) {
    $_SESSION['msg'] = "E-mail existente no sistema!";
    header("Location: cadastro.php");
} else {
    $sql = "INSERT INTO tbcliente(nome_cli, email_cli, end_cli, cidade_cli, uf_cli) VALUES ";
    $sql .= "('$nome', '$email', '$end', '$cidade', '$uf')";
    mysqli_query($link, $sql) or die('Erro no cadastro!' . mysqli_error($link));
    mysqli_close($link);
    $_SESSION['msg'] = "Cliente cadastrado com sucesso!";
    header("Location: site.php");
}
