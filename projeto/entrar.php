<?php
include 'dao.php';

session_start();

if(empty($_GET['email_login']) || empty($_GET['senha_login'])){
    header('Location: index.php');
    exit();
}

$email_login = mysqli_real_escape_string($con, $_GET['email_login']);
$senha_login = mysqli_real_escape_string($con, $_GET['senha_login']);

$query = "SELECT email,senha FROM login where email = '{$email_login}' and senha = '{$senha_login}';";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email_login'] = $email_login;
    header('Location: index_usuario.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
}


?>